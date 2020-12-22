@extends('backend.lib.layout')

@section('heading')
    Add Banner Logo
@endsection

@section('main_content')
<form role="form" action="{{ url('dashboard/banner/logo/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="logoImage">Upload here</label>
            <input type="file" class="form-control-file" name="logo_image">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection