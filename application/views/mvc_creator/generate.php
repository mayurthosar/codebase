
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
                    echo form_open('/Mvc/generate_crud', $attributes);
                    echo $mainContent;
                    ?>
                    <button type="submit">Submit</button>
                    </form>
                </div>
                </div>

            </div>
