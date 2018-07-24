        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Welcome to Dashboard</h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="lab" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Tes Kemampuan Dasar Saintek (TKD Saintek)
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Paket</th>
                                                <th>Waktu Mulai</th>
                                                <th>Waktu Selesai</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=1;
                                            foreach ($saintek as $s){
                                            ?>
                                            <tr>
                                                <td>Paket <?php echo $no;?></td>
                                                <td></td>
                                                <td></td>
                                                <td><?php if($s->status_soal=='1'){
                                                                echo '<b style="color:green;">Aktif</b>';
                                                            }else{
                                                                echo '<b style="color:red;">Tidak Aktif</b>';
                                                            };
                                                    ?>
                                                </td>
                                                <td><button type="button" class="btn btn-default todoedit edit" data-toggle="modal" data-target="#UbahSoal"
                                                            data-id="<?php echo $s->id;?>"
                                                            data-status="<?php echo $s->status_soal;?>">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="lab" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Tes Kemampuan Dasar Soshum (TKD Soshum)
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Paket</th>
                                                <th>Waktu Mulai</th>
                                                <th>Waktu Selesai</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=1;
                                            foreach ($soshum as $s){
                                            ?>
                                            <tr>
                                                <td>Paket <?php echo $no;?></td>
                                                <td></td>
                                                <td></td>
                                                <td><?php if($s->status_soal=='1'){
                                                                echo '<b style="color:green;">Aktif</b>';
                                                            }else{
                                                                echo '<b style="color:red;">Tidak Aktif</b>';
                                                            };
                                                    ?>
                                                </td>
                                                <td><button type="button" class="btn btn-default todoedit edit" data-toggle="modal" data-target="#UbahSoal"
                                                            data-id="<?php echo $s->id;?>"
                                                            data-status="<?php echo $s->status_soal;?>">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="lab" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Tes Kemampuan dan Potensi Akademi (TKPA)
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Paket</th>
                                                <th>Waktu Mulai</th>
                                                <th>Waktu Selesai</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=1;
                                            foreach ($tkpa as $s){
                                            ?>
                                            <tr>
                                                <td>Paket <?php echo $no;?></td>
                                                <td></td>
                                                <td></td>
                                                <td><?php if($s->status_soal=='1'){
                                                                echo '<b style="color:green;">Aktif</b>';
                                                            }else{
                                                                echo '<b style="color:red;">Tidak Aktif</b>';
                                                            };
                                                    ?>
                                                </td>
                                                <td><button type="button" class="btn btn-default todoedit edit" data-toggle="modal" data-target="#UbahSoal"
                                                        data-id="<?php echo $s->id;?>"
                                                            data-status="<?php echo $s->status_soal;?>">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
            </section>
        </aside>
        <!-- right-side -->
    </div>

    <div class="modal fade in" id="UbahSoal" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url().'admin/aktifasi_soal';?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" >Aktifasi Soal</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <p>Aktifasi Soal</p>
                        <select name="aktifasi" class="form-control" id="aktifasi">
                            <option value="0">Tidak Aktif</option>
                            <option value="1">Aktif</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/fullcalendar/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="<?php echo base_url();?>/assets/vendors/modal/js/classie.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/modal/js/modalEffects.js"></script>    
    <!-- end of page level js -->
    <script type="text/javascript">
        $(document).ready(function(){
           $('.edit').click(function(){
               $('#id').val($(this).data("id"))
               $('#aktifasi').val($(this).data("status"));
           }); 
        });
    </script>
</body>

</html>
