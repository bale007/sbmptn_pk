
<!DOCTYPE html>
<html class="gr__localhost" style="min-height: 444px;">

<head>
    <meta charset="UTF-8">
    <title>Ujian</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="<?php echo base_url();?>/assets/img/LogoPk.png" type="image/x-icon"/>
    <!-- global css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="<?php echo base_url();?>assets/css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/vendors/modal/css/component.css" rel="stylesheet" />

    

    <!-- end of global css -->

    <!--page level css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/Buttons/css/buttons.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/advbuttons.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/buttons.css" />

    <!--end of page level css-->

</head>

<body class="skin-josh" style="min-height: 444px;">
    
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        
        
            <section class="content-header">
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            Ujian
                        </a>
<!--                        <p style="" id="timer"></p>-->
                    </li>
                    <li>
                        
                    </li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-9">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">Soal</h4>
                                <span class="pull-right">
                                    <b style="" id="timer"></b>&nbsp;
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                </span>
                            </div>
                            <form action="<?php echo base_url().'soal/submit';?>" method="POST" id="frmSoal">
                                <div class="panel-body">
                                    <input type="hidden" name="jurusan" value="<?php echo $jurusan;?>">
                                    <input type="hidden" name="paket" value="<?php echo $paket;?>">
                                    <?php                            
                                    $no=1;
                                    foreach ($record->result() as $r){
                                    ?>
                                    <div style="display: none;" id="soal<?php echo $no;?>">
                                        <input type="hidden" name="soal<?php echo $no;?>" value="<?php echo $r->id_soal;?>">
                                        <p>No. <?php echo $no;?></p>
                                        <p><?php if((stristr($r->soal,".jpg")) || (stristr($r->soal,".png")) || (stristr($r->soal,".JPG")) || (stristr($r->soal,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->soal.'" alt="Soal">';
                                                        }else{
                                                            echo $r->soal;
                                                        } 
                                            ?>
                                        </p>

                                        <table>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="A"></td>
                                                <td>&nbsp;&nbsp; A.&nbsp;&nbsp;</td>
                                                <td><?php   
                                                        if((stristr($r->opsi_a,".jpg")) || (stristr($r->opsi_a,".png")) || (stristr($r->opsi_a,".JPG")) || (stristr($r->opsi_a,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_a.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_a;
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio"  class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="B"></td>
                                                <td>&nbsp;&nbsp; B.&nbsp;&nbsp;</td>
                                                <td><?php if((stristr($r->opsi_b,".jpg")) || (stristr($r->opsi_b,".png")) || (stristr($r->opsi_b,".JPG")) || (stristr($r->opsi_b,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_b.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_b;
                                                        }  
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="C"></td>
                                                <td>&nbsp;&nbsp; C.&nbsp;&nbsp;</td>
                                                <td><?php if((stristr($r->opsi_c,".jpg")) || (stristr($r->opsi_c,".png")) || (stristr($r->opsi_c,".JPG")) || (stristr($r->opsi_c,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_c.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_c;
                                                        } 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="D"></td>
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
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="E"></td>
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
                                    </div>
                                    <?php 
                                    $no++;
                                    }
                                    foreach ($record1->result() as $r){
                                    ?>
                                    <div style="display: none;" id="soal<?php echo $no;?>">
                                        <input type="hidden" name="soal<?php echo $no;?>" value="<?php echo $r->id_soal;?>">
                                        <p>No. <?php echo $no;?></p>
                                        <p><?php if((stristr($r->soal,".jpg")) || (stristr($r->soal,".png")) || (stristr($r->soal,".JPG")) || (stristr($r->soal,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->soal.'" alt="Soal">';
                                                        }else{
                                                            echo $r->soal;
                                                        } 
                                            ?>
                                        </p>

                                        <table>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="A"></td>
                                                <td>&nbsp;&nbsp; A.&nbsp;&nbsp;</td>
                                                <td><?php   
                                                        if((stristr($r->opsi_a,".jpg")) || (stristr($r->opsi_a,".png")) || (stristr($r->opsi_a,".JPG")) || (stristr($r->opsi_a,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_a.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_a;
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio"  class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="B"></td>
                                                <td>&nbsp;&nbsp; B.&nbsp;&nbsp;</td>
                                                <td><?php if((stristr($r->opsi_b,".jpg")) || (stristr($r->opsi_b,".png")) || (stristr($r->opsi_b,".JPG")) || (stristr($r->opsi_b,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_b.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_b;
                                                        }  
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="C"></td>
                                                <td>&nbsp;&nbsp; C.&nbsp;&nbsp;</td>
                                                <td><?php if((stristr($r->opsi_c,".jpg")) || (stristr($r->opsi_c,".png")) || (stristr($r->opsi_c,".JPG")) || (stristr($r->opsi_c,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_c.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_c;
                                                        } 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="D"></td>
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
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="E"></td>
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
                                    </div>
                                    <?php 
                                    $no++;
                                    }
                                    foreach ($record2->result() as $r){
                                    ?>
                                    <div style="display: none;" id="soal<?php echo $no;?>">
                                        <input type="hidden" name="soal<?php echo $no;?>" value="<?php echo $r->id_soal;?>">
                                        <p>No. <?php echo $no;?></p>
                                        <p><?php if((stristr($r->soal,".jpg")) || (stristr($r->soal,".png")) || (stristr($r->soal,".JPG")) || (stristr($r->soal,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->soal.'" alt="Soal">';
                                                        }else{
                                                            echo $r->soal;
                                                        } 
                                            ?>
                                        </p>

                                        <table>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="A"></td>
                                                <td>&nbsp;&nbsp; A.&nbsp;&nbsp;</td>
                                                <td><?php   
                                                        if((stristr($r->opsi_a,".jpg")) || (stristr($r->opsi_a,".png")) || (stristr($r->opsi_a,".JPG")) || (stristr($r->opsi_a,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_a.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_a;
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio"  class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="B"></td>
                                                <td>&nbsp;&nbsp; B.&nbsp;&nbsp;</td>
                                                <td><?php if((stristr($r->opsi_b,".jpg")) || (stristr($r->opsi_b,".png")) || (stristr($r->opsi_b,".JPG")) || (stristr($r->opsi_b,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_b.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_b;
                                                        }  
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="C"></td>
                                                <td>&nbsp;&nbsp; C.&nbsp;&nbsp;</td>
                                                <td><?php if((stristr($r->opsi_c,".jpg")) || (stristr($r->opsi_c,".png")) || (stristr($r->opsi_c,".JPG")) || (stristr($r->opsi_c,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_c.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_c;
                                                        } 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="D"></td>
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
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="E"></td>
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
                                    </div>
                                    <?php 
                                    $no++;
                                    }
                                    foreach ($record3->result() as $r){
                                    ?>
                                    <div style="display: none;" id="soal<?php echo $no;?>">
                                        <input type="hidden" name="soal<?php echo $no;?>" value="<?php echo $r->id_soal;?>">
                                        <p>No. <?php echo $no;?></p>
                                        <p><?php if((stristr($r->soal,".jpg")) || (stristr($r->soal,".png")) || (stristr($r->soal,".JPG")) || (stristr($r->soal,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->soal.'" alt="Soal">';
                                                        }else{
                                                            echo $r->soal;
                                                        } 
                                            ?>
                                        </p>

                                        <table>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="A"></td>
                                                <td>&nbsp;&nbsp; A.&nbsp;&nbsp;</td>
                                                <td><?php   
                                                        if((stristr($r->opsi_a,".jpg")) || (stristr($r->opsi_a,".png")) || (stristr($r->opsi_a,".JPG")) || (stristr($r->opsi_a,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_a.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_a;
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio"  class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="B"></td>
                                                <td>&nbsp;&nbsp; B.&nbsp;&nbsp;</td>
                                                <td><?php if((stristr($r->opsi_b,".jpg")) || (stristr($r->opsi_b,".png")) || (stristr($r->opsi_b,".JPG")) || (stristr($r->opsi_b,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_b.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_b;
                                                        }  
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="C"></td>
                                                <td>&nbsp;&nbsp; C.&nbsp;&nbsp;</td>
                                                <td><?php if((stristr($r->opsi_c,".jpg")) || (stristr($r->opsi_c,".png")) || (stristr($r->opsi_c,".JPG")) || (stristr($r->opsi_c,".PNG"))){ 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_c.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_c;
                                                        } 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="D"></td>
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
                                                <td><input type="radio" class="coba pilihan<?php echo $no;?>" name="jawaban<?php echo $no;?>" value="E"></td>
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
                                    </div>
                                    <?php 
                                    $no++;
                                    }
                                    ?>
                                    <hr>
                                    <button type="button" id="back" class="button button-pill button-flat-primary"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</button>
                                    <button type="button" id="next" class="button button-pill button-flat"><span class="glyphicon glyphicon-arrow-right"></span> Selanjutnya</button>
                                    <button type="button" id="delete" class="button button-pill button-flat-caution"><span class="glyphicon glyphicon-remove"></span> Hapus Pilihan</button>
                                    <button name="submit" type="submit" class="button button-pill button-flat-royal" id="submit"><span class="glyphicon glyphicon-check"></span>Submit</button>
                                    <button type="button" class="button button-pill button-flat-highlight" data-toggle="modal" data-target="#petunjuk" id="petunjuk1"><span class="glyphicon glyphicon-flag"></span>Petunjuk</button>
                                </div>
                           </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">Nomer Soal</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="tags">
                                    <?php 
                                    $soal=1;
                                    for($i=$soal;$i<$no;$i++){
                                    ?>
                                        <a href="#" id="no<?php echo $i;?>" class="tombol btn-lg default" data-id="<?php echo $i;?>"><b><?php echo $i;?></b></a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    
<!-- fullwidth modal-->
<div class="modal fade in" id="full-width" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
                <h4 class="text-center modal-title">Peringatan !</h4>
            </div>
            <div class="modal-body">
                <p>
                    Anda Yakin Akan Menyelesaikan Ujian ?.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Batal</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- END modal-->
                
    <div class="modal fade in" id="petunjuk" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Petunjuk Khusus</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>PETUNJUK A</b></p>
                        </div>
                        <div class="col-sm-8">
                            <p>Pilih Jawaban yang paling tepat (A,B,C,D, atau E)</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>PETUNJUK B</b></p>
                        </div>
                        <div class="col-sm-8">
                            <p>Soal terdiri dari tiga bagian, yaitu PERNYATAAN, SEBAB, DAN ALASAN  yang disusum secara berurutan.</p>
                            <p><i>Pilihlah:</i></p>
                            <p>(A) Jika pernyataan benar, alasan benar, keduanya menunjukkan hubungan sebab akibat</p>
                            <p>(B) Jika pernyataan benar, alasan benar, tetapi keduanya tidak menunjukkan hubungan sebab akibat</p>
                            <p>(C) Jika pernyataan benar, alasan salah</p>
                            <p>(D) Jika pernyataan salah, alasan benar</p>
                            <p>(E) Jika pernyataan dan alasan, keduanya salah</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>PETUNJUK C</b></p>
                        </div>
                        <div class="col-sm-8">
                            <p><i>Pilihlah:</i></p>
                            <p>(A) Jika jawaban (1),(2), dan (3) yang benar</p>
                            <p>(B) Jika jawaban (1) dan (3) yang benar</p>
                            <p>(C) Jika jawaban (2) dan (4) yang benar</p>
                            <p>(D) Jika jawaban (4) saja yang benar</p>
                            <p>(E) Jika jawaban (1),(2),(3), dan (4) yang benar</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>


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
    <!-- begining of page level js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/Buttons/js/vendor/scrollto.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/Buttons/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/Buttons/js/buttons.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/modal/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/modal/js/modalEffects.js"></script>

    
    <!--social dashboard-->

<script type="text/javascript">
    $('#petujuk1').trigger('click');
    
    $(document).ready(function(){   
        
        var no = 1;
        var no1= <?php echo $no;?>-1;
        
        $('.coba').click(function(){
            $('#no'+no).addClass('primary');
            $('#delete').removeAttr("disabled","disabled");
            //alert(no);
        });
        
        $('#soal1').attr("style","display:");
        $('#back').attr("disabled","disabled");
        $('#delete').attr("disabled","disabled");
        
        //no++;
        $('#next').click(function(){
            $('#soal'+no).fadeOut(function(){                   
                $('#soal'+no).attr("style","display:none");
                no++;
                $('#soal'+no).attr("style","display:");
                $('#back').removeAttr("disabled","disabled");
                if($('.pilihan'+no).is(':checked')) { 
                    $('#delete').removeAttr("disabled","disabled"); 
                }else{
                    $('#delete').attr("disabled","disabled");
                }
                //alert(no);
            }); 
            if(no===(no1-1)){
                $('#next').attr("disabled","disabled");
            }
                
            //alert(no);
        });
        $('#back').click(function(){
            $('#soal'+no).fadeOut(function(){
                $('#soal'+no).attr("style","display:none");
                no--;
                $('#soal'+no).attr("style","display:");
                $('#next').removeAttr("disabled","disabled");
                
                if($('.pilihan'+no).is(':checked')) { 
                    $('#delete').removeAttr("disabled","disabled"); 
                }else{
                    $('#delete').attr("disabled","disabled");
                }
                //alert(no);
            });
            if(no===2){
                $('#back').attr("disabled","disabled");
            }
            
            
            //alert(no);
        });
        
        $('#delete').click(function(){
            $('.pilihan'+no).attr("checked",false);
            $('#delete').attr("disabled","disabled");
            //alert("No : "+no);
            $('#no'+no).removeClass('primary');
        });
        
        $('.tombol').click(function(){
            var id = $(this).attr("data-id");
            $('#soal'+no).fadeOut(function(){
                $('#soal'+no).attr("style","display:none");
                $('#soal'+id).attr("style","display:");
            });
            if($('.pilihan'+id).is(':checked')) { 
                $('#delete').removeAttr("disabled","disabled"); 
            }else{
                $('#delete').attr("disabled","disabled");
            }
            no = id;
            if(id==='1'){
                $('#back').attr("disabled","disabled");
                $('#next').removeAttr("disabled","disabled");
            }else{
                $('#back').removeAttr("disabled","disabled");
            }
            //alert("id = "+id+" no="+no1);
            if(id==no1){
                $('#next').attr("disabled","disabled");
                $('#back').removeAttr("disabled","disabled");
            }else{
                $('#next').removeAttr("disabled","disabled");
            }
        });
        
        /** Membuat Waktu Mulai Hitung Mundur Dengan 
            * var detik = 0,
            * var menit = 1,
            * var jam = 1
        */
        var detik = 0;
        var menit = 45;
        var jam   = 1;
        var hari  = 0;

        /**
           * Membuat function hitung() sebagai Penghitungan Waktu
        */
        function hitung() {
            /** setTimout(hitung, 1000) digunakan untuk 
                 * mengulang atau merefresh halaman selama 1000 (1 detik) 
            */
            setTimeout(hitung,1000);

            /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
            if(menit < 10 && jam === 0){
                $('#timer').attr('style','color:red');
            };

            /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
            $('#timer').html(
                'Sisa waktu : '+jam + ' jam : ' + menit + ' menit : ' + detik + ' detik'
            );

            /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
            detik --;

            /** Jika var detik < 0
                * var detik akan dikembalikan ke 59
                * Menit akan Berkurang 1
            */
            if(detik < 0) {
                detik = 59;
                menit --;

               /** Jika menit < 0
                    * Maka menit akan dikembali ke 59
                    * Jam akan Berkurang 1
                */
                if(menit < 0) {
                    menit = 59;
                    jam --;

                    /** Jika var jam < 0
                        * clearInterval() Memberhentikan Interval dan submit secara otomatis
                    */

                    if(jam < 0) { 
                        clearInterval(); 
                        /** Variable yang digunakan untuk submit secara otomatis di Form */
                        //var frmSoal = document.getElementById("frmSoal"); 
                        alert('Waktu Anda telah habis !');
                        $('#submit').trigger('click'); 
                    } 
                } 
            } 
        }           
        /** Menjalankan Function Hitung Waktu Mundur */
        hitung();
    });
</script>
</body>
</html>
