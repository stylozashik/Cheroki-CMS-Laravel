@extends('backend.tailor.lib.layout')

@section('heading')
    Add Price Info
@endsection

@section('main_content')
<form role="form" action="{{ url('dashboard/tailor/pricing/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="our_works_title">Price Title</label>
            <input type="text" class="form-control" name="pricing_title" placeholder="Shirt Cutting">
        </div>
        <div class="form-group">
            <label for="our_works_title">Price</label>
            <input type="number" class="form-control" name="price" placeholder="350">
        </div>
    </div>
    <!-- /.card-body -->
  
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection