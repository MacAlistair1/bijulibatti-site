<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(7);
        $title = "Bijuli Batti | Manage Products";

        return view('manage.product')->with(['title' => $title, 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = SubCategory::orderBy('id', 'ASC')->get();
        $title = "Bijuli Batti | Add Product";

        return view('manage.add-product')->with(['title' => $title, 'subcategories' => $subcategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'subcategory' => 'required',
            'name' => 'required|max:150|unique:products',
            'price' => 'required',
            'company_name' => 'required',
            'image' => 'required|image|max:2999',
        ]);

        $product = new Product;
        
        $product->slug = str_slug($request->name);
        $product->price = $request->price;
        $product->company_name = $request->company_name;

        $subcategory = SubCategory::where('id', $request->subcategory)->first();
        $product->subcategory_id = $request->subcategory;
        $product->category_id = $subcategory->category->id;


        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456,999999).".".$image_ext;
            $destination_path = public_path('/img/site/'.$subcategory->category->name.'/'.$subcategory->name.'/'.$request->name);
            $image->move($destination_path, $new_image_name);
        }

        $product->name = $request->name;
        $product->image = $new_image_name;


        if($request->bestseller == null){
            $product->bestseller  = 0;
        }else{
            $product->bestseller = $request->bestseller;
        }

        if($request->popular == null){
            $product->popular  = 0;
        }else{
            $product->popular = $request->popular;
        }

        if($request->seasonal == null){
            $product->seasonal  = 0;
        }else{
            $product->seasonal = $request->seasonal;
        }
       
        if($request->highprice == null){
            $product->highprice  = 0;
        }else{
            $product->highprice = $request->highprice;
        }

        if($request->featured == null){
            $product->featured  = 0;
        }else{
            $product->featured = $request->featured;
        }

        if($request->latest == null){
            $product->latest  = 0;
        }else{
            $product->latest = $request->latest;
        }


        $product->save();

        return back()->with('success', 'Product has been added!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $subcategories = SubCategory::orderBy('id', 'ASC')->get();
        $title = "Bijuli Batti | Edit ".$product->name;
        return view('manage.edit-product')->with(['subcategories' => $subcategories, 'product' => $product, 'title' => $title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'subcategory' => 'required',
            'name' => 'required|max:150|unique:products',
            'price' => 'required',
            'company_name' => 'required',
        ]);
        $product = Product::find($id);
        

        $product->slug = str_slug($request->name);
        $product->price = $request->price;
        $product->company_name = $request->company_name;

        $subcategory = SubCategory::where('id', $request->subcategory)->first();
        $product->subcategory_id = $request->subcategory;
        $product->category_id = $subcategory->category->id;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456,999999).".".$image_ext;
            $destination_path = public_path('/img/site/'.$subcategory->category->name.'/'.$subcategory->name.'/'.$request->name);
            $image->move($destination_path, $new_image_name);
        }else{
            rename (public_path().'/img/site/'.$subcategory->category->name.'/'.$subcategory->name.'/'.$product->name, public_path().'/img/site/'.$subcategory->category->name.'/'.$subcategory->name.'/'.$request->name);
            $new_image_name = $product->image;
        }
        $product->name = $request->name;
        $product->image = $new_image_name;

        if($request->bestseller == null){
            $product->bestseller  = 0;
        }else{
            $product->bestseller = $request->bestseller;
        }

        if($request->popular == null){
            $product->popular  = 0;
        }else{
            $product->popular = $request->popular;
        }

        if($request->seasonal == null){
            $product->seasonal  = 0;
        }else{
            $product->seasonal = $request->seasonal;
        }
       
        if($request->highprice == null){
            $product->highprice  = 0;
        }else{
            $product->highprice = $request->highprice;
        }

        if($request->featured == null){
            $product->featured  = 0;
        }else{
            $product->featured = $request->featured;
        }

        if($request->latest == null){
            $product->latest  = 0;
        }else{
            $product->latest = $request->latest;
        }


        $product->save();

        return redirect('/admin/manage-products')->with('success', 'Product has been updated!!');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        unlink(public_path().'/img/site/'.$product->category->name.'/'.$product->subcategory->name.'/'.$product->name.'/'.$product->image);
		rmdir(public_path().'/img/site/'.$product->category->name.'/'.$product->subcategory->name.'/'.$product->name);
        return back()->with('success', 'Product has been deleted!!');
    }
}
