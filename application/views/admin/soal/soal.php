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
                                                <th>Pelajaran</th>
                                                <th>Soal</th>
                                                <th>Opsi A</th>
                                                <th>Opsi B</th>
                                                <th>Opsi C</th>
                                                <th>Opsi D</th>
                                                <th>Opsi E</th>
                                                <th>Jawaban</th>
                                                <th>Pembahasan</th>
                                                <th>Ubah</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1;
                                        foreach ($paket_a->result() as $r):
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $r->pelajaran;?></td>
                                                <td><?php   
                                                    if((stristr($r->soal,".jpg")) || (stristr($r->soal,".png"))) { 
                                                        echo '<img src="'.base_url().'assets/img/soal/'.$r->soal.'" class="img-responsive" alt="...">';
                                                    }else{
                                                        echo $r->soal;
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_a,".jpg")) || (stristr($r->opsi_a,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_a.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_a;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_b,".jpg")) || (stristr($r->opsi_b,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_b.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_b;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_c,".jpg")) || (stristr($r->opsi_c,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_c.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_c;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_d,".jpg")) || (stristr($r->opsi_d,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_d.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_d;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_e,".jpg")) || (stristr($r->opsi_e,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_e.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_e;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php echo $r->jawaban;?></td>
                                                <td><?php
                                                        if((stristr($r->pembahasan,".jpg")) || (stristr($r->pembahasan,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->pembahasan.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->pembahasan;
                                                        }
                                                    ?>
                                                </td>
                                                <td><button type="button" class="btn btn-default todoedit edit" data-toggle="modal" data-target="#UbahSoal" 
                                                            data-id="<?php echo $r->id_soal;?>"
                                                            data-pelajaran="<?php echo $r->pelajaran;?>"
                                                            data-soal="<?php echo $r->soal;?>" 
                                                            data-1="<?php echo $r->opsi_a;?>" 
                                                            data-2="<?php echo $r->opsi_b;?>" 
                                                            data-3="<?php echo $r->opsi_c;?>" 
                                                            data-4="<?php echo $r->opsi_d;?>" 
                                                            data-5="<?php echo $r->opsi_e;?>" 
                                                            data-jawaban="<?php echo $r->jawaban;?>" 
                                                            data-6="<?php echo $r->pembahasan;?>">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default tododelete hapus" data-toggle="modal" data-target="#HapusSoal" 
                                                            data-id="<?php echo $r->id_soal;?>"
                                                            data-0="<?php echo $r->soal;?>" 
                                                            data-1="<?php echo $r->opsi_a;?>" 
                                                            data-2="<?php echo $r->opsi_b;?>" 
                                                            data-3="<?php echo $r->opsi_c;?>" 
                                                            data-4="<?php echo $r->opsi_d;?>" 
                                                            data-5="<?php echo $r->opsi_e;?>"
                                                            data-6="<?php echo $r->pembahasan;?>">
                                                        <span class="glyphicon glyphicon-trash"></span>
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
                                                <th>Pelajaran</th>
                                                <th>Soal</th>
                                                <th>Opsi A</th>
                                                <th>Opsi B</th>
                                                <th>Opsi C</th>
                                                <th>Opsi D</th>
                                                <th>Opsi E</th>
                                                <th>Jawaban</th>
                                                <th>Pembahasan</th>
                                                <th>Ubah</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no_b=1;
                                        foreach ($paket_b->result() as $b):
                                        ?>
                                            <tr>
                                                <td><?php echo $no_b;?></td>
                                                <td><?php echo $b->pelajaran;?></td>
                                                <td><?php   
                                                    if((stristr($b->soal,".jpg")) || (stristr($b->soal,".png"))) { 
                                                        echo '<img src="'.base_url().'assets/img/soal/'.$b->soal.'" class="img-responsive" alt="...">';
                                                    }else{
                                                        echo $b->soal;
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($b->opsi_a,".jpg")) || (stristr($b->opsi_a,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$b->opsi_a.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $b->opsi_a;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($b->opsi_b,".jpg")) || (stristr($b->opsi_b,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$b->opsi_b.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $b->opsi_b;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($b->opsi_c,".jpg")) || (stristr($b->opsi_c,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$b->opsi_c.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $b->opsi_c;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($b->opsi_d,".jpg")) || (stristr($b->opsi_d,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$b->opsi_d.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $b->opsi_d;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($b->opsi_e,".jpg")) || (stristr($b->opsi_e,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$b->opsi_e.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $b->opsi_e;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php echo $b->jawaban;?></td>
                                                <td><?php
                                                        if((stristr($b->pembahasan,".jpg")) || (stristr($b->pembahasan,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$b->pembahasan.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $b->pembahasan;
                                                        }
                                                    ?>
                                                </td>
                                                <td><button type="button" class="btn btn-default todoedit edit" data-toggle="modal" data-target="#UbahSoal" 
                                                            data-id="<?php echo $b->id_soal;?>" 
                                                            data-pelajaran="<?php echo $b->pelajaran;?>"
                                                            data-soal="<?php echo $b->soal;?>" 
                                                            data-1="<?php echo $b->opsi_a;?>" 
                                                            data-2="<?php echo $b->opsi_b;?>" 
                                                            data-3="<?php echo $b->opsi_c;?>" 
                                                            data-4="<?php echo $b->opsi_d;?>" 
                                                            data-5="<?php echo $b->opsi_e;?>" 
                                                            data-jawaban="<?php echo $b->jawaban;?>" 
                                                            data-6="<?php echo $b->pembahasan;?>">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default tododelete hapus" data-toggle="modal" data-target="#HapusSoal" 
                                                            data-id="<?php echo $b->id_soal;?>"
                                                            data-0="<?php echo $b->soal;?>" 
                                                            data-1="<?php echo $b->opsi_a;?>" 
                                                            data-2="<?php echo $b->opsi_b;?>" 
                                                            data-3="<?php echo $b->opsi_c;?>" 
                                                            data-4="<?php echo $b->opsi_d;?>" 
                                                            data-5="<?php echo $b->opsi_e;?>"
                                                            data-6="<?php echo $b->pembahasan;?>">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>                               
                                                </td>
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
                                                <th>Pelajaran</th>
                                                <th>Soal</th>
                                                <th>Opsi A</th>
                                                <th>Opsi B</th>
                                                <th>Opsi C</th>
                                                <th>Opsi D</th>
                                                <th>Opsi E</th>
                                                <th>Jawaban</th>
                                                <th>Pembahasan</th>
                                                <th>Ubah</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no_c=1;
                                        foreach ($paket_c->result() as $r):
                                        ?>
                                            <tr>
                                                <td><?php echo $no_c;?></td>
                                                <td><?php echo $r->pelajaran;?></td>
                                                <td><?php   
                                                    if((stristr($r->soal,".jpg")) || (stristr($r->soal,".png"))) { 
                                                        echo '<img src="'.base_url().'assets/img/soal/'.$r->soal.'" class="img-responsive" alt="...">';
                                                    }else{
                                                        echo $r->soal;
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_a,".jpg")) || (stristr($r->opsi_a,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_a.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_a;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_b,".jpg")) || (stristr($r->opsi_b,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_b.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_b;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_c,".jpg")) || (stristr($r->opsi_c,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_c.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_c;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_d,".jpg")) || (stristr($r->opsi_d,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_d.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_d;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_e,".jpg")) || (stristr($r->opsi_e,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_e.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_e;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php echo $r->jawaban;?></td>
                                                <td><?php
                                                        if((stristr($r->pembahasan,".jpg")) || (stristr($r->pembahasan,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->pembahasan.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->pembahasan;
                                                        }
                                                    ?>
                                                </td>
                                                <td><button type="button" class="btn btn-default todoedit edit" data-toggle="modal" data-target="#UbahSoal" 
                                                            data-id="<?php echo $r->id_soal;?>" 
                                                            data-pelajaran="<?php echo $r->pelajaran;?>"
                                                            data-soal="<?php echo $r->soal;?>" 
                                                            data-1="<?php echo $r->opsi_a;?>" 
                                                            data-2="<?php echo $r->opsi_b;?>" 
                                                            data-3="<?php echo $r->opsi_c;?>" 
                                                            data-4="<?php echo $r->opsi_d;?>" 
                                                            data-5="<?php echo $r->opsi_e;?>" 
                                                            data-jawaban="<?php echo $r->jawaban;?>" 
                                                            data-6="<?php echo $r->pembahasan;?>">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default tododelete hapus" data-toggle="modal" data-target="#HapusSoal" 
                                                            data-id="<?php echo $r->id_soal;?>"
                                                            data-0="<?php echo $r->soal;?>" 
                                                            data-1="<?php echo $r->opsi_a;?>" 
                                                            data-2="<?php echo $r->opsi_b;?>" 
                                                            data-3="<?php echo $r->opsi_c;?>" 
                                                            data-4="<?php echo $r->opsi_d;?>" 
                                                            data-5="<?php echo $r->opsi_e;?>"
                                                            data-6="<?php echo $r->pembahasan;?>">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>                               
                                                </td>
                                            </tr>
                                        <?php
                                        $no_c++;
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
                        <div class="portlet box danger">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Paket D
                                </div>
                            </div>
                            <div class="portlet-body">
                                <a class="btn btn-info btn-large" id="TambahPaketD" data-toggle="modal" data-href="#TambahSoal" href="#TambahSoal">
                                    <i class="livicon" data-name="pen" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </a>
                                <hr style="border: none;">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Pelajaran</th>
                                                <th>Soal</th>
                                                <th>Opsi A</th>
                                                <th>Opsi B</th>
                                                <th>Opsi C</th>
                                                <th>Opsi D</th>
                                                <th>Opsi E</th>
                                                <th>Jawaban</th>
                                                <th>Pembahasan</th>
                                                <th>Ubah</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no_d=1;
                                        foreach ($paket_d->result() as $r):
                                        ?>
                                            <tr>
                                                <td><?php echo $no_d;?></td>
                                                <td><?php echo $r->pelajaran;?></td>
                                                <td><?php   
                                                    if((stristr($r->soal,".jpg")) || (stristr($r->soal,".png"))) { 
                                                        echo '<img src="'.base_url().'assets/img/soal/'.$r->soal.'" class="img-responsive" alt="...">';
                                                    }else{
                                                        echo $r->soal;
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_a,".jpg")) || (stristr($r->opsi_a,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_a.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_a;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_b,".jpg")) || (stristr($r->opsi_b,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_b.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_b;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_c,".jpg")) || (stristr($r->opsi_c,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_c.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_c;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_d,".jpg")) || (stristr($r->opsi_d,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_d.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_d;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php
                                                        if((stristr($r->opsi_e,".jpg")) || (stristr($r->opsi_e,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->opsi_e.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->opsi_e;
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php echo $r->jawaban;?></td>
                                                <td><?php
                                                        if((stristr($r->pembahasan,".jpg")) || (stristr($r->pembahasan,".png"))) { 
                                                            echo '<img src="'.base_url().'assets/img/soal/'.$r->pembahasan.'" class="img-responsive" alt="...">';
                                                        }else{
                                                            echo $r->pembahasan;
                                                        }
                                                    ?>
                                                </td>
                                                <td><button type="button" class="btn btn-default todoedit edit" data-toggle="modal" data-target="#UbahSoal" 
                                                            data-id="<?php echo $r->id_soal;?>" 
                                                            data-pelajaran="<?php echo $r->pelajaran;?>"
                                                            data-soal="<?php echo $r->soal;?>" 
                                                            data-1="<?php echo $r->opsi_a;?>" 
                                                            data-2="<?php echo $r->opsi_b;?>" 
                                                            data-3="<?php echo $r->opsi_c;?>" 
                                                            data-4="<?php echo $r->opsi_d;?>" 
                                                            data-5="<?php echo $r->opsi_e;?>" 
                                                            data-jawaban="<?php echo $r->jawaban;?>" 
                                                            data-6="<?php echo $r->pembahasan;?>">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default tododelete hapus" data-toggle="modal" data-target="#HapusSoal" 
                                                            data-id="<?php echo $r->id_soal;?>"
                                                            data-0="<?php echo $r->soal;?>" 
                                                            data-1="<?php echo $r->opsi_a;?>" 
                                                            data-2="<?php echo $r->opsi_b;?>" 
                                                            data-3="<?php echo $r->opsi_c;?>" 
                                                            data-4="<?php echo $r->opsi_d;?>" 
                                                            data-5="<?php echo $r->opsi_e;?>"
                                                            data-6="<?php echo $r->pembahasan;?>">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>                               
                                                </td>
                                            </tr>
                                        <?php
                                        $no_d++;
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
    
        
    <!--Tambah Soal-->
    <div class="modal fade in" id="TambahSoal" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
                <form action="<?php echo $tambah_soal;?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="tambahjudul"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="jurusan" name="jurusan" value="<?php echo $jurusan;?>">
                        <input type="hidden" id="paket" name="paket">
                        <p>Pelajaran</p>
                        <select name="pelajaran" class="form-control">
                            <option selected="">Pilih Pelajaran</option>
                            <?php 
                               foreach ($pelajaran as $p):
                                   echo '<option value="'.$p.'">'.$p.'</option>';
                               endforeach;
                            ?>
                        </select>
                        <p>Soal</p>
                        <div class="row">
                            <div class="col-md-7">
                                <textarea name="data0" placeholder="Soal" class="form-control"></textarea>
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file">
                                        <?php 
                                           echo '<img src="'.base_url().'assets/img/profil/user.jpeg" alt="...">';
                                        ?>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_0"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Opsi A</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data1" type="text" placeholder="Opsi A" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file">
                                        <?php 
                                           echo '<img src="'.base_url().'assets/img/profil/user.jpeg" alt="...">';
                                        ?>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_1"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Opsi B</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data2" type="text" placeholder="Opsi b" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file">
                                        <?php 
                                           echo '<img src="'.base_url().'assets/img/profil/user.jpeg" alt="...">';
                                        ?>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_2"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Opsi C</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data3" type="text" placeholder="Opsi C" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file">
                                        <?php 
                                           echo '<img src="'.base_url().'assets/img/profil/user.jpeg" alt="...">';
                                        ?>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_3"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Opsi D</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data4" type="text" placeholder="Opsi D" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file">
                                        <?php 
                                           echo '<img src="'.base_url().'assets/img/profil/user.jpeg" alt="...">';
                                        ?>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_4"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Opsi E</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data5" type="text" placeholder="Opsi E" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file">
                                        <?php 
                                           echo '<img src="'.base_url().'assets/img/profil/user.jpeg" alt="...">';
                                        ?>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_5"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Jawaban</p>
                        <select name="jawaban" class="form-control">
                            <option selected="">Pilih Jawaban</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                        <p>Pembahasan</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data6" type="text" placeholder="Pembahasan" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file">
                                        <?php 
                                           echo '<img src="'.base_url().'assets/img/profil/user.jpeg" alt="...">';
                                        ?>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_6"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="modal fade in" id="UbahSoal" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
                <form action="<?php echo $ubah_soal;?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" >Ubah Soal</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_ubah" name="id">
                        <input type="hidden" id="ubah_foto0" name="edit_foto0">
                        <input type="hidden" id="ubah_foto1" name="edit_foto1">
                        <input type="hidden" id="ubah_foto2" name="edit_foto2">
                        <input type="hidden" id="ubah_foto3" name="edit_foto3">
                        <input type="hidden" id="ubah_foto4" name="edit_foto4">
                        <input type="hidden" id="ubah_foto5" name="edit_foto5">
                        <input type="hidden" id="ubah_foto6" name="edit_foto6">
                        <p>Pelajaran</p>
                        <select name="pelajaran" class="form-control" id="pelajaran">
                            <option selected="">Pilih Pelajaran</option>
<!--                            <option value="MATEMATIKA IPA">A</option>
                            <option value="FISIKA">B</option>
                            <option value="KIMIA">C</option>
                            <option value="BIOLOGI">D</option>-->
                            <?php 
                               foreach ($pelajaran as $p):
                                   echo '<option value="'.$p.'">'.$p.'</option>';
                               endforeach;
//                            ?>
                        </select>
                        <p>Soal</p>
                        <div class="row">
                            <div class="col-md-7">
                                <textarea name="data0" id="soal" placeholder="Soal" class="form-control" style=""></textarea>
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file" id="fotosoal">

                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_0"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Opsi A</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data1" id="data1" type="text" placeholder="Opsi A" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file" id="foto1">

                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_1"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Opsi B</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data2" id="data2" type="text" placeholder="Opsi b" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file" id="foto2">

                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_2"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Opsi C</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data3" id="data3" type="text" placeholder="Opsi C" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file" id="foto3">

                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_3"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Opsi D</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data4" id="data4" type="text" placeholder="Opsi D" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file" id="foto4">

                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_4"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Opsi E</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data5" id="data5" type="text" placeholder="Opsi E" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file" id="foto5">

                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_5"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Jawaban</p>
                        <select name="jawaban" class="form-control" id="jawaban">
                            <option selected="">Pilih Jawaban</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                        <p>Pembahasan</p>
                        <div class="row">
                            <div class="col-md-7">
                                <input name="data6" id="data6" type="text" placeholder="Pembahasan" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-file" id="foto6">

                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="foto_6"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <div class="modal fade in" id="HapusSoal" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
                <form action="<?php echo $hapus_soal;?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    
                    <div class="modal-body">
                        <h4 class="text-center">Hapus Soal Ini ?</h4>
                        <input type="hidden" id="id_hapus" name="id">
                        <input type="hidden" id="hapus_foto0" name="hapus_foto0">
                        <input type="hidden" id="hapus_foto1" name="hapus_foto1">
                        <input type="hidden" id="hapus_foto2" name="hapus_foto2">
                        <input type="hidden" id="hapus_foto3" name="hapus_foto3">
                        <input type="hidden" id="hapus_foto4" name="hapus_foto4">
                        <input type="hidden" id="hapus_foto5" name="hapus_foto5">
                        <input type="hidden" id="hapus_foto6" name="hapus_foto6">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
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
                 