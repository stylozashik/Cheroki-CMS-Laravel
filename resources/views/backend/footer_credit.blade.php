@extends('backend.lib.layout')

@section('heading')
    Add Footer Credentials
@endsection

@section('main_content')
<form role="form" action="{{ url('dashboard/footer/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="copyright_text">Copyright Text</label>
        <input type="text" class="form-control" name="copyright_text" placeholder="Cheroki Saloon">
      </div>
      
      <div class="form-group">
        <label for="develper_name">Write developer name here..</label>
        <textarea class="textarea" name="developer_name" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 20px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
      <div class="form-group">
        <label for="developer_url">Insert Developer URL</label>
        <input type="text" class="form-control" name="developer_url" placeholder="https://....">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection