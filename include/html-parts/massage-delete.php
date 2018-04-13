<?php 
include('../../include/controller/permission.php'); ?>
<form class="form-horizontal">
            	  
                  <h4>Enter "Message ID" or "Message Email" to Delete:</h4>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Message ID</label>
                    <div class="col-sm-6">
                      <input type="number" name="message-id" class="form-control" onchange="checkid(this)" placeholder="Message ID">
                    </div>
                  </div>
                     
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Message Email</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="message-email" onchange="checkmail(this)"  placeholder="Message Email" />
                    </div>
                  </div>
                                                     
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default" name="delete-message">Delete Message</button>
                    </div>
                  </div>                  
                </form>