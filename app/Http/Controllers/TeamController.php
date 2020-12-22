<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TeamController extends SuperAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AdminCheckAuth();
        return view('backend.team');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_member()
    {
        return view('backend.team.add_member');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_member(Request $request)
    {
        $team = new \App\OurTeam ;

        //validate form data field
        $validatedData = $request->validate([
            'photo' => 'required',
            'designation' => 'required',
            'name' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'pinterest' => 'required',
            'linkdin' => 'required',
            'twitter' => 'required',
        ]);

        $image_file = $request->file('photo');
        if($image_file){
            $image_name = 'photo-' . time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('media',$image_name);
            $team->photo = $image_path ;
        }
        $team->designation = request('designation');
        $team->name = request('name');
        $team->facebook = request('facebook');
        $team->instagram = request('instagram');
        $team->pinterest = request('pinterest');
        $team->linkdin = request('linkdin');
        $team->twitter = request('twitter');
        
        
        $team->save();

        return Redirect::to('/dashboard');
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
