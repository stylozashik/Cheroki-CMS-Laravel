@extends('backend.lib.layout')

@section('heading')
    Add About Image
@endsection

@section('main_content')
<form role="form" action="{{ url('dashboard/about/image/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
    <div class="form-group">
        <label for="brandLogo">Upload About Image</label>
        <input type="file" class="form-control-file" name="about_image">
    </div>
      
    </div>
    <!-- /.card-body -->
  
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection