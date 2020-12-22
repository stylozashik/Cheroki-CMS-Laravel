<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class BookingController extends SuperAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AdminCheckAuth();
        $booking_data = DB::table('bookings')->get();
        return view('backend.booking',compact('booking_data'));
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
        $booking = new \App\Booking ;

        //validate form data field
        $validatedData = $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'booking_time' => 'required',
            'message' => 'required',
        ]);

        $booking->customer_name = request('customer_name');
        $booking->customer_phone = request('customer_phone');
        $booking->customer_email = request('customer_email');
        $booking->booking_time = request('booking_time');
        $booking->message = request('message');
        

        $booking->save();

        Session::put('message','booking is successfull');
        Session::put('customer', request('customer_name'));
        Session::put('time', request('booking_time'));
        
        return Redirect::to('/saloon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($booking_id)
    {
        $booking = DB::table('bookings')
                            ->select('bookings.*')
                            ->where('booking_id','=',$booking_id)
                            ->first();
        return view('backend.booking.booking_details',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($booking_id)
    {
        $booking = DB::table('bookings')
                            ->select('bookings.*')
                            ->where('booking_id','=',$booking_id)
                            ->first();
        return view('backend.booking.booking_edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $booking_id)
    {
        $find_booking = \App\Booking::findOrFail($booking_id);

        $find_booking->customer_name = request('customer_name');
        $find_booking->customer_email = request('customer_email');
        $find_booking->customer_phone = request('customer_phone');
        $find_booking->booking_time = request('booking_time');
        $find_booking->message = request('message');
        
        $validatedData = $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'booking_time' => 'required',
            'message' => 'required',
        ]);

        $find_booking->save();
        return redirect('/dashboard/booking');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($booking_id)
    {
        $find_booking = \App\Booking::findOrFail($booking_id);
        $find_booking->delete();

        Session::put('message','Booking details removed.');
        Session::put('customer_name',$find_booking->customer_name);
        return redirect('/dashboard/booking');

    }
}
