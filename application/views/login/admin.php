<!DOCTYPE html>
<html>

<head>
    <title>Admin Pengen Kuliah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" href="<?php echo base_url();?>assets/img/LogoPk.png" type="image/x-icon"/>
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="<?php echo base_url();?>assets/css/pages/lockscreen.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/formcolorloader/gradient/fort.css" />
    <!-- end of page level css -->
</head>

<body>
    <div class="top">
        <div class="colors"></div>
    </div>
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <img src="<?php echo base_url();?>assets/img/LogoPk.png" height="60%" width="60%">
            <div class="form-box">
                <?php echo form_open('login/admin');?>
                <p class="form-control-static"><b>ADMIN</b></p>
                        <input type="password" name="password" required class="form-control" placeholder="Password">
                        <button class="btn btn-info btn-block login" name="submit" type="submit">GO</button>
                </form>
                </br>
            <?php if($this->session->flashdata('info')==TRUE){?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info');?>
                </div>
            <?php
            }
            ?>

            </div>
        </div>
        
    </div>
    <!-- global js -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/holder/holder.js"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <!--<script src="<?php echo base_url();?>assets/js/lockscreen.js"></script>-->
    <script src="<?php echo base_url();?>assets/vendors/formcolorloader/gradient/fort.js"></script>
    <script>
       gradient();
    </script>
    <!-- end of page level js-->
</body>
</html>
