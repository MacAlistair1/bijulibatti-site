<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::orderBy('id', 'ASC')->paginate(7);
        $title = "Bijuli Batti | Manage SubCategories";

        return view('manage.subcategory')->with(['title' => $title, 'subcategories' => $subcategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        $title = "Bijuli Batti | Add SubCategory";

        return view('manage.add-subcategory')->with(['title' => $title, 'categories' => $categories]);
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
            'name' => 'required',
            'category' => 'required',
            'image' => 'required|image|max:2999|mimes:jpg,png,bmp,jpeg',
        ]);

        $category = Category::find($request->category);

        $subcategory = new SubCategory;
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category;
        $subcategory->slug = str_slug($request->name);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456,999999).".".$image_ext;
            $destination_path = public_path('/img/site/'.$category->name.'/'.$request->name);
            $image->move($destination_path, $new_image_name);
        }
        $subcategory->image = $new_image_name;
        $subcategory->save();

        return back()->with('success', 'Subcategory has been added!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        $title = "Bijuli Batti | Edit ".$subCategory->name;
        return view('manage.edit-subcategory')->with(['categories' => $categories, 'subcategory' => $subCategory, 'title' => $title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
      
        $this->validate($request, [
            'name' => 'required',
        ]);

        $category = Category::find($request->category);
        
        $subCategory->slug = str_slug($request->name);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456,999999).".".$image_ext;
            $destination_path = public_path('/img/site/'.$category->name.'/'.$request->name);
            $image->move($destination_path, $new_image_name);
        }else{
			
            $new_image_name = $subCategory->image;
        }
        $subCategory->name = $request->name;
        $subCategory->image = $new_image_name;
        $subCategory->save();

        return redirect('/admin/manage-subcategories')->with('success', 'SubCategory has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        unlink(public_path().'/img/site/'.$subCategory->category->name.'/'.$subCategory->name.'/'.$subCategory->image);
        $subCategory->delete();
        return back()->with('success', 'SubCategory has been deleted!!');
    }
}

