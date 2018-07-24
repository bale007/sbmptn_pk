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
                <h1>Ikut Ujian</h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="lab" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Tes Kemampuan dan Potensi Akademik (TKPA)
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Paket</th>
                                                
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
                                                <td><?php if($s->status_soal=='1'){
                                                                echo '<a href="'.base_url().'soal/lihat_soal/4" class="btn btn-success">Ujian <span class="glyphicon glyphicon-edit"></span></a>';
                                                            }else{
                                                                echo '<button class="btn btn-danger" disabled="">Tidak Aktif <span class="glyphicon glyphicon-remove"></span></button>';
                                                            };
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                            foreach ($tkpa1 as $s){
                                            ?>
                                            <tr>
                                                <td>Paket <?php echo $no;?></td>                                     
                                                <td><?php if($s->status_soal=='1' && $this->session->userdata('status_bayar')=='1' && $this->session->userdata('tkpa_b') <> '1'){
                                                                echo '<a href="'.base_url().'soal/ujian/4/2" class="btn btn-success">Ujian <span class="glyphicon glyphicon-edit"></span></a>';
                                                            }else{
                                                                echo '<button class="btn btn-danger" disabled="">Tidak Aktif <span class="glyphicon glyphicon-remove"></span></button>';
                                                            };
                                                    ?>
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
                                               
                                                <td><?php if($s->status_soal=='1'){
                                                                echo '<a href="'.base_url().'soal/lihat_soal/2" class="btn btn-success">Ujian <span class="glyphicon glyphicon-edit"></span></a>';
                                                            }else{
                                                                echo '<button class="btn btn-danger" disabled="">Tidak Aktif <span class="glyphicon glyphicon-remove"></span></button>';
                                                            };
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                            foreach ($soshum1 as $s1){
                                            ?>
                                            <tr>
                                                <td>Paket <?php echo $no;?></td>
                                                
                                                <td><?php if($s1->status_soal=='1' && $this->session->userdata('status_bayar')=='1' && $this->session->userdata('soshum_b') <> '1'){
                                                                echo '<a href="'.base_url().'soal/ujian/2/2" class="btn btn-success">Ujian <span class="glyphicon glyphicon-edit"></span></a>';
                                                            }else{
                                                                echo '<button class="btn btn-danger" disabled="">Tidak Aktif <span class="glyphicon glyphicon-remove"></span></button>';
                                                            };
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                            foreach ($soshum2 as $s1){
                                            ?>
                                            <tr>
                                                <td>Paket <?php echo $no;?></td>
                                                
                                                <td><?php if($s1->status_soal=='1' && $this->session->userdata('status_bayar')=='1' && $this->session->userdata('soshum_c') <> '1'){
                                                                echo '<a href="'.base_url().'soal/ujian/2/3" class="btn btn-success">Ujian <span class="glyphicon glyphicon-edit"></span></a>';
                                                            }else{
                                                                echo '<button class="btn btn-danger" disabled="">Tidak Aktif <span class="glyphicon glyphicon-remove"></span></button>';
                                                            };
                                                    ?>
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
                                    Tes Kemampuan Dasar Saintek (TKD Saintek)
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Paket</th>
                                                
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=1;
                                            foreach ($saintek as $s){
                                            ?>
                                            <tr>
                                                <td>Paket <?php echo $no;?></td>
                                                
                                                <td><?php if($s->status_soal=='1'){
                                                                echo '<a href="'.base_url().'soal/lihat_soal/1" class="btn btn-success">Ujian <span class="glyphicon glyphicon-edit"></span></a>';
                                                            }else{
                                                                echo '<button class="btn btn-danger" disabled="">Tidak Aktif <span class="glyphicon glyphicon-remove"></span></button>';
                                                            };
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                            foreach ($saintek1 as $s1){
                                            ?>
                                            <tr>
                                                <td>Paket <?php echo $no;?></td>
                                                
                                                <td><?php if($s1->status_soal=='1' && $this->session->userdata('status_bayar')=='1' && $this->session->userdata('saintek_b') <> '1'){
                                                                echo '<a href="'.base_url().'soal/ujian/1/2" class="btn btn-success">Ujian <span class="glyphicon glyphicon-edit"></span></a>';
                                                            }else{
                                                                echo '<button class="btn btn-danger" disabled="">Tidak Aktif <span class="glyphicon glyphicon-remove"></span></button>';
                                                            };
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                            foreach ($saintek2 as $s1){
                                            ?>
                                            <tr>
                                                <td>Paket <?php echo $no;?></td>
                                                
                                                <td><?php if($s1->status_soal=='1' && $this->session->userdata('status_bayar')=='1' && $this->session->userdata('saintek_c') <> '1'){
                                                                echo '<a href="'.base_url().'soal/ujian/1/3" class="btn btn-success">Ujian <span class="glyphicon glyphicon-edit"></span></a>';
                                                            }else{
                                                                echo '<button class="btn btn-danger" disabled="">Tidak Aktif <span class="glyphicon glyphicon-remove"></span></button>';
                                                            };
                                                    ?>
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
    <script language="JavaScript">

        document.addEventListener("contextmenu", function(e){
            e.preventDefault();
        }, false);
    </script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!--  todolist-->
    
    <!--   Realtime Server Load  -->
    <!-- end of page level js -->

</body>

</html>
