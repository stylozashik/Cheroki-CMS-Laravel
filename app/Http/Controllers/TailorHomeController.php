<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TailorHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tailor_index()
    {
        $logo = DB::table('tailor_brand_logos')->latest()->first();
        $banner_logo = DB::table('tailor_banner_logos')->latest()->first();
        $banner_info = DB::table('tailor_banners')->latest()->first();
        $banner_image = DB::table('tailor_banner_images')->latest()->first();
        $about_images = DB::table('tailor_about_images')->get()->take(3);
        $services = DB::table('tailor_service_infos')->get()->take(4);
        $team = DB::table('tailor_our_teams')->get()->take(4);
        $works = DB::table('tailor_our_works')->get()->take(8);
        $pricing_info = DB::table('tailor_pricing_infos')->get();
        $testimonials = DB::table('tailor_testimonials')->get();

        //dd($about_images);
        return view('frontend.tailor.tailor_index',
        compact
        (
            'logo',
            'banner_info',
            'banner_logo',
            'banner_image',
            'about_images',
            'services',
            'team',
            'works',
            'pricing_info',
            'testimonials'
        )
    );
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
