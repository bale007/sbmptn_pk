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
                <h1>Hasil Ujian</h1>
            </section>
            <section class="content">
                <div class="row">
                    <!---->
                    <?php 
                    $no=1;
                    foreach ($record->result() as $r){    
                    ?>
                        <div class="col-md-12">
                            <div class="portlet box primary">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="livicon" data-name="lab" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        No. <?php echo $no;?> | <b><?php echo $r->pelajaran;?></b>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p><?php if((stristr($r->soal,".jpg")) || (stristr($r->soal,".png")) || (stristr($r->soal,".JPG")) || (stristr($r->soal,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->soal.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->soal;
                                                        } 
                                                    ?></p>
                                    <table>
                                        <tr>
                                            <td>&nbsp;&nbsp; A.&nbsp;&nbsp;</td>
                                            <td><?php if((stristr($r->opsi_a,".jpg")) || (stristr($r->opsi_a,".png")) || (stristr($r->opsi_a,".JPG")) || (stristr($r->opsi_a,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_a.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_a;
                                                        } 
                                                    ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;&nbsp; B. &nbsp;&nbsp;</td>
                                            <td><?php if((stristr($r->opsi_b,".jpg")) || (stristr($r->opsi_b,".png")) || (stristr($r->opsi_b,".JPG")) || (stristr($r->opsi_b,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_b.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_b;
                                                        } 
                                                    ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;&nbsp; C. &nbsp;&nbsp;</td>
                                            <td><?php if((stristr($r->opsi_c,".jpg")) || (stristr($r->opsi_c,".png")) || (stristr($r->opsi_c,".JPG")) || (stristr($r->opsi_c,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_c.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_c;
                                                        } 
                                                    ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;&nbsp; D.&nbsp;&nbsp;</td>
                                            <td><?php if((stristr($r->opsi_d,".jpg")) || (stristr($r->opsi_d,".png")) || (stristr($r->opsi_d,".JPG")) || (stristr($r->opsi_d,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_d.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_d;
                                                        } 
                                                    ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;&nbsp; E.&nbsp;&nbsp;</td>
                                            <td><?php if((stristr($r->opsi_e,".jpg")) || (stristr($r->opsi_e,".png")) || (stristr($r->opsi_e,".JPG")) || (stristr($r->opsi_e,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_e.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_e;
                                                        } 
                                                    ?>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <p>Kunci Jawaban : <b><?php echo $r->jawaban_soal;?></b></p>
                                    <p>Jawaban : <?php if(empty($r->jawaban)){
                                                           echo '<b style="color: gray">Kosong</b>';
                                                     }else if($r->jawaban==$r->jawaban_soal){
                                                        echo '<b style="color: green">'.$r->jawaban.'</b>';
                                                     }else{
                                                         echo '<b style="color: red">'.$r->jawaban.'</b>';
                                                     }
                                                ;?>
                                        
                                    </p>
                                    <p><?php
                                            if(!empty($r->pembahasan)){
                                                echo 'Pembahasan : ';
                                                if((stristr($r->pembahasan,".jpg")) || (stristr($r->pembahasan,".png")) || (stristr($r->pembahasan,".JPG")) || (stristr($r->pembahasan,".PNG"))){ 
                                                    echo '<img src="'.base_url().'assets/img/soal/'.$r->pembahasan.'" class="img-responsive" alt="...">';
                                                }else{
                                                    echo $r->pembahasan;
                                                }
                                            } 
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php 
                    $no++;
                    }
                    ?>
                    <!---->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/fullcalendar/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>assets/vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!--  todolist-->
    <script src="<?php echo base_url();?>assets/js/todolist.js"></script>
    <!-- EASY PIE CHART JS -->
    <script src="<?php echo base_url();?>assets/vendors/charts/easypiechart.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/charts/jquery.easypiechart.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/charts/jquery.easingpie.js"></script>
    <!--for calendar-->
    <script src="<?php echo base_url();?>assets/vendors/fullcalendar/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="<?php echo base_url();?>assets/vendors/charts/jquery.flot.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/vendors/charts/jquery.flot.resize.min.js" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="<?php echo base_url();?>assets/vendors/charts/jquery.sparkline.js"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/countUp/countUp.js"></script>
    <!--   maps -->
    <script src="<?php echo base_url();?>assets/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jscharts/Chart.js"></script>
    <script src="<?php echo base_url();?>assets/js/dashboard.js" type="text/javascript"></script>
    <!-- end of page level js -->

</body>

</html>
