@extends('layout_admin')
@section('content')

<div class="col-lg-6">
    <form method="POST" action="{{route('packageIncludeExclude.store')}}">
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
                    <label for="include_detail" class=" form-control-label">Include Details</label>
                    <input type="text" id="include_detail" name="include_detail"  class="form-control">
                </div>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="include_status" class=" form-control-label">Include Status</label>
                    <input type="text" id="include_status" name="include_status"  class="form-control">
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

