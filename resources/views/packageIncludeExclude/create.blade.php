@extends('layout_admin')
@section('content')

<div class="col-lg-12">
    <button id="addNewInclude" class="btn btn-info" >+</button>
    <form method="POST" action="{{route('packageIncludeExclude.store')}}">
        {{csrf_field()}}
        <div class="card" id="includeMasterdiv">
            <div class="card-header">
                <strong>Package</strong>
            </div>
            <div style="background-color:#4ef442">
                <div class="row">
                    <div class="card-body card-block clo-4">
                        <div class="form-group">
                            <label for="include_detail" class=" form-control-label">Include Details</label>
                            <input type="text" name="include_detail[]"  class="form-control">
                        </div>
                    </div>
                    <div class="card-body card-block col-3">
                        <div class="form-group">
                            <label for="include_status" class=" form-control-label">Status</label>
                              <select class="form-control" name="include_status[]">
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body card-block">
            <div class="form-group">
              <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>  
          </div>
      </div>
      
      
  </form>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#addNewInclude").on('click', function(){
         $.ajax({
          method: 'GET',
          url: "{{url('/includeExcludeDiv')}}",
          success: function(data){
            $("#includeMasterdiv").append(data);
        }
    });
     })
    });
</script>

@endsection()

