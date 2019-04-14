@extends('layout_admin')
@section('content')
 
<div class="col-lg-6">
    <form method="POST" action="{{url('/package/store')}}">
        {{csrf_field()}}
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Package</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="package_title" class=" form-control-label">Title</label>
                                            <input type="text" id="package_title" name="package_title"  class="form-control">
                                        </div>
                                    </div>
                                     <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="package_description" class=" form-control-label">Package Description</label>
                                            <input type="text" id="package_description" name="package_description"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="package_price" class=" form-control-label">Package price</label>
                                            <input type="text" id="package_price" name="package_price"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="status" class=" form-control-label">Package status</label>
                                            <input type="text" id="status" name="status"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="package_title_image" class=" form-control-label">Package title image</label>
                                            <input type="text" id="package_title_image" name="package_title_image"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="package_type" class=" form-control-label">Package type</label>
                                            <input type="text" id="package_type" name="package_type" class="form-control">
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

