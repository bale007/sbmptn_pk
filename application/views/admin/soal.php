        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box info">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Data Soal
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
                                                <th>E-mail</th>
                                                <th>Status Bayar</th>
                                                <th>Status Aktif</th>
                                                <th>Ubah</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody id="TampilData">
                                        <?php 
                                        $no=1;
                                        foreach ($record->result() as $r):
                                        ?>
                                            <tr>
                                                <td><?php echo $r->id_akun;?></td>
                                                <td><?php echo $r->nama;?></td>
                                                <td><?php echo $r->alamat;?></td>
                                                <td><?php echo $r->sekolah;?></td>
                                                <td><?php echo $r->email;?></td>                                               
                                                <td><?php echo $r->status_bayar;?></td>
                                                <td><?php echo $r->status_aktif;?></td>
                                                <td><button type="button" class="btn btn-primary">
                                                        <i class="livicon" data-name="edit" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" id="" style="width: 50px; height: 50px;"></i>
                                                     </button>
                                                </td>                                                    
                                                <td><button type="button" class="btn btn-danger">
                                                        <i class="livicon" data-name="user-remove" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" id="" style="width: 50px; height: 50px;"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php
                                        $no++;
                                        endforeach;
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
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Responsive</h4>
                </div>
                <div class="modal-body">
                    <form id="FormTambahAkun" method="POST">
                        <h4>Some More data</h4>
                        <p>
                            <input id="name" name="nama" type="text" placeholder="Nama Lengkap" class="form-control">
                        </p>
                        <p>
                            <input id="name1" name="alamat" type="text" placeholder="Alamat" class="form-control">
                        </p>
                        <p>
                            <input id="name2" name="sekolah" type="text" placeholder="Sekolah" class="form-control">
                        </p>
                        <p>
                            <input id="name3" name="email" type="text" placeholder="E-mail" class="form-control">
                        </p>
                        <p>
                            <input id="name4" name="password" type="password" placeholder="Password" class="form-control">
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
        });
    </script>    
</body>
</html>