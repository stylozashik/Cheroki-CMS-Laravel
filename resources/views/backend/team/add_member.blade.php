@extends('backend.lib.layout')

@section('heading')
Add Team Member
@endsection

@section('main_content')

<form role="form" action="{{ url('dashboard/team/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">

        <div class="form-group">
            <label for="photo">Upload Photo</label>
            <input type="file" class="form-control-file" name="photo">
        </div>
      <div class="form-group">
        <label for="designation">Designation</label>
        <input type="text" class="form-control" name="designation" placeholder="HAIR CUT & COLOR SPECIALIST">
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="ALAN BLACK">
      </div>
      <div class="form-group">
        <label for="facebook">Facebook URL</label>
        <input type="text" class="form-control" name="facebook" placeholder="facebook.com/u">
      </div>
      <div class="form-group">
        <label for="facebook">instagram URL</label>
        <input type="text" class="form-control" name="instagram" placeholder="instagram.com/u">
      </div>
      <div class="form-group">
        <label for="pinterest">Pinterest URL</label>
        <input type="text" class="form-control" name="pinterest" placeholder="pinterest.com/u">
      </div>
      <div class="form-group">
        <label for="linkdin">Linkdin URL</label>
        <input type="text" class="form-control" name="linkdin" placeholder="linkdin.com/u">
      </div>
      <div class="form-group">
        <label for="twitter">Twitter URL</label>
        <input type="text" class="form-control" name="twitter" placeholder="twitter.com/u">
      </div>
      

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

@endsection