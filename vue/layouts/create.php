                <div id="popup">
                  
                    <form method="POST">

                        <div class="mb-3">
                            <label>Machine#</label>
                            <input type="text" name="machine" class="form-control" 
                                    value="<?php echo $machineId; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" 
                                    value="<?php echo $name; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label>Plant</label>
                            <input type="text" name="plant" class="form-control"  
                                    value="<?php echo $plant; ?>" required>
                        </div>
                        <div class="mb-3 ">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control"  
                                    value="<?php echo $status; ?>" required>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary">Submit</button>
                    </form>
                </div>