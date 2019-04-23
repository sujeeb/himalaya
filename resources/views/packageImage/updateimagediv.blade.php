<br>            <div class="row" style="background-color:#acc1e2">
                <div class="card-body card-block col-4">
                    <div class="form-group">
                        <label for="image_title" class=" form-control-label">Image title</label>
                        <input type="hidden" value="0" name ="id[]">
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