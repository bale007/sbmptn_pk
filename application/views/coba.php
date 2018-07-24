
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $judul;?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="<?php echo base_url();?>assets/img/LogoPk.png" type="image/x-icon"/>
    <!-- global css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="<?php echo base_url();?>assets/css/panel.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/metisMenu.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <!--page level css -->
    <link href="<?php echo base_url();?>assets/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/vendors/summernote/dist/summernote-bs3.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/blog.css" />
    <!--end of page level css-->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="<?php echo base_url().'admin';?>" class="logo">
            <img src="<?php echo base_url();?>assets/img/logo/PKDashboard.png" height="50px" width="100px" alt="Logo" style="height: 50px;">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                            <span class="label label-warning">7</span>
                        </a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url();?>assets/img/LogoPk.png" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="<?php echo base_url();?>assets/img/LogoPk.png" class="img-responsive img-circle" alt="User Image">
                                <p class="topprofiletext">Admin</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="user" data-s="18"></i> My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="gears" data-s="18"></i> Account Settings
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="lockscreen.html">
                                        <i class="livicon" data-name="lock" data-s="18"></i> Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url().'login/logout'?>">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <ul class="page-sidebar-menu" id="menu">
                        <li>
                            <a href="<?php echo base_url().'admin';?>">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="folder-open" data-size="18" data-c="#418BCA" data-hc="#fff" data-loop="true"></i>
                                <span class="title">Data</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url().'admin/akun';?>">
                                        <i class="livicon" data-name="inbox" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                        <i class="fa fa-angle-double-right"></i>
                                        Data Akun
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="livicon" data-name="folder-open" data-size="18" data-c="#418BCA" data-hc="#fff" data-loop="true"></i>
                                        <span class="title">Soal</span>
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="<?php echo base_url().'admin/saintek';?>">
                                                <i class="livicon" data-name="inbox" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                                <i class="fa fa-angle-double-right"></i>
                                                Saintek
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url().'admin/soshum';?>">
                                                <i class="livicon" data-name="inbox" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                                <i class="fa fa-angle-double-right"></i>
                                                Soshum
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url().'admin/tkpa';?>">
                                                <i class="livicon" data-name="checked-on" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                                <i class="fa fa-angle-double-right"></i>
                                                TKPA
                                            </a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'admin/hasilu_jian';?>">
                                        <i class="livicon" data-name="checked-on" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                        <i class="fa fa-angle-double-right"></i>
                                        Hasil Ujian
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Add new blog</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li class="active">Add new blog</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content paddingleft_right15">
                <!--main content-->
                <div class="row">
                    <div class="the-box no-border">
                        <form role="form">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" placeholder="Post title here...">
                                    </div>
                                    <div class='box-body pad'>
                                        <div id="summernote"></div>
                                    </div>
                                </div>
                                <!-- /.col-sm-8 -->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Post category</label>
                                        <input type="text" class="form-control" placeholder="Post category">
                                    </div>
                                    <div class="form-group">
                                        <label>Post date</label>
                                        <input type="text" class="form-control datepicker" data-date-format="mm-dd-yy" placeholder="mm-dd-yy">
                                    </div>
                                    <div class="form-group">
                                        <label>Post author</label>
                                        <input type="text" class="form-control" placeholder="Post author">
                                    </div>
                                    <div class="form-group">
                                        <label>Featured image</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileupload-new">Select file</span>
                                                <span class="fileupload-exists">Change</span>
                                                <input type="file" />
                                            </span>
                                            <span class="fileupload-preview"></span>
                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success">Save and post</button>
                                        <button class="btn btn-danger">Discard</button>
                                    </div>
                                </div>
                                <!-- /.col-sm-4 -->
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                </div>
                <!--main content ends-->
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url();?>assets/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu.js" type="text/javascript"> </script>
    <script src="<?php echo base_url();?>assets/vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!-- begining of page level js -->
    <!--new blog-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.1/summernote.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/add_newblog.js"></script>
    <!-- end of page level js -->

</body>
</html>
