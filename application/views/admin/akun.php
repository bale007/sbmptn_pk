        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Akun</h1>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box info">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Data Akun
                                </div>
                            </div>
                            <div class="portlet-body">
                                <a class="btn btn-success btn-large" data-toggle="modal" data-href="#TambahAkun" href="#TambahAkun">
                                    <i class="livicon" data-name="user-add" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </a>
                                <hr style="border: none;">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Sekolah</th>
                                                <th>Email</th>
                                                <th>Foto</th>
                                                <th>Jurusan</th>
                                                <th>Status Aktif</th>
                                                <th>Status Bayar</th>
                                                <th>Ubah</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody id="TampilData">
                                        <?php
                                        foreach ($record->result() as $r){
                                        ?>
                                            <tr>
                                                <td><?php echo $r->id_akun;?></td>
                                                <td><?php echo $r->nama;?></td>
                                                <td><?php echo $r->alamat;?></td>
                                                <td><?php echo $r->sekolah;?></td>
                                                <td><?php echo $r->email;?></td>
                                                <td><?php if(empty($r->foto)){
                                                        echo '<img src="'.base_url().'assets/img/profil/user.jpeg" class="img-responsive" alt="...">';
                                                    }else{
                                                        echo '<img src="'.base_url().'assets/img/profil/'.$r->foto.'" class="img-responsive" alt="Soal">';
                                                    }
                                                    ?></td>
                                                <td><?php if($r->kode_jurusan == '1'){
                                                             echo '<b style="color:green;">SAINTEK</b>';
                                                          }else if($r->kode_jurusan == '2'){
                                                             echo '<b style="color:yellow;">SOSHUM</b>'; 
                                                          }else{
                                                             echo '<b style="color:orange;">IPC</b>'; 
                                                          }
                                                    ?>
                                                </td>
                                                <td><?php if($r->status_aktif == '1'){
                                                                echo '<b style="color:green;">Aktif</b>';
                                                           }else{
                                                                echo '<b style="color:red;">Tidak Aktif</b>';
                                                           }
                                                    ?>
                                                </td>
                                                <td><?php if($r->status_bayar == '1'){
                                                                echo '<b style="color:green;">Aktif</b>';
                                                           }else{
                                                                echo '<b style="color:red;">Tidak Aktif</b>';
                                                           }
                                                    ?></td>
                                                <td><button type="button" class="btn btn-default todoedit ubah" data-toggle="modal" data-target="#UbahAkun" data-id="<?php echo $r->id_akun;?>" data-nama="<?php echo $r->nama;?>" data-alamat="<?php echo $r->alamat;?>" data-sekolah="<?php echo $r->sekolah;?>" data-jurusan="<?php echo $r->kode_jurusan;?>" data-aktif="<?php echo $r->status_aktif;?>" data-bayar="<?php echo $r->status_bayar;?>"><span class="glyphicon glyphicon-pencil"></span></button></td>
                                                <td><button type="button" class="btn btn-default tododelete redcolor hapus" data-toggle="modal" data-target="#HapusAkun" data-id="<?php echo $r->id_akun;?>"><span class="glyphicon glyphicon-trash"></span></button></td>
                                            </tr>
                                        <?php
                                        }
                                        
                                        ?>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
    </div>
    
    <div class="modal fade in" id="TambahAkun" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Responsive</h4>
                </div>
                <div class="modal-body">
                    <form id="FormTambahAkun" method="POST">
                        <h4>Some More data</h4>
                        <p>
                            <input name="nama" type="text" placeholder="Nama Lengkap" class="form-control">
                        </p>
                        <p>
                            <input name="alamat" type="text" placeholder="Alamat" class="form-control">
                        </p>
                        <p>
                            <input name="sekolah" type="text" placeholder="Sekolah" class="form-control">
                        </p>
                        <p>
                            <input name="email" type="text" placeholder="E-mail" class="form-control">
                        </p>
                        <p>
                            <input name="password" type="password" placeholder="Password" class="form-control">
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn">Close</button>
                    <button type="button" id="simpan" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade in" id="UbahAkun" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
              <?php echo form_open('admin/ubah_akun');?>  
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Ubah Akun</h4>
                </div>
                <div class="modal-body">
                    
                    <input type="hidden" name="id" id="ubah_id">
                        <h5>Nama</h5>
                        <p>          
                            <input name="nama" type="text" id="ubah_nama" placeholder="Nama Lengkap" class="form-control">
                        </p>
                        <h5>Alamat</h5>
                        <p>
                            
                            <input name="alamat" type="text" id="ubah_alamat" placeholder="Alamat" class="form-control">
                        </p>
                        <h5>Sekolah</h5>
                        <p>
                            <input name="sekolah" type="text" id="ubah_sekolah" placeholder="Sekolah" class="form-control">
                        </p>
                        <h5>Jurusan</h5>
                        <p>
                            <select name="jurusan" class="form-control" id="ubah_jurusan">
                                <option value="1">SAINTEK</option>
                                <option value="2">SOSHUM</option>
                                <option value="3">IPC</option>
                            </select>
                        </p>
                        <h5>Status Aktif</h5>
                        <p>
                            <select name="status_aktif" class="form-control" id="aktif">
                                <option value="0">Tidak Aktif</option>
                                <option value="1">Aktif</option>
                            </select>
                        </p>
                        <h5>Status Bayar</h5>
                        <p>
                            <select name="status_bayar" name="bayar" class="form-control" id="bayar">
                                <option value="0">Tidak Aktif</option>
                                <option value="1" style="color:green;">Aktif</option>
                            </select>
                        </p>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn">Batal</button>
                    <button type="submit" id="simpan" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
        </div>
    </div>
    
    <div class="modal fade in" id="HapusAkun" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
              <?php echo form_open('admin/hapus_akun');?>  
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Hapus Akun</h4>
                </div>
                <div class="modal-body">
                    <h2 class="text-center"><b>Akan Menghapus Akun Ini ?</b></h2>
                    <input type="hidden" name="id" id="hapus_id">
                </div>
                <div class="modal-footer">
                    <button type="reset" data-dismiss="modal" class="btn">Batal</button>
                    <button type="submit" id="simpan" class="btn btn-danger">Hapus</button>
                </div>
              </form>
            </div>
        </div>
    </div>
    
    <!-- ./wrapper -->
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
    <script src="<?php echo base_url();?>assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/table-responsive.js"></script>
    
    <script src="<?php echo base_url();?>assets/vendors/modal/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/modal/js/modalEffects.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#simpan').click(function(){
               var data = $('#FormTambahAkun').serialize();
               $.ajax({
                    url  : "<?php echo base_url()?>admin/simpan",
                    type : 'POST',
                    data : data,
                    //dataType:'JSON',
                    success: function(data){
                        //$('#TampilData').html(data);
                        window.location.href = "<?php echo base_url();?>admin";
                        //alert(data);
                    }
               });
               //alert("Ok");
               //$('#TambahAkun').modal('hide');
            });
            
            $(document).on('click','.ubah',function(){
                $('#ubah_id').val($(this).data("id"));
                $('#ubah_nama').val($(this).data("nama"));
                $('#ubah_alamat').val($(this).data("alamat"));
                $('#ubah_sekolah').val($(this).data("sekolah"));
                $('#ubah_jurusan option[value='+$(this).data("jurusan")+']').attr("selected", "selected");
                $('#aktif option[value='+$(this).data("aktif")+']').attr("selected", "selected");
                $('#bayar option[value='+$(this).data("bayar")+']').attr("selected", "selected");
            });
            
            $(document).on('click','.hapus',function(){
                $('#hapus_id').val($(this).data("id"));
            });
            
        });
    </script>    
</body>
</html>