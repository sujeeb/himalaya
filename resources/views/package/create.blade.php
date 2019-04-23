@extends('layout_admin')
@section('content')

<div class="col-lg-12">
    <form method="POST" action="{{url('/package/store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card">
            <div class="card-header col-12">
                <strong>Package</strong>
            </div>
            <div class="row">
                <div class="card-body card-block col-4">
                    <div class="form-group">
                        <label for="package_title" class=" form-control-label">Title</label>
                        <input type="text" id="package_title" name="package_title"  class="form-control">
                        {!! $errors->first('package_title', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="card-body card-block col-4">
                    <div class="form-group">
                        <label for="package_price" class=" form-control-label">Package price</label>
                        <input type="text" id="package_price" name="package_price"  class="form-control">
                        {!! $errors->first('package_price', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="card-body card-block col-3">
                    <div class="form-group">
                        <label for="status" class=" form-control-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                        
                        {!! $errors->first('status', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="card-body card-block col-4">
                    <div class="form-group">
                        <label for="package_title_image" class=" form-control-label">Package title image</label>
                        <input type="file" id="package_title_image" name="package_title_image"  class="form-control">
                        {!! $errors->first('package_title_image', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="card-body card-block col-4">
                    <div class="form-group">
                        <label for="package_type" class=" form-control-label">Package type</label>
                        <input type="text" id="package_type" name="package_type" class="form-control">
                        {!! $errors->first('package_type', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="card-body card-block col-6">
                    <div class="form-group">
                        <label for="package_description" class=" form-control-label">Package Description</label>
                        <textarea name="package_description" class="form-control">

                        </textarea>
                        {!! $errors->first('package_description', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div>
             <!--  multipledata add start package summary -->
             <div class="col-lg-12"> 


                <div id="summaryMasterdiv" class="card">
                    <div class="card-header">
                        <strong>Summary Details</strong>
                        <button type="button" id="addNewSummary" class="btn btn-info" >+</button>
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

                        <div class="card-body card-block col-3">
                            <div class="form-group">
                                <label for="summary_status" class=" form-control-label">Status</label>
                                <select class="form-control" name="summary_status[]">
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body card-block col-9">
                            <div class="form-group">
                                <label for="summary_detail" class=" form-control-label">Summary details</label>
                                <textarea name="summary_detail[]"  class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
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

            <!-- multiple data add end summary-->
            <!-- multiple data insert include exclude -->
            
                <div class="col-lg-12">
                    <div class="card" id="includeMasterdiv">
                        <div class="card-header">
                            <strong>Package Include/Exclude</strong>
                            <button type="button" id="addNewInclude" class="btn btn-info" >+</button>
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
            <!-- end multiple data insert include -->
            <!-- add image control  -->
            <div>
                <div class="row col-lg-12">
                    <div class="card" id="imageMasterdiv">
                        <div class="card-header">
                            <strong>Package Image</strong>
                            <button type="button" id="addImage" class="btn btn-info" >+</button>
                        </div>
                        <div style="background-color:#acc1e2">
                        <div class="row">
                            <div class="card-body card-block col-5">
                                <div class="form-group">
                                    <label for="image_title" class=" form-control-label">Image title</label>
                                    <input type="text" name="image_title[]"  class="form-control">
                                </div>
                            </div>
                            <div class="card-body card-block col-4">
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
                </div>
            </div>
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
            <!-- end image control -->

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

