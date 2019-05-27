<br><div class="includeDivMaster" style="background-color:#4ef442">
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
                    <div class="card-body card-block col-1">
                        <div class="form-group">
                            <button onClick="$(this).closest('.includeDivMaster').remove();" type="button" class="btn btn-danger" >X</button>
                        </div>
                    </div>
                </div>
            </div>