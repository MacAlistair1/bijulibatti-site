<?php

namespace App\Http\Controllers;

use App\AdView;
use Illuminate\Http\Request;

class AdViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Manage Ads";
        return view('manage.ads')->with(['title' => $title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'page' => 'required',
            'image' => 'required|image|max:5999',
        ]);

        $page = $request->page;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456,999999).".".$image_ext;
            $destination_path = public_path('/img/site/ads');
            $image->move($destination_path, $new_image_name);
        }

        $ad = AdView::first();
        
        if($page == 1){
            $ad->ad_title1 = $request->title;
            $ad->ad_image1 = $new_image_name;
        }

        if($page == 2){
            $ad->ad_title2 = $request->title;
            $ad->ad_image2 = $new_image_name;
        }

        if($page == 3){
            $ad->ad_title3 = $request->title;
            $ad->ad_image3 = $new_image_name;
        }

        if($page == 4){
            $ad->ad_title4 = $request->title;
            $ad->ad_image4 = $new_image_name;
        }

        if($page == 5){
            $ad->ad_title5 = $request->title;
            $ad->ad_image5 = $new_image_name;
        }

        $ad->save();

        return back()->with('success', 'Ad Image Changed!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdView  $adView
     * @return \Illuminate\Http\Response
     */
    public function show(AdView $adView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdView  $adView
     * @return \Illuminate\Http\Response
     */
    public function edit(AdView $adView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdView  $adView
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdView $adView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdView  $adView
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdView $adView)
    {
        //
    }
}
