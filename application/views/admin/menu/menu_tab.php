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
                    <li><a data-toggle="tab" href="#User"><i class="notika-icon notika-support"></i> Users</a>
                    </li>
                    <!-- END TAB USER -->

                    <!-- START TAB TASK -->
                    <li><a data-toggle="tab" href="#Task"><i class="notika-icon notika-form"></i> Tasks</a>
                    </li>
                    <!-- END TAB TASK -->

                    <!-- START TAB WORK OVERTIME -->
                    <li><a data-toggle="tab" href="#Work"><i class="notika-icon notika-house"></i> Work Overtimes</a>
                    </li>
                    <!-- END TAB HOME -->
                </ul>
                <!-- END MAIN TAB -->

                <!-- START SUB TAB -->
                <div class="tab-content custom-menu-content">
                    <!-- START TAB MENU HOME -->
                    <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li style="height: 56px;"></li>
                        </ul>
                    </div>
                    <!-- END TAB MENU HOME -->

                    <!-- START TAB MENU USER -->
                    <div id="User" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="<?php echo base_url('Auth/newUser')?>">Add Information User</a></li>
                            <li><a href="">View Information User</a></li>
                        </ul>
                    </div>
                    <!-- END TAB MENU USER -->

                    <!-- START TAB MENU TASK -->
                    <div id="Task" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="">Add Task</a></li>
                            <li><a href="">View Task</a></li>
                        </ul>
                    </div>
                    <!-- END TAB MENU TASK -->

                    <!-- START TAB MENU WORK OVERTIME -->
                    <div id="Work" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li style="height: 56px;"></li>
                        </ul>
                    </div>
                    <!-- END TAB MENU WORK OVERTIME -->
                </div>
            </div>
            <!-- END SUB TAB -->
        </div>
    </div>
</div>