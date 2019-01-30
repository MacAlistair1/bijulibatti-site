<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'ASC')->paginate(7);
        $title = "Bijuli Batti | Manage Categories";

        return view('manage.category')->with(['title' => $title, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Bijuli Batti | Add Category";

        return view('manage.add-category')->with('title', $title);
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
            'image' => 'required|image|max:2999|mimes:jpg,png,bmp,jpeg',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->slug = str_slug($request->name);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456,999999).".".$image_ext;
            $destination_path = public_path('/img/site/'.$request->name);
            $image->move($destination_path, $new_image_name);
        }
        $category->image = $new_image_name;
        $category->save();

        return back()->with('success', 'Category has been added!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $title = "Bijuli Batti | Edit ".$category->name;
        return view('manage.edit-category')->with(['category' => $category, 'title' => $title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        
        $category->slug = str_slug($request->name);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456,999999).".".$image_ext;
            $destination_path = public_path('/img/site/'.$request->name);
            $image->move($destination_path, $new_image_name);
        }else{
			
            $new_image_name = $category->image;
        }
        $category->name = $request->name;
        $category->image = $new_image_name;
        $category->save();

        return redirect('/admin/manage-categories')->with('success', 'Category has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        unlink(public_path().'/img/site/'.$category->name.'/'.$category->image);
        return back()->with('success', 'Category has been deleted!!');

    }
}
