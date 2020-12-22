@extends('backend.tailor.lib.layout')

@section('main_content')
<h2 class="contact-form-title">Contact</h2>
						
<form role="form" action="/dashboard/tailor/booking/{{ $booking->booking_id }}/update" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    <div class="form-group">
        <input type="text" name ="customer_name" class="form-control" value="{{$booking->customer_name}}" placeholder="Enter Your Name" />
    </div>
    
    <div class="form-group">
        <input type="number" name="customer_phone" maxlength="11" value="{{$booking->customer_phone}}" class="form-control" placeholder="Enter phone number" />
    </div>
    
    <div class="form-group">
        <input type="email" name ="customer_email" value="{{$booking->customer_email}}" class="form-control" placeholder="Enter Your Email" />
    </div>

    <div class="form-group">
        <input type="text" name="booking_time" value="{{$booking->booking_time}}" class="form-control" placeholder="9.59 am" />
    </div>

    <div class="form-group">
    <textarea class="form-control" name="message" rows="5" placeholder="Write Message Here">{{ $booking->message }}</textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-success btn-lg" value="Update" />
        <a class="btn btn-warning btn-lg" href="{{ url('dashboard/booking') }}" role="button"><i class="fas fa-arrow-circle-left"></i> Go back</a>
    </div>
</form>


@endsection
