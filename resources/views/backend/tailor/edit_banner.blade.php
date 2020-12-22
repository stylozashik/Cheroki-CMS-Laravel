@extends('backend.tailor.lib.layout')

@section('heading')
    Edit Banner
@endsection

@section('main_content')
<form role="form" action="{{ url('dashboard/tailor/banner/update') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card-body">
      <div class="form-group">
        <label for="logo_title">Tailor Name</label>
        <input type="text" class="form-control" name="logo_title" placeholder="Cheroki The Tailor" value="{{ $banner->logo_title }}">
      </div>
      <div class="form-group">
        <label for="big_title_up">First Big Title</label>
        <input type="text" class="form-control" name="big_title_up" placeholder="YOUR NEW PERFECT" value="{{ $banner->big_title_up }}">
      </div>
      <div class="form-group">
        <label for="big_title_down">Second Big Title</label>
        <input type="text" class="form-control" name="big_title_down" placeholder="STYLE & DESIGN" value="{{ $banner->big_title_down }}">
      </div>
      <div class="form-group">
        <label for="open_time">Open TIme</label>
        <input type="text" class="form-control" name="open_time" placeholder="Monday – Friday: 08:00 – 22:00" value="{{ $banner->open_time }}">
      </div>
      <div class="form-group">
        <label for="open_time">Our Location</label>
        <input type="text" class="form-control" name="our_location" placeholder="100 Mainstreet Center, Sydney" value="{{ $banner->our_location }}">
      </div>
      <div class="form-group">
        <label for="open_time">Booking Contact</label>
        <input type="text" class="form-control" name="booking_contact" placeholder="+208 333 9296" value="{{ $banner->booking_contact }}">
      </div>
      
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection