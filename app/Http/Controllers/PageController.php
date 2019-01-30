<?php

namespace App\Http\Controllers;

use Session;
use App\Site;
use App\AdView;
use App\Product;
use App\Category;
use App\TopBanner;
use App\SubCategory;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function sitedetails(){
        $site = Site::first();
        Session::flash('contact', $site->contact);
        Session::flash('contact1', $site->contact1);
        Session::flash('email', $site->email);
        Session::flash('email1', $site->email1);
        Session::flash('address', $site->address);
        Session::flash('name', $site->name);
        Session::flash('about', $site->about);
        Session::flash('fb_url', $site->fb_url);
        Session::flash('twitter_url', $site->twitter_url);
        Session::flash('insta_url', $site->insta_url);
        Session::flash('gplus_url', $site->gplus_url);
        Session::flash('logo', $site->logo);
        Session::flash('pobox', $site->pobox);
    }

    public function index(){
        $this->sitedetails();
        $title = session('name')." | Home";
        $categories = Category::orderBy('id', 'ASC')->get();
        $fewcate = Category::orderBy('id', 'ASC')->take(3)->get();
        $my_cats = Category::orderBy('id', 'ASC')->skip(3)->take(3)->get();
    


        $bestseller = Product::where('bestseller', 1)->get();
        $latest = Product::where('latest', 1)->get();
        $featured = Product::where('featured', 1)->get();
        $highprice = Product::where('highprice', 1)->get();
        $seasonal1 = Product::where('seasonal', 1)->take(1)->get();
        $seasonal = Product::where('seasonal', 1)->skip(1)->take(15)->get();
        $top_banners = TopBanner::orderBy('id', 'ASC')->get();
        $ad_view = AdView::first();
        $ad1 = array($ad_view->ad_title1, $ad_view->ad_image1);
        $ad2 = array($ad_view->ad_title2, $ad_view->ad_image2);
        $ad3 = array($ad_view->ad_title3, $ad_view->ad_image3);
        $ad4 = array($ad_view->ad_title4, $ad_view->ad_image4);
        $ad5 = array($ad_view->ad_title5, $ad_view->ad_image5);


        return view('welcome')->with([ 
            'title' => $title, 
            'categories' => $categories,
             'fewcate' => $fewcate, 
             'bestseller' => $bestseller, 
             'seasonal' => $seasonal, 
             'seasonal1' => $seasonal1,
             'latest' => $latest,
             'featured' => $featured,
             'highprice' => $highprice ,
             'my_cats' => $my_cats,
             'top_banners' => $top_banners,
             'ad1' => $ad1,
             'ad2' => $ad2,
             'ad3' => $ad3,
             'ad4' => $ad4,
             'ad5' => $ad5]);
    }

    public function about(){
        
        $this->sitedetails();
        $title = session('name')." | About Us";
        $categories = Category::orderBy('id', 'ASC')->get();
        $fewcate = Category::orderBy('id', 'ASC')->take(3)->get();
        $top_banners = TopBanner::orderBy('id', 'ASC')->get();
        return view('pages.about-us')->with([ 
            'title' => $title, 
            'categories' => $categories,
             'fewcate' => $fewcate,
             'top_banners' => $top_banners ]);
    }

    public function category($slug){
     
        $category = Category::where('slug', $slug)->take(1)->first();
       
        $this->sitedetails();
        $title = session('name')." | ".$category->name;
        $categories = Category::orderBy('id', 'ASC')->get();
        $fewcate = Category::orderBy('id', 'ASC')->take(3)->get();
        return view('pages.products')->with([ 
            'title' => $title, 
            'categories' => $categories, 
            'fewcate' => $fewcate, 
            'category' => $category ]);

    }
}
