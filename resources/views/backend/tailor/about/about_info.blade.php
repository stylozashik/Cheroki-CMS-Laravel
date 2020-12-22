@extends('backend.tailor.lib.layout')

@section('heading')
    Add About Info
@endsection

@section('main_content')
  <form role="form" action="{{ url('dashboard/tailor/about/info/store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="logo_title">About Heading</label>
          <input type="text" class="form-control" name="about_heading" placeholder="ABOUT CHEROKI TAILOR">
        </div>
        <div class="form-group">
          <label for="textarea">Write some description</label>
          <textarea class="textarea" name="about_description" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 20px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
  </form>
@endsection