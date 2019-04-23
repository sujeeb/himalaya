@extends('layout_admin')
@section('content')

<div class="row col-lg-12">
    <button id="addImage" class="btn btn-info" >+</button>
    <form method="POST" action="{{route('packageImage.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card" id="imageMasterdiv">
            <div class="card-header col-12">
                <strong>Package Image</strong>
            </div>
            <div class="row" style="background-color:#acc1e2">
                <div class="card-body card-block col-4">
                    <div class="form-group">
                        <label for="image_title" class=" form-control-label">Image title</label>
                        <input type="text" name="image_title[]"  class="form-control">
                    </div>
                </div>
                <div class="card-body card-block col-5">
                    <div class="form-group">
                        <label for="image_name" class=" form-control-label">Image name</label>
                        <input type="file" name="image_name[]"  class="form-control">
                    </div>
                </div>
                <div class="card-body card-block col-3">
                    <div class="form-group">
                        <label for="image_status" class=" form-control-label">Status</label>
                         <select class="form-control" name="image_status[]">
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
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
        $("#addImage").on('click', function(){
         $.ajax({
          method: 'GET',
          url: "{{url('/imagediv')}}",
          success: function(data){
            $("#imageMasterdiv").append(data);
        }
    });
     })
    });
</script>

@endsection()

