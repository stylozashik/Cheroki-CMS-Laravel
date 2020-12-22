<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redirect;
use DB;

class TailorBannerController extends SuperAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AdminCheckAuth();
        return view('backend.tailor.banner');
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
        $banner = new \App\TailorBanner ;

        //validate form data field
        $validatedData = $request->validate([
            'logo_title' => 'required',
            'big_title_up' => 'required',
            'big_title_down' => 'required',
            'open_time' => 'required',
            'our_location' => 'required',
            'booking_contact' => 'required', 
        ]);

        $banner->logo_title = request('logo_title');
        $banner->big_title_up = request('big_title_up');
        $banner->big_title_down = request('big_title_down');
        $banner->open_time = request('open_time');
        $banner->our_location = request('our_location');
        $banner->booking_contact = request('booking_contact');

        $banner->save();

        return Redirect::to('/dashboard/tailor');



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
    public function edit()
    {
        $banner = DB::table('tailor_banners')->latest()->first();
        return view('backend.tailor.edit_banner',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $banner = DB::table('tailor_banners')->latest()->first();

        $find_banner = \App\TailorBanner::findOrFail($banner->banner_id) ;

        //validate form data field
        $validatedData = $request->validate([
            'logo_title' => 'required',
            'big_title_up' => 'required',
            'big_title_down' => 'required',
            'open_time' => 'required',
            'our_location' => 'required',
            'booking_contact' => 'required',  
        ]);
        $find_banner->logo_title = request('logo_title');
        $find_banner->big_title_up = request('big_title_up');
        $find_banner->big_title_down = request('big_title_down');
        $find_banner->open_time = request('open_time');
        $find_banner->our_location = request('our_location');
        $find_banner->booking_contact = request('booking_contact');
        $banner_file = $request->file('banner_image');

        $find_banner->save();

        return Redirect::to('/dashboard/tailor');

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

    public function banner_logo(){
        return view('backend.tailor.banner.banner_logo');
    }

    public function store_banner_logo(Request $request)
    {
        $banner_logo = new \App\TailorBannerLogo ;

        //validate form data field
        $validatedData = $request->validate([
            'logo_image' => 'required'
        ]);

        $logo_file = $request->file('logo_image');
        if($logo_file){
            $logoname = 'banner_logo_image-' . time() . '.' . $logo_file->getClientOriginalExtension();
            $logo_path = $logo_file->storeAs('media',$logoname);
            $banner_logo->banner_logo = $logo_path ;
        }

        $banner_logo->save();

        return Redirect::to('/dashboard/tailor');

    }

    public function banner_image(){
        return view('backend.tailor.banner.banner_image');
    }

    public function store_banner_image(Request $request)
    {
        $banner_image = new \App\TailorBannerImage ;

        //validate form data field
        $validatedData = $request->validate([
            'banner_image' => 'required'
        ]);

        $image_file = $request->file('banner_image');
        if($image_file){
            $imagename = 'banner_image-' . time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('media',$imagename);
            $banner_image->banner_image = $image_path ;
        }

        $banner_image->save();

        return Redirect::to('/dashboard/tailor');

    }
}
