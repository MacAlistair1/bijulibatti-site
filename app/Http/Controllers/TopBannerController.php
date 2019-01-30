<?php

namespace App\Http\Controllers;

use App\TopBanner;
use Illuminate\Http\Request;

class TopBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = TopBanner::orderBy('id', 'ASC')->paginate(7);
        $title = "Bijuli Batti | Manage Top Banners";

        return view('manage.topbanner')->with(['title' => $title, 'banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Bijuli Batti | Add Top Banner";

        return view('manage.add-topbanner')->with('title', $title);
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
            'title' => 'required',
            'heading' => 'required',
            'image' => 'required|image|max:3999',
        ]);

        $banner = new TopBanner;
        $banner->title = $request->title;
        $banner->heading = $request->heading;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456,999999).".".$image_ext;
            $destination_path = public_path('/img/site/topbanner');
            $image->move($destination_path, $new_image_name);
        }

        $banner->image = $new_image_name;
        $banner->save();

        return back()->with('success', 'Top Banner has been added!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TopBanner  $topBanner
     * @return \Illuminate\Http\Response
     */
    public function show(TopBanner $topBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TopBanner  $topBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(TopBanner $topBanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TopBanner  $topBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopBanner $topBanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TopBanner  $topBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = TopBanner::find($id);
        $banner->delete();
        unlink(public_path().'/img/site/topbanner/'.$banner->image);
        return back()->with('success', 'Top Banner has been deleted!!');
    }
}
