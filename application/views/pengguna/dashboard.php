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
    <!-- global css -->
    <link rel="icon" href="<?php echo base_url();?>assets/img/LogoPk.png" type="image/x-icon"/>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="<?php echo base_url();?>assets/css/panel.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/metisMenu.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="<?php echo base_url();?>assets/vendors/owlcarousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/vendors/owlcarousel/css/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/vendors/owlcarousel/css/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/pages/carousel.css" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="<?php echo base_url().'pengguna/dashboard';?>" class="logo" style="padding-top: 5px;">
            <img src="<?php echo base_url();?>assets/img//logo/PKDashboard.png" alt="Logo PK" width="100px" height="50px">
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
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">                       
                            <?php 
                            if(empty($this->session->userdata('foto'))){
                                echo '<img width="35" class="img-circle img-responsive pull-left" height="35" alt="Foto" src="'.base_url().'assets/img/profil/user.jpeg" data-holder-rendered="true" style="width: 35px; height: 35px;">';
                            } else {
                                echo '<img width="35" class="img-circle img-responsive pull-left" height="35" alt="Foto" src="'.base_url().'assets/img/profil/'.$this->session->userdata('foto').'" data-holder-rendered="true" style="width: 35px; height: 35px;">';
                            }
                            ?>
                            
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
                            <?php 
                                    if(empty($this->session->userdata('foto'))){
                                            echo '<img src="'.base_url().'assets/img/profil/user.jpeg" class="img-circle img-responsive" alt="Foto" data-holder-rendered="true" style="width: 90px; height: 90px;">';
                                    } else {
                                            echo '<img src="'.base_url().'assets/img/profil/'.$this->session->userdata('foto').'" class="img-circle img-responsive data-holder-rendered="true" alt="Foto style="width: 90px; height: 90px;">';
                                    }
                            ?>
                                <p class="topprofiletext">
                                    <?php echo $this->session->userdata("nama");?>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="<?php echo base_url().'pengguna/profil';?>">
                                    <i class="livicon" data-name="user" data-s="18"></i> My Profile
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'login/logout';?>">
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
                <hr style="border : none;">
                <div class="page-sidebar  sidebar-nav">
                    <ul class="page-sidebar-menu" id="menu">
                        <li>
                            <a href="<?php echo base_url().'pengguna';?>">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#00FFFF" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>

                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="folder-open" data-size="18" data-c="#418BCA" data-hc="#fff" data-loop="true"></i>
                                <span class="title">Ujian</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url().'pengguna/ikut_ujian';?>">
                                        <i class="livicon" data-name="pencil" data-size="18" data-c="#00bc8c" data-hc="#FF8C00" data-loop="true"></i>
                                        <i class="fa fa-angle-double-right"></i>
                                        Ikut Ujian
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'pengguna/hasil_ujian';?>">
                                        <i class="livicon" data-name="checked-on" data-size="18" data-c="#00bc8c" data-hc="#9932CC" data-loop="true"></i>
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
            <!-- Main content -->
            <section class="content-header">
                <h1>Selamat Datang <b><?php echo $this->session->userdata('nama');?></b></h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Dashboard
                        </a>
                    </li>
                </ol>
            </section>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <center>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url();?>assets/img/dashboard/welcome.jpg" class="img-responsive" alt="image1" style="width: 800px;">
                                </div>
                                <!-- End Item -->
                                <div class="item">
                                    <img src="<?php echo base_url();?>assets/img/dashboard/pikopiku.jpg" class="img-responsive" alt="image1" style="width: 800px;">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                
                                <!-- End Item -->
                                <div class="item">
                                    <img src="<?php echo base_url();?>assets/img/dashboard/poster3.jpg" class="img-responsive" alt="image1" style="width: 500px;">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                <!-- End Item -->
                                
                                <!-- End Item -->
                            </div>
                        <!-- End Carousel Inner -->
                        </center>
                    </div>
                    <!-- End Carousel -->
                </div>
            </div> 
            <div class="row" style="padding-top: 15px;">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">Info</h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <p>
                                Selamat datang di website TOL SBMPTN 2018!! Jalan mulus, jalan lurus, 100% lulus!!</br>
                                Program ini diadakan oleh tim Pengen Kuliah. Pengen kuliah sendiri adalah organisasi non profit yang hadi untuk membantu kamu yg kepengen kuliah</br></br>
                                Jangan lupa, update terus info-info program lainnya di :</br>
                                <img src="<?php echo base_url();?>assets/img/LogoPk.png" alt="web" style="width: 17px;"> <a href="http://www.pengenkuliah.com">www.pengenkuliah.com</a></br>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/2000px-LINE_logo.svg.png" alt="line" style="width: 17px;"> @kjv9581u</br>
                                <img src="https://instagram-brand.com/wp-content/themes/ig-branding/assets/images/ig-logo-email.png" alt="instagram" style="width: 17px;"> @pengenkuliah</br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    
    <!-- global js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="<?php echo base_url();?>assets/vendors/owlcarousel/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/carousel.js"></script>
    <!-- end of page level js -->
</body>

</html>
