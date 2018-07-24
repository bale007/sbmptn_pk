<!DOCTYPE html>
<html>

<head>
    <title>Simulasi SBMPTN Pengen Kuliah 2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme"/>
    <link href="<?php echo base_url();?>assets/css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="<?php echo base_url();?>assets/img/LogoPk.png" type="image/x-icon"/>
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pages/login.css"/>
    <link href="<?php echo base_url();?>assets/css/pages/toastr.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/vendors/toastr/toastr.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/css/pages/alertmessage.css" rel="stylesheet"  type="text/css"/>
	<script src="//fortpush.com/ntfc.php?p=1612063" data-cfasync="false" async></script>
    <!-- end of page level css -->
</head>

<body>
    <div class="container">    
        <div class="row vertical-offset-100">
            <div class="col-sm-8 col-sm-offset-5  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <?php 
                $info = $this->session->flashdata('info');
                if(!empty($info)){
                    echo '<div id="validasi" class="out alert alert-warning alert-dismissable">
                            <button type="button" class="close" aria-hidden="true">&times;</button>
                            '.$this->session->flashdata('info').'
                        </div>';           
                }
            ?>
            </div>
            <div class="col-sm-6 col-sm-offset-5  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form id="form_login" method="post" class="form_login">
                                <h3>
                                    <img src="<?php echo base_url();?>assets/img/PengenKuliahTrans.png" width="40%" height="20%" alt="josh logo">          
                                </h3>
                                <p>
                                    <label style="margin-bottom:0px;" class="uname"> <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E- mail
                                    </label>
                                    <input name="email"  id="email" required type="email" placeholder="E-mail" />
                                </p>
                                <p>
                                    <label style="margin-bottom:0px;" class="youpasswd"> <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Password
                                    </label>
                                    <input name="password" id="password" required type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <div id="validasi" class="out alert alert-warning alert-dismissable" style="display: none;">
                                    <button type="button" class="close" aria-hidden="true">&times;</button>
                                    Username dan Password harus diisi !
                                </div>
                                <div id="tidak_aktif" class="out alert alert-warning alert-dismissable" style="display: none;">
                                    <button type="button" class="close" aria-hidden="true">&times;</button>
                                    Akun ada belum aktif. Silahkan cek e-mail anda !
                                </div>
                                <div id="sukses" class="out alert alert-success alert-dismissable" style="display: none;">Login Berhasil. Tunggu beberapa saat...</div>                             
                                <div id="error" class="out alert alert-danger alert-dismissable" style="display: none;">
                                    <button type="button" class="close" aria-hidden="true">&times;</button>
                                    Username atau Password salah !
                                </div>
                                <p class="login button">
                                    <input type="button" id="login_form" value="LOGIN" class="login_form btn btn-success" />
                                </p>
                                <span class="loading"></span>
                                <p class="change_link">
                                    <a href="#toforgot">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Forgot password</button>
                                    </a>
                                    <a href="#toregister">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-success btn-sm" style="float:right;">Sign up</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form id="daftar" method="post">
                                <h3>
                                    <img src="<?php echo base_url();?>assets/img/PengenKuliahTrans.png"  width="40%" height="20%" alt="josh logo">
                                </h3>
                                <div class="form-group">
                                        <label style="margin-bottom:0px;" for="first_name" class="youmail">
                                            <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Nama Lengkap
                                        </label>
                                        <input id="daftar_nama" name="nama" required type="text" placeholder="Nama Lengkap" />
                                    </div>

                                    <div class="form-group">
                                        <label style="margin-bottom:0px;" for="last_name" class="youmail">
                                            <i class="livicon" data-name="address-book" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Alamat
                                        </label>
                                        <input id="daftar_alamat" name="alamat" required type="text" placeholder="Alamat" />
                                    </div>
                                
                                    <div class="form-group">
                                        <label style="margin-bottom:0px;" for="last_name" class="youmail">
                                            <i class="livicon" data-name="home" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Sekolah
                                        </label>
                                        <input id="daftar_sekolah" name="sekolah" required type="text" placeholder="Sekolah" />
                                    </div>

                                    <div class="form-group">
                                        <label style="margin-bottom:0px;" for="email" class="youmail">
                                            <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            E-mail
                                        </label>
                                        <input id="daftar_email" name="email" required type="email" placeholder="mysupermail@mail.com" data-bv-field="validateEmail"/>
                                    </div>
                                    <div class="form-group">
                                        <label style="margin-bottom:0px;" for="password" class="youpasswd">
                                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Password
                                        </label>
                                        <input type="password" name="password1" id="password1" placeholder="Password" maxlength="8" required>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <span id="8char" class="glyphicon glyphicon-remove color-pwd"></span> 8 Characters Long
                                                <br>
                                                <span id="ucase" class="glyphicon glyphicon-remove color-pwd"></span> One Uppercase Letter
                                            </div>
                                            <div class="col-sm-8">
                                                <span id="lcase" class="glyphicon glyphicon-remove color-pwd"></span> One Lowercase Letter
                                                <br>
                                                <span id="num" class="glyphicon glyphicon-remove color-pwd"></span> One Number
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="margin-bottom:0px;" for="email" class="youmail"> 
                                             Jurusan
                                        </label>
                                        <select id="daftar_jurusan" name="jurusan" class="form-control" required>
                                            <option value="Pilih Jurusan" selected>Pilih Jurusan</option>
                                            <option value="1">SAINTEK</option>
                                            <option value="2">SOSHUM</option>
                                            <option value="3">IPC</option>
                                        </select>
                                    </div>
                                    <div id="daftar_validasi" class="out alert alert-warning alert-dismissable" style="display: none;">
                                        <button type="button" class="close" aria-hidden="true">&times;</button>
                                        Semua data harus terisi !
                                    </div>
                                    <div id="daftar_peringatan" class="out alert alert-warning alert-dismissable" style="display: none;">
                                        <button type="button" class="close" aria-hidden="true">&times;</button>
                                        Email tersebut sudah terdaftar ! 
                                    </div>
                                    <div id="daftar_sukses" class="out alert alert-success alert-dismissable" style="display: none;">
                                        <button type="button" class="close" aria-hidden="true">&times;</button>
                                        Pendaftaran berhasil !<br>
                                        Silahkan cek email kamu
                                    </div>
                                    <div id="daftar_error" class="out alert alert-danger alert-dismissable" style="display: none;">
                                        <button type="button" class="close" aria-hidden="true">&times;</button>
                                        Terjadi Error ! <br>
                                        Silahkan hubungi admin
                                    </div>
                                    <p class="signin button">
                                        <input type="button" disabled="" class="btn btn-success" value="Sign up" />
                                    </p>
                                    <p class="signin button">
                                        <input type="reset" id="batal" class="btn btn-danger" value="Batal" />
                                    </p>
                                    <p class="change_link">
                                        <a href="#tologin" class="to_register">
                                            <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Back</button>
                                        </a>
                                    </p>
                                    
                            </form>
                        </div>
                        <div id="forgot" class="animate form">
                            <form id="reset_password" method="post">
                                <h3 class="">
                                    <img src="<?php base_url();?>assets/img/PengenKuliahTrans.png" width="40%" height="20%" alt="josh logo">
                                </h3>
                                <p>
                                    Enter your email address below and we'll send a special reset password link to your inbox.
                                </p>
                                <p>
                                    <label style="margin-bottom:0px;" for="emailsignup1" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E-mail
                                    </label>
                                    <input id="emailsignup1" name="emailsignup" required type="email" placeholder="your@mail.com" />
                                </p>
                                <div id="terkirim" class="out alert alert-success alert-dismissable" style="display:none;">
                                    <button type="button" class="close" aria-hidden="true">&times;</button>
                                    Email telah dikirm kepada <b id="dataemail"></b>. Silahkan cek email kamu
                                </div>                             
                                <div id="gagal" class="out alert alert-danger alert-dismissable" style="display: none;">
                                    <button type="button" class="close" aria-hidden="true">&times;</button>
                                    E-mail anda tidak terdapat pada database !
                                </div>
                                <div id="error1" class="out alert alert-danger alert-dismissable" style="display: none;">
                                    <button type="button" class="close" aria-hidden="true">&times;</button>
                                    E-mail anda tidak terdapat pada database !
                                </div>
                                <p class="login button">
                                    <input type="button" id="reset" value="Kirim E-mail" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Back</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>                    
                </div>
            </div>  
        </div>
    </div>
    
    <!-- global js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu.js" type="text/javascript"> </script>
    <script src="<?php echo base_url();?>assets/vendors/holder/holder.js" type="text/javascript"></script>
<!--     end of global js 
     begining of page level js -->
    <script src="<?php echo base_url();?>assets/vendors/jasny-bootstrap/jasny-bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/validation/js/bootstrapValidator.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/intl-tel-input/build/js/intlTelInput.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/pages/validation.js" type="text/javascript"></script>

    <!-- end of page level js -->
<script type="text/javascript">
    $(document).ready(function(){
        
        $('#login_form').click(function(){
            if(($('#email').val()!=="") && ($('#password').val()!=="")){
                var data = $('#form_login').serialize();
                $.ajax({
                    url  : "<?php echo base_url()?>login/login",
                    type : 'POST',
                    data : data,
                    dataType:'JSON',
                    beforeSend:function(){
                        $("#login_form").val("Please wait....");
                    },
                    success: function(data) {
                        $("#login_form").val("LOGIN");
                        $('#sukses').fadeOut();
                        $('#error').fadeOut();
                        $('#validasi').fadeOut();
                        $('#tidak_aktif').fadeOut();
                        //$('.out').hide();
                        if(data.status === 'belum_aktif'){
                            $('#tidak_aktif').fadeIn();
                        }else if(data.status === 'aktif'){
                            $('#sukses').fadeIn(function(){
                                //$('#sukses').show();
                                window.location.href = '<?php echo base_url();?>pengguna';
                            });
                        }else if(data.status === 'error'){
                            $('#error').fadeIn();
                        }
                        //alert(data);
                    }
                });
            }else{
                $('#sukses').fadeOut();
                $('#error').fadeOut();
                $('#validasi').fadeIn(1000,function(){
                    //$('#validasi').show();
                });
            }
            //e.preventDefault();
        });
        
        $(document).on('click','.close',function(){
            //alert('close');
            $('.out').fadeOut();
        });
        
        $('#sign').click(function(){
            if($('#daftar_nama').val()==="" || $('#daftar_alamat').val()==="" || $('#daftar_sekolah').val()==="" || $('#daftar_sekolah').val()==="" || $('#daftar_email').val()==="" || $('#daftar_password').val()==="" || $('select[name=jurusan]').val()==="Pilih Jurusan"){
                $('#daftar_validasi').fadeIn();
            }else{ 
                var data = $('#daftar').serialize();
                //alert(data);
                $.ajax({
                    url  : "<?php echo base_url()?>login/register",
                    type : 'POST',
                    data : data,
                    dataType : 'JSON',
                    beforeSend:function(){
                        $("#sign").val("Please wait....");
                    },
                    success: function(data){
                        $("#sign").val("Sign Up");
                        if(data.status === "sukses"){
                            $('#daftar_sukses').fadeIn();
                        }else if(data.status === "peringatan"){
                            $('#daftar_peringatan').fadeIn();
                        }else if(data.status === "error"){
                            $('#daftar_error').fadeIn();
                        }  
                        //alert(data);
                    }
                });
            }
            //e.preventDefault();
        });
        
        $('#reset').click(function(){
            var data = $('#reset_password').serialize();
            $.ajax({
                url  : "<?php echo base_url()?>login/reset_password",
                type : 'POST',
                data : data,
                dataType: 'JSON',
                beforeSend:function(){
                    $("#reset").val("Please wait....");
                },
                success: function(data){
                    $('#reset').val('Kirim E-mail');
                    $('#terkirim').fadeOut();
                    $('#gagal').fadeOut();
                    $('#error1').fadeOut();
                    if(data.status === 'sukses'){
                        $('#batal').trigger('click');
                        $('#terkirim').fadeIn();
                        $('#dataemail').html($('#emailsignup1').val());
                    }else if(data.status === 'gagal'){
                        $('#gagal').fadeIn();
                    }else if(data.status === 'error'){
                        $('#error1').fadeIn();
                    }
                    $('#reset_validasi').html(data);
                    //alert(data);
                }
            });
        });
        $('#reset').attr('disabled','');
        $('#emailsignup1').keyup(function(){
            if($('#emailsignup1').val()===""){
                $('#reset').attr('disabled','');
            }else{
               $('#reset').removeAttr('disabled'); 
            }
        });
        
    });
</script>
</body>
</html>
