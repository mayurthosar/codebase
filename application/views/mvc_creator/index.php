        
            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                               
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                              
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="panel panel-default">
                <div class="panel-body">
                    <?php
                    $attributes = array('class' => 'form-horizontal col-*-6', 'id' => 'myform');
                    echo form_open('/Mvc/create', $attributes);

                    ?>

                    <div class="form-group col-*-12"">
                    <?php
                    $attributes = array('class' => 'control-label col-sm-2');
                    echo form_label('DB Host', 'db_host', $attributes);
                    ?>
                      <div class="col-sm-6">          
                      <input type="text" class="form-control" id="db_host" name="db_host" required=>
                      </div>
                    </div>
                     <div class="form-group col-*-12"">
                    <?php
                    $attributes = array('class' => 'control-label col-sm-2');
                    echo form_label('DB User', 'db_user', $attributes);
                    ?>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="db_user" name="db_user" required>
                      </div>
                    </div>
                    <div class="form-group col-*-12"">
                    <?php
                    $attributes = array('class' => 'control-label col-sm-2');
                    echo form_label('DB Password', 'db_password', $attributes);
                    ?>
                    <div class="col-sm-6">
                          <input type="text" class="form-control" id="db_password" name="db_password" >
                          </div>
                        </div>
                        <div class="form-group col-*-12"">
                    <?php
                    $attributes = array('class' => 'control-label col-sm-2');
                    echo form_label('DB Name', 'db_name', $attributes);
                    ?>
                      <div class="col-sm-6">          
                      <input type="text" class="form-control" id="db_name" name="db_name" required>
                      </div>
                    </div>
                    <div class="form-group col-*-12"">
                    <?php
                    $attributes = array('class' => 'control-label col-sm-2');
                    echo form_label('Table Name', 'table_name', $attributes);
                    ?>
                      <div class="col-sm-6">          
                      <input type="text" class="form-control" id="table_name" name="table_name" required>
                      </div>
                    </div>
                     <div class="form-group col-*-12"">
                         <div class="col-sm-8">   
                        <button type="submit" name="add_category" class="btn btn-primary pull-right">Submit</button> 
                         </div>
                    </div>
                   
                    
                </form>   
                </div>                        
                </div> 
               
            </div>
       