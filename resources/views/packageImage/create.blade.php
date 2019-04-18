@extends('layout_admin')
@section('content')

<div class="col-lg-6">
    <form method="POST" action="{{route('packageImage.store')}}">
        {{csrf_field()}}
        <div class="card">
            <div class="card-header">
                <strong>Package</strong>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="package_id" class=" form-control-label">Package ID</label>
                    <input type="text" id="package_id" name="package_id"  class="form-control">
                </div>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="image_title" class=" form-control-label">Image title</label>
                    <input type="text" id="image_title" name="image_title"  class="form-control">
                </div>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="image_name" class=" form-control-label">Image name</label>
                    <input type="text" id="image_name" name="image_name"  class="form-control">
                </div>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="image_status" class=" form-control-label">Image status</label>
                    <input type="text" id="image_status" name="image_status"  class="form-control">
                </div>
            </div>
          
            <div class="card-body card-block">
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>  
              </div>
          </div>
      </div>
      
  </form>
</div>

@endsection()

