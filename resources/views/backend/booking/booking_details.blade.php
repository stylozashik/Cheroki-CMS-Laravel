@extends('backend.lib.layout')

@section('main_content')
    <div class="alert alert-secondary" role="alert">
        Customer ID : {{ $booking->booking_id }}
    </div>
    <div class="jumbotron">
        <h1 class="display-4">{{ $booking->customer_name }}</h1>
    <p class="lead"><i class="fas fa-envelope"></i>  {{ $booking->customer_email }}</p>
    <p class="lead"><i class="fas fa-phone-alt"></i> {{ $booking->customer_phone }}</p>
    <p class="lead"><i class="fas fa-user-clock"></i> {{ $booking->booking_time }}</p>
        <hr class="my-4">
        <div class="card">
            <div class="card-body">
                <i class="fas fa-sms"></i> {{ $booking->message }}
            </div>
          </div>
    <a class="btn btn-warning btn-lg" href="{{ url('dashboard/booking') }}" role="button"><i class="fas fa-arrow-circle-left"></i> Go back</a>
  </div>

@endsection
