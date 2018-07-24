
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
    <link href="<?php echo base_url();?>assets/vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="<?php echo base_url();?>assets/vendors/jvectormap/jquery-jvectormap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/only_dashboard.css" />
    <link href="<?php echo base_url();?>assets/vendors/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/vendors/datatables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/pages/tables.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/pages/user_profile.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/vendors/modal/css/component.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/vendors/jasny-bootstrap/jasny-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/vendors/x-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
<!--    <script src="//cdn.ckeditor.com/4.9.1/basic/ckeditor.js"></script>-->
<!--    <script src="//cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>-->
    

    
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
                                <a href="<?php echo base_url().'login/logout'?>">
                                    <i class="livicon" data-name="sign-out" data-s="18"></i> Logout
                                </a>
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
                            <a href="#">
                                <i class="livicon" data-name="folder-open" data-size="18" data-c="#418BCA" data-hc="#fff" data-loop="true"></i>
                                <span class="title">Data</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url().'soal/saintek';?>">
                                        <i class="livicon" data-name="inbox" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                        <i class="fa fa-angle-double-right"></i>
                                        Saintek
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'soal/soshum';?>">
                                        <i class="livicon" data-name="inbox" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                        <i class="fa fa-angle-double-right"></i>
                                        Soshum
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'soal/tkpa';?>">
                                        <i class="livicon" data-name="inbox" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                        <i class="fa fa-angle-double-right"></i>
                                        TKPA
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