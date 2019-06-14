<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- START MAIN TAB -->
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <!-- START TAB HOME -->
                    <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    <!-- END TAB HOME -->
                    <!-- START TAB USER -->
                    <li><a data-toggle="tab" href="#User"><i class="notika-icon notika-support"></i> User</a>
                    </li>
                    <!-- END TAB USER -->
                    <!-- START TAB TASK -->
                    <li><a data-toggle="tab" href="#Task"><i class="notika-icon notika-form"></i> Task</a>
                    </li>
                    <!-- END TAB TASK -->
                </ul>
                <!-- END MAIN TAB -->
                <!-- START SUB TAB -->
                <div class="tab-content custom-menu-content">
                    <!-- START TAB MENU HOME -->
                    <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                    </div>
                    <!-- END TAB MENU HOME -->
                    <div id="User" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="<?php echo base_url('Auth/newUser')?>">Add Information User</a></li>
                            <li><a href="">View Information User</a></li>
                        </ul>
                    </div>
                    
                    <div id="Task" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="">Add Task</a></li>
                            <li><a href="">View Task</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END SUB TAB -->
        </div>
    </div>
</div>