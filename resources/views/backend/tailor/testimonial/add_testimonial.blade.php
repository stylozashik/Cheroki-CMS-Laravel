@extends('backend.tailor.lib.layout')

@section('heading')
    Add Testimonial Info
@endsection

@section('main_content')
<form role="form" action="{{ url('dashboard/tailor/testimonial/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="our_works_title">Customer Name</label>
            <input type="text" class="form-control" name="customer_name" placeholder="Ashikur">
        </div>
        <div class="form-group">
            <label for="textarea">Write some testimonial description</label>
            <textarea class="textarea" name="testimonial_details" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 20px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>
    </div>
    <!-- /.card-body -->
  
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection