@extends('layout_admin')
@section('content')

<div class="col-lg-12"> 
                <button id="addNewSummary" class="btn btn-info" >+</button>
    <form method="POST" action="{{route('packageSummary.store')}}">
        {{csrf_field()}}
        <div id="summaryMasterdiv" class="card">
            <div class="card-header">
                <strong>Summary Details</strong>
            </div>
                <div class="row" style="background-color:#acc1e2">
                    <div class="card-body card-block col-4">
                        <div class="form-group">
                            <label for="summary_title" class=" form-control-label">Summary title</label>
                            <input type="text" name="summary_title[]"  class="form-control">
                        </div>
                    </div>
                    <div class="card-body card-block col-8">
                        <div class="form-group">
                            <label for="summary_location" class=" form-control-label">Summary location</label>
                            <input type="text" name="summary_location[]"  class="form-control">
                        </div>
                    </div>
                
                    <div class="card-body card-block col-2">
                        <div class="form-group">
                            <label for="summary_status" class=" form-control-label">Status</label>
                            <input type="text" name="summary_status[]"  class="form-control">
                        </div>
                    </div>
                    <div class="card-body card-block col-10">
                        <div class="form-group">
                            <label for="summary_detail" class=" form-control-label">Summary details</label>
                            <textarea name="summary_detail[]"  class="form-control"></textarea>
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
        $("#addNewSummary").on('click', function(){
           $.ajax({
              method: 'GET',
              url: "{{url('/summarydiv')}}",
              success: function(data){
                    $("#summaryMasterdiv").append(data);
              }
           });
        })
    });
    </script>

@endsection()

