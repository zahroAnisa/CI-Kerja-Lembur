<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Task | KLTime - Admin KLTime Jayapura</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
                                            <!-- START STYLESHEET -->
                                    <?php include 'stylesheet/stylesheet.php'; ?>
                                            <!-- END STYLESHEET -->

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- START HEADER -->
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <!-- START LOGO WEB -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
            <!-- END lOGO WEB -->
            <!-- START NAVIGASI TOP -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <!-- START NOTIFICATION -->
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span></a>
                            <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Notification</h2>
                                </div>
                                <div class="hd-message-info">
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/1.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="hd-mg-va">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </li>
                        <!-- END NOTIFICATION -->

                        <!-- START SETTING -->
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menu"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>2</span></div></a>
                            <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                
                                <div align="center">
                                        <img src="img/post/2.jpg" alt="" />
                                </div>
                                    <hr>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div style="padding-right: 20px;">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Edit Account</h3>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div style="padding-right: 20px;">
                                                <i class="notika-icon notika-alarm"></i>
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Logout</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
                                                <!-- END HEADER-->
                                                <!-- START MENU MOBILE -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <!-- START MENU HOME-->
                            <li><a data-toggle="collapse" data-target="#Charts" href="index.html">Home</a>
                            </li>
                            <!-- END MENU HOME -->
                            <!-- START MENU USER -->
                            <li><a data-toggle="collapse" data-target="#demo" href="#">User</a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="">Add Information User</a></li>
                                    <li><a href="">View Information User</a></li>
                                </ul>
                            </li>
                            <!-- END MENU USER -->
                            <!-- START MENU ASK -->
                            <li><a data-toggle="collapse" data-target="#demodepart" href="#">Task</a>
                                <ul id="demodepart" class="collapse dropdown-header-top">
                                    <li><a href="">Add Task</a></li>
                                    <li><a href="">View Task</a></li>
                                </ul>
                            </li>
                            <!-- END MENU TASK -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
                                                <!-- END MENU MOBILE -->
                                                <!-- START MENU WEB-->
                                                <!-- TAB MENU START-->
                                    <?php include 'menu/menu_tab.php'; ?>                                           
                                                <!-- END MENU WEB-->
                                                <!-- TAB MENU END-->

                                                <!-- START INDEX HOME -->
    <div class="dropzone-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="dropdone-nk mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Drag and Drop File Uploader</h2>
                            <p>DropzoneJS is an open source library that provides Drag and Drop file uploads with image previews. It’s lightweight, doesn't depend on any other library (like jQuery) and is highly customizable.</p>
                        </div>
                        <div id="dropzone1" class="multi-uploader-cs">
                            <form action="/upload" class="dropzone dropzone-nk needsclick" id="demo1-upload">
                                <div class="dz-message needsclick download-custom">
                                    <i class="notika-icon notika-cloud"></i>
                                    <h2>Drop files here or click to upload.</h2>
                                    <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <!--START BUTTON -->
                        <div align="right" class="form-example-int mg-t-15">
                            <!-- START BUTTON SAVE -->
                            <button class="btn btn-primary notika-btn-success">
                                <i class="notika-icon notika-success"></i> Save</button>
                            <!-- END BUTTON SAVE -->
                            <!-- START BUTTON SEND -->
                            <button class="btn btn-success notika-btn-success">
                                <i class="notika-icon notika-sent"></i> Send</button>
                            <!-- END BUTTON SEND -->
                        </div>
                        <!--END BUTTON -->
                    </div>
                </div>
            </div>
        </div>
    </div>
                                                <!-- START INDEX HOME -->                                                
                                                <!-- START FOOTER -->
                                    <?php include 'menu/footer.php'; ?>
                                                <!-- END FOOTER-->

                                                <!-- START JQUERY -->
                                    <?php include 'javascript/javascript.php'; ?>
                                                <!-- END JQUERY -->
</body>

</html>