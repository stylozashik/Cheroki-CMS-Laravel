<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function choose_index(){
        return view('frontend.choose_index');
    }

    public function saloon_index(){
        $logo = DB::table('brand_logos')->latest()->first();
        $banner_logo = DB::table('banner_logos')->latest()->first();
        $banner_info = DB::table('banners')->latest()->first();
        $banner_image = DB::table('banner_images')->latest()->first();
        $about_images = DB::table('about_images')->get()->take(3);
        $services = DB::table('service_infos')->get()->take(4);
        $team = DB::table('our_teams')->get()->take(4);
        $works = DB::table('our_works')->get()->take(8);
        $pricing_info = DB::table('pricing_infos')->get();
        $testimonials = DB::table('testimonials')->get();
        $footer = DB::table('footers')->latest()->first();
        //dd($footer);

        //dd($about_images);
        return view('frontend.index',compact(
            'logo',
            'banner_info',
            'banner_logo',
            'banner_image',
            'about_images',
            'services',
            'team',
            'works',
            'pricing_info',
            'testimonials',
            'footer'
        ));
    }

  
}
