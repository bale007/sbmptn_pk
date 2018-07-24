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
    <link href="<?php echo base_url();?>assets/vendors/jasny-bootstrap/jasny-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/vendors/x-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/pages/user_profile.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/vendors/validation/css/bootstrapValidator.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/vendors/modal/css/component.css" rel="stylesheet" />
    


    <!--end of page level css-->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="<?php echo base_url().'pengguna';?>" class="logo" style="padding-top: 5px;">
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