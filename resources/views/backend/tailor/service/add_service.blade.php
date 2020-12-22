@extends('backend.tailor.lib.layout')

@section('heading')
    Add Service
@endsection

@section('main_content')
<form role="form" action="{{ url('dashboard/tailor/service/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="service_icon">Service Icon</label>
        <input type="text" class="form-control" name="service_icon" placeholder="flaticon-shaver">
      </div>
      <div class="form-group">
        <label for="service_title">Service Title</label>
        <input type="text" class="form-control" name="service_title" placeholder="BEARD TRIM">
      </div>
      <div class="form-group">
        <label for="textarea">Write some service description</label>
        <textarea class="textarea" name="service_description" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 20px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
      <div class="form-group">
        <label for="service_time">Service TIme</label>
        <input type="text" class="form-control" name="service_time" placeholder="30 MIN">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection