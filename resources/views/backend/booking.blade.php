@extends('backend.lib.layout')

@section('main_content')
<h2>Booking List</h2>
            @if(Session::has('message'))
				<div class="alert alert-danger" role="alert">
					<p class="text-center">
                    {{ Session::get('message') }} for the customer name : <strong>{{ Session::get('customer_name') }}</strong> !
					</p>
                </div>
                					
					{{ Session::forget('message') }}
			@endif
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col"><i class="fas fa-user"></i></th>
        <th scope="col">Customer Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Booking Time</th>
        <th scope="col">Navigation</th>
        <th scope="col">Erase</th>

      </tr>
    </thead>
    @foreach ($booking_data as $booking)
        <tbody>
            <tr>
                <th scope="row">{{ $booking->booking_id }}</th>
                <td>{{ $booking->customer_name }}</td>
                <td>{{ $booking->customer_phone }}</td>
                <td>{{ $booking->customer_email }}</td>
                <td><i class="far fa-clock"></i> {{ $booking->booking_time }}</td>
                <td>
                    <a class="btn btn-success" href="/dashboard/booking/{{ $booking->booking_id }}"> 
                        <i class="fas fa-eye"></i>
                    </a>
                    <a class="btn btn-warning" href="/dashboard/booking/{{ $booking->booking_id }}/edit"> 
                        <i class="fas fa-edit"></i>
                    </a>
                    
                </td>
                <td>
                    <form method="POST" action="/dashboard/booking/{{ $booking->booking_id }}/delete">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="Delete" class="btn btn-danger"> <i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        </tbody>
    @endforeach
    
  </table>
@endsection
