        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1><?php echo $judul;?></h1>      
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box info">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Paket A
                                </div>
                            </div>
                            <div class="portlet-body">
                                <a class="btn btn-primary btn-large" id="TambahPaketA" data-toggle="modal" data-href="#TambahSoal" href="#TambahSoal">
                                    <i class="livicon" data-name="pen" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </a>
                                <hr style="border: none;">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Skor</th>
                                                <th>Benar</th>
                                                <th>Salah</th>
                                                <th>Kosong</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1;
                                        foreach ($record->result() as $r):
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $r->id_akun;?></td>
                                                <td><?php echo $r->nama;?></td>
                                                <td><?php echo $r->skor;?>%</td>
                                                <td><?php echo $r->benar;?></td>
                                                <td><?php echo $r->salah;?></td>
                                                <td><?php echo $r->kosong;?></td>
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
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Paket B
                                </div>
                            </div>
                            <div class="portlet-body">
                                <a class="btn btn-success btn-large" id="TambahPaketB" data-toggle="modal" data-href="#TambahSoal" href="#TambahSoal">
                                    <i class="livicon" data-name="pen" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </a>
                                <hr style="border: none;">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Skor</th>
                                                <th>Benar</th>
                                                <th>Salah</th>
                                                <th>Kosong</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no_b=1;
                                        foreach ($record1->result() as $r):
                                        ?>
                                            <tr>
                                                <td><?php echo $no_b;?></td>
                                                <td><?php echo $r->id_akun;?></td>
                                                <td><?php echo $r->nama;?></td>
                                                <td><?php echo $r->skor;?>%</td>
                                                <td><?php echo $r->benar;?></td>
                                                <td><?php echo $r->salah;?></td>
                                                <td><?php echo $r->kosong;?></td>
                                            </tr>
                                        <?php
                                        $no_b++;
                                        endforeach;
                                        ?>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box success">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Paket C
                                </div>
                            </div>
                            <div class="portlet-body">
                                <a class="btn btn-info btn-large" id="TambahPaketC" data-toggle="modal" data-href="#TambahSoal" href="#TambahSoal">
                                    <i class="livicon" data-name="pen" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </a>
                                <hr style="border: none;">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Skor</th>
                                                <th>Benar</th>
                                                <th>Salah</th>
                                                <th>Kosonh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no_b=1;
                                        foreach ($record2->result() as $r):
                                        ?>
                                            <tr>
                                                <td><?php echo $no_b;?></td>
                                                <td><?php echo $r->id_akun;?></td>
                                                <td><?php echo $r->nama;?></td>
                                                <td><?php echo $r->skor;?>%</td>
                                                <td><?php echo $r->benar;?></td>
                                                <td><?php echo $r->salah;?></td>
                                                <td><?php echo $r->kosong;?></td>
                                            </tr>
                                        <?php
                                        $no_b++;
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
    
        
    
                                    

                                    <!-- ./wrapper -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="<?php echo base_url();?>/assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url();?>/assets/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/assets/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/assets/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/assets/js/metisMenu.js" type="text/javascript"> </script>
    <script src="<?php echo base_url();?>/assets/vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <script src="<?php echo base_url();?>/assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/pages/table-responsive.js"></script>
    
    <script src="<?php echo base_url();?>/assets/vendors/modal/js/classie.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/modal/js/modalEffects.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/jasny-bootstrap/jasny-bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/assets/vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/assets/vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/assets/js/pages/user_profile.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>

    <script type="text/javascript">
        
        $(document).ready(function(){
            var i;
            
            $('#TambahPaketA').click(function(){
                $('#tambahjudul').html('Tambah Soal Paket A');
                $('#paket').val('A');
            });
            $('#TambahPaketB').click(function(){
                $('#tambahjudul').html('Tambah Soal Paket B');
                $('#paket').val('B');
            });
            $('#TambahPaketC').click(function(){
                $('#tambahjudul').html('Tambah Soal Paket C');
                $('#paket').val('C');
            });
            $('#TambahPaketD').click(function(){
                $('#tambahjudul').html('Tambah Soal Paket D');
                $('#paket').val('D');
            });
            
            
            $('#coba').click(function(){
               alert('tes'); 
            });
            
            $(document).on('click','.edit',function(){
                $('#id_ubah').val($(this).data("id"));
                //alert("Coba"); 
                $('#pelajaran').val($(this).data("pelajaran"));
//                $('#pelajaran option:selected').removeAttr("selected","selected");
//                if($(this).attr("data-pelajaran")===""){
//                    $('#pelajaran option[value="Pilih Pelajaran"]').attr("selected","selected");
//                }else{
//                    $('#pelajaran option[value="'+$(this).data("pelajaran")+'"]').attr("selected","selected");
//                }
                if($(this).attr("data-soal").substr(-4) === ".jpg" || $(this).attr("data-soal").substr(-4) === ".png" || $(this).attr("data-soal").substr(-4) === ".JPG" || $(this).attr("data-soal").substr(-4) === ".PNG"){
                    $('#fotosoal').html('<img src="<?php echo base_url();?>assets/img/soal/'+$(this).attr("data-soal")+'" alt="...">');
                    $('#soal').html('');
                    $('#ubah_foto0').val($(this).attr("data-soal"));
                }else{
                    $('#fotosoal').html('<img src="<?php echo base_url();?>assets/img/profil/user.jpeg" alt="...">');
                    $('#soal').html($(this).attr("data-soal"));
                    $('#ubah_foto0').val("");
                }
                
                for(i=1;i<=6;i++){
                    if($(this).attr("data-"+i).substr(-4) === ".jpg" || $(this).attr("data-"+i).substr(-4) === ".png" || $(this).attr("data-"+i).substr(-4) === ".JPG" || $(this).attr("data-"+i).substr(-4) === ".PNG"){
                        $('#foto'+i).html('<img src="<?php echo base_url();?>assets/img/soal/'+$(this).attr("data-"+i)+'" alt="...">');
                        $('#data'+i).val('');
                        $('#ubah_foto'+i).val($(this).attr("data-"+i));
                    }else{
                        $('#foto'+i).html('<img src="<?php echo base_url();?>assets/img/profil/user.jpeg" alt="...">');
                        $('#data'+i).val($(this).attr("data-"+i));
                        $('#ubah_foto'+i).val("");
                    }
                }
                //$('#jawaban option').removeAttr("selected","selected");
                $('#jawaban').val($(this).data("jawaban"));
                
                
            });
            
            $(document).on('click','.hapus',function(){
                $('#id_hapus').val($(this).data("id"));
                for(i=0;i<=6;i++){
                    if($(this).attr("data-"+i).substr(-4) === ".jpg" || $(this).attr("data-"+i).substr(-4) === ".png" || $(this).attr("data-"+i).substr(-4) === ".JPG" || $(this).attr("data-"+i).substr(-4) === ".PNG"){
                        $('#hapus_foto'+i).val($(this).attr("data-"+i));
                    }else{
                        $('#hapus_foto'+i).val("");
                    }
                }
            });
            
        });
    </script> 
</body>
</html>
                 