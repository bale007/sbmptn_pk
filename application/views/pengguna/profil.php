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
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>User Profile</h1>
            </section>
            <?php 
                $info = $this->session->flashdata('sukses_update');
                if(!empty($info)){
                    echo '<div id="validasi" class="out alert alert-warning alert-dismissable">
                            <button type="button" class="close" aria-hidden="true" data-dismiss="alert">&times;</button>
                            '.$this->session->flashdata('sukses_update').'
                        </div>';           
                }
            ?>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav  nav-tabs ">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">
                                   <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                                User Profile</a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">
                             <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                Change Password</a>
                            </li>
                           
                        </ul>
                        
                        <div  class="tab-content mar-top">
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                   
                                                    User Profile
                                                </h3>

                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-4">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-file">
                                                            <?php 
                                                            if(empty($this->session->userdata('foto'))){
                                                               echo '<img src="'.base_url().'assets/img/profil/user.jpeg" alt="foto">';
                                                            }else{
                                                                echo '<img src="'.base_url().'assets/img/profil/'.$this->session->userdata('foto').'" alt="foto">';
                                                            }
                                                            ?>                                                  
                                                        </div> 
                                                        <a class="btn btn-success btn-large" id="ubahprofil" data-toggle="modal" data-href="#responsive" href="#responsive">
                                                            Ubah Profil
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped" id="users">
                                                                <?php
                                                                foreach ($record->result() as $r){
                                                                ?>
                                                                <tr>
                                                                    <td>ID</td>
                                                                    <td>
                                                                        <b><?php echo $r->id_akun;?></b>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Nama</td>
                                                                    <td><?php echo $r->nama;?>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>E-mail</td>
                                                                    <td>
                                                                        <b><?php echo $r->email;?></b>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sekolah</td>
                                                                    <td>
                                                                        <?php echo $r->sekolah;?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat</td>
                                                                    <td>
                                                                       <?php echo $r->alamat;?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status Akun</td>
                                                                    <td>
                                                                        <?php 
                                                                        if($r->status_aktif == '1'){
                                                                            echo '<b style="color: green;">Aktif</b>';
                                                                        }else{
                                                                            echo '<b style="color: red;">Tidak Aktif</b>';
                                                                        }
                                                                        
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status Premium</td>
                                                                    <td>
                                                                        <?php 
                                                                        if($r->status_bayar == '1'){
                                                                            echo '<b style="color: green;">Aktif</b>';
                                                                        }else{
                                                                            echo '<b style="color: red;">Tidak Aktif</b>';
                                                                        }
                                                                        
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bidang</td>
                                                                    <td>
                                                                        <?php  
                                                                        if($r->kode_jurusan == '1'){
                                                                            echo '<b style="color: green;">SAINTEK</b>';
                                                                        }elseif ($r->kode_jurusan == '2') {
                                                                            echo '<b style="color: yellow;">SAINTEK</b>';
                                                                        }else{
                                                                            echo '<b style="color: orange;">IPC</b>';
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                                <?php 
                                                                   }
                                                                ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12 pd-top">
                                        <div id="sukses" class="out alert alert-success alert-dismissable" style="display: none;">
                                            <button type="button" class="close" aria-hidden="true">&times;
                                        </button>
                                            Ubah Password Berhasil !</div>
                                        <form method="post" class="form-horizontal" id="ubahpassoword">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="inputpassword" class="col-md-3 control-label">
                                                        Password Lama
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                            <input type="password"  id="inputpasswordold" placeholder="Password" class="form-control"/>
                                                        </div>
                                                        <small id="warning" style="display: none;"></small>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputpassword" class="col-md-3 control-label">
                                                        Password Baru
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                            <input type="password"  name="password1" id="password1" placeholder="Password" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputnumber" class="col-md-3 control-label">
                                                        Confirm Password
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                            <input type="password"  name="password2" id="password2" placeholder="Password" class="form-control"/>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12 padding">
                                                                <span id="pwmatch" class="glyphicon glyphicon-remove color-pwd"></span> Password Sama
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="button" id="simpan" class="btn btn-primary" disabled="disabled">Submit</button>
                                                    &nbsp;
                                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
    </div>

    <!--- responsive model -->
    <div class="modal fade in" id="responsive" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
        <div class="modal-dialog modal-lg">
            <?php echo form_open_multipart('pengguna/ubahprofil');?>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title">Edit Profil</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                Nama 
                                <input name="nama" type="text" placeholder="Nama" class="form-control" value="<?php echo $r->nama;?>">
                            </p>
                            <p>
                                E-mail
                                <input name="email" id="email" type="text" placeholder="E-mail" class="form-control" value="<?php echo $r->email;?>">
                                <!--<button type="button" id="ubahemail" class="btn btn-default" style="border: none;">Edit</button>
                                <button type="button" id="batalubahemail" class="btn btn-default" style="border: none; display: none;">Batal</button>-->
                                <small style="color:red">Jika merubah email, maka lakukan konfirmasi ulang !</small>
                            </p>
                            <p>
                                Sekolah
                                <input name="sekolah" type="text" placeholder="Sekolah" class="form-control" value="<?php echo $r->sekolah;?>">
                            </p>
                            <p>
                                Alamat
                                <input name="alamat" type="text" placeholder="Alamat" class="form-control" value="<?php echo $r->alamat;?>">
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h4>Foto</h4>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file">
                                        <?php 
                                        if(empty($r->foto)){
                                           echo '<img src="'.base_url().'assets/img/profil/user.jpeg" alt="...">';
                                        }else{
                                            echo '<img src="'.base_url().'assets/img/profil/'.$r->foto.'" alt="...">';
                                        }
                                        ?>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn">CLOSE</button>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- END modal-->


    
    <!-- global js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>assets/vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script  src="<?php echo base_url();?>assets/vendors/jasny-bootstrap/jasny-bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/pages/user_profile.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/jasny-bootstrap/jasny-bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/validation/js/bootstrapValidator.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/intl-tel-input/build/js/intlTelInput.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/pages/validation.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <script src="<?php echo base_url();?>assets/vendors/modal/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/modal/js/modalEffects.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jasny-bootstrap/jasny-bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/pages/user_profile.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#password2').keyup(function(){
                if($('#password1').val()===""){
                    $('#simpan').attr('disabled','');
                }else{
                    if($('#password1').val() !== $('#password2').val() || $('#warning').html() !== 'Password lama sama !'){
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
                    if($('#password1').val() !== $('#password2').val() || $('#warning').html() !== 'Password lama sama !'){
                       $('#simpan').attr('disabled',''); 
                    }else{
                       $('#simpan').removeAttr('disabled'); 
                    }
                }
            });
            
            $('#inputpasswordold').focus(function(){
                $('#warning').fadeOut();
                $('#simpan').attr('disabled','');
            });
            
            
            $('#inputpasswordold').blur(function(){
               var password = $('#inputpasswordold').val(); 
               $.ajax({
                  type : 'POST',
                  url  : '<?php echo base_url().'pengguna/cekpassword'?>',
                  data : {password : password},
                  dataType : 'JSON',
                  success: function(data){
                      if(data.status === false){
                          $('#warning').fadeIn().attr('style','color :red').html('Password lama tidak sama !');
                          $('#simpan').attr('disabled','');
                      }else if(data.status && $('#password1').val() === $('#password2').val()){
                          $('#warning').fadeIn().attr('style','color :green').html('Password lama sama !');
                          $('#simpan').removeAttr('disabled');
                      }    
                       //alert(data);
                  }
               }); 
            });
            
            $('#simpan').click(function(){
                var data = $('#ubahpassoword').serialize();
                $.ajax({
                  type : 'POST',
                  url  : '<?php echo base_url().'pengguna/ubahpassword'?>',
                  data : data,
                  dataType : 'JSON',
                  success: function(data){
                      if(data.status){
                          $('#sukses').fadeIn();
                      }
                  }    
                });
            });
            
            $('.close').click(function(){
                $('#sukses').fadeOut();
            });
            
            $('#ubahprofil').click(function(){
                
            });
            
            $('#ubahemail').click(function(){
                $('#email').removeAttr('disabled');
                $('#ubahemail').fadeOut(function(){
                    $('#batalubahemail').fadeIn();
                });
            });
            
            $('#batalubahemail').click(function(){
                $('#email').attr('disabled','disabled');
                $('#email').val('<?php echo $this->session->userdata('email');?>');
                $('#batalubahemail').fadeOut(function(){
                    $('#ubahemail').fadeIn();
                });
            });
        });
    </script>    

</body>

</html>
