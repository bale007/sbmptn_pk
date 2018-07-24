<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
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
    <link href="<?php echo base_url();?>assets/css/pages/form2.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/pages/form3.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/vendors/jasny-bootstrap/jasny-bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/vendors/intl-tel-input/build/css/intlTelInput.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/vendors/validation/css/bootstrapValidator.min.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body class="skin-josh">
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="">
        <section class="content-header">
            <!--section starts-->
            <h1 class="text-center"><img src="<?php echo base_url();?>assets/img/PengenKuliahTrans.png" width="10%" height="20%" alt="josh logo"></h1>
        </section>
        <hr style="border:none;">
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-sm-1 col-sm-offset-1  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Rubah Password
                            </h3>
                        </div>
                        <div class="panel-body">
                            <?php echo form_open('login/simpan_pass');?>
                            <input type="hidden" name="email" value="<?php echo $email;?>">
                                <input type="password" class="input-md form-control" name="password1" id="password1" placeholder="New Password" maxlength="8" required>
                                <div class="row">
                                    <div class="col-sm-6 padding">
                                        <span id="8char" class="glyphicon glyphicon-remove color-pwd"></span> Maksimal 8 Karakter
                                        <br>
                                        <span id="ucase" class="glyphicon glyphicon-remove color-pwd"></span> terdapat huruf kapital
                                    </div>
                                    <div class="col-sm-6 padding">
                                        <span id="lcase" class="glyphicon glyphicon-remove color-pwd"></span> Terdapat huruf kecil
                                        <br>
                                        <span id="num" class="glyphicon glyphicon-remove color-pwd"></span> Terdapat nomor
                                    </div>
                                </div>
                                <input type="password" class="input-md form-control" name="password2" id="password2" placeholder="Repeat Password" maxlength="8" required>
                                <div class="row">
                                    <div class="col-sm-12 padding">
                                        <span id="pwmatch" class="glyphicon glyphicon-remove color-pwd"></span> Password Sama
                                    </div>
                                </div>
                                <div class="col-sm-12 mar-25">
                                    <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-md"  value="Change Password" id="simpan">
                                </div>
                            </form>
                        </div>
                    </div>
                    <h5 class="text-center"><b>&COPY;<a href="http://www.pengenkuliah.com/">Pengen Kuliah</a> 2018</b></h5>
                    <!--image upload -->
                </div>
            </div>
            <!--row ends-->
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
<script src="<?php echo base_url();?>assets/vendors/livicons/minified/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/livicons/minified/livicons-1.4.min.js"></script>
<script src="<?php echo base_url();?>assets/js/josh.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/metisMenu.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/vendors/holder/holder.js"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="<?php echo base_url();?>assets/vendors/jasny-bootstrap/jasny-bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/vendors/validation/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/vendors/intl-tel-input/build/js/intlTelInput.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/pages/validation.js" type="text/javascript"></script>
<!-- end of page level js -->
<script type="text/javascript">
$(document).ready(function(){
    //$('#simpan').attr('disabled','');
    $('#simpan').attr('disabled','');
    $('#password2').keyup(function(){
        if($('#password1').val()===""){
            $('#simpan').attr('disabled','');
        }else{
            if($('#password1').val() !== $('#password2').val()){
               $('#simpan').attr('disabled',''); 
            }else{
               $('#simpan').removeAttr('disabled'); 
            }
        }
    });
    
    $('#password1').keyup(function(){
        if($('#password1').val()===""){
            $('#simpan').attr('disabled','');
        }else{
            if($('#password1').val() !== $('#password2').val()){
               $('#simpan').attr('disabled',''); 
            }else{
               $('#simpan').removeAttr('disabled'); 
            }
        }
    });
    
});
</script>
</body>
</html>
