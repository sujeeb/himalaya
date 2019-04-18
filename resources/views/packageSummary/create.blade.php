@extends('layout_admin')
@section('content')

<div class="col-lg-6">
    <form method="POST" action="{{route('packageSummary.store')}}">
        {{csrf_field()}}
        <div class="card">
            <div class="card-header">
                <strong>Summary Details</strong>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="package_id" class=" form-control-label">Package Id</label>
                    <input type="text" id="package_id" name="package_id"  class="form-control">
                </div>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="summary_title" class=" form-control-label">Summary title</label>
                    <input type="text" id="summary_title" name="summary_title"  class="form-control">
                </div>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="summary_location" class=" form-control-label">Summary location</label>
                    <input type="text" id="summary_location" name="summary_location"  class="form-control">
                </div>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="summary_detail" class=" form-control-label">Summary details</label>
                    <input type="text" id="summary_detail" name="summary_detail"  class="form-control">
                </div>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="summary_status" class=" form-control-label">Summary status</label>
                    <input type="text" id="summary_status" name="summary_status"  class="form-control">
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

