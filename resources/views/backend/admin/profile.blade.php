@extends('backend.lib.layout')

@section('heading')
    Admin Profile
@endsection

@section('main_content')
@extends('backend.lib.layout')

@section('heading')
    Edit Banner
@endsection

@section('main_content')
    <form role="form" action="{{ url('dashboard/profile/admin/update') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card-body">

      <div class="form-group">
        <label for="adminName">Admin Name</label>
        <input type="text" class="form-control" name="admin_name" value="{{ $admin_profile->admin_name }}">
      </div>
      <div class="form-group">
        <label for="adminEmail">Admin Email</label>
        <input type="email" class="form-control" name="admin_email" value="{{ $admin_profile->admin_email }}">
      </div>
      <div class="form-group">
        <label for="adminEmail">Admin Passoword</label>
        <input type="password" class="form-control" name="admin_password" value="{{ $admin_profile->admin_password }}">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>

@endsection