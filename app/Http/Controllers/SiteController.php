<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site = Site::first();
        $title = "Bijuli Batti | Manage Detail";

        return view('manage.site')->with(['title' => $title, 'site' => $site]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        $this->validate($request, [
            'name' => 'required',
            'contact' => 'required',
            'email' => 'email|required',
            'address' => 'required',
            'about' => 'required',
        ]);

        $site->name = $request->name;
        $site->contact = $request->contact;
        $site->contact1 = $request->contact1;
        $site->email = $request->email;
        $site->email1 = $request->email1;
        $site->address = $request->address;
        $site->fb_url = $request->fb_url;
        $site->twitter_url = $request->twitter_url;
        $site->insta_url = $request->insta_url;
        $site->gplus_url = $request->gplus_url;
        $site->about = $request->about;


        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $logo_ext = $logo->getClientOriginalExtension();
            $new_logo_name = rand(123456,999999).".".$logo_ext;
            $destination_path = public_path('/img/site');
            $logo->move($destination_path, $new_logo_name);
            unlink(public_path().'/img/site/'.$site->logo);
        }else{
            $new_logo_name = $site->logo;
        }
        $site->logo = $new_logo_name;
        $site->save();

        return back()->with('success', 'Site Information has been Updated!!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}
