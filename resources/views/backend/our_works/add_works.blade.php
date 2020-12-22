@extends('backend.lib.layout')

@section('heading')
    Add Works
@endsection

@section('main_content')
<form role="form" action="{{ url('dashboard/our-works/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="our_works_image">Upload Works Image</label>
            <input type="file" class="form-control-file" name="our_works_image">
        </div>
        <div class="form-group">
            <label for="our_works_title">Works Title</label>
            <input type="text" class="form-control" name="our_works_title" placeholder="HAIR STYLE 1">
        </div>
    </div>
    <!-- /.card-body -->
  
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection