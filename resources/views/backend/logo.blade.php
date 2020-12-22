@extends('backend.lib.layout')

@section('heading')
    Add/Change Brand Logo
@endsection

@section('main_content')
@if ($logo != null)
  <img src="{{ asset("storage/$logo->brand_logo") }}" alt="LOGO" /> 
    <p>
      <a class="btn btn-warning" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Change Logo
      </a>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
        <form role="form" action="{{ url('dashboard/logo/store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
          <div class="form-group">
              <label for="brandLogo">Change Brand LOGO</label>
              <input type="file" class="form-control-file" name="brand_logo">
          </div>
            
          </div>
          <!-- /.card-body -->
        
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
@else
<form role="form" action="{{ url('dashboard/logo/store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card-body">
  <div class="form-group">
      <label for="brandLogo">Upload Brand LOGO</label>
      <input type="file" class="form-control-file" name="brand_logo">
  </div>
    
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
@endif

@endsection