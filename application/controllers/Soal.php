<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model(array('model_soal','model_pengguna'));
        $this->load->library('upload');
        //chek_session();
    }
    
    public function cek_login()
    {
        if(empty($this->session->userdata('admin_soal'))){
	     redirect('login/admin');      		
	}  
    }
    
    public function cek_pengguna()
    {
        if($this->session->userdata('status_login')!='oke'){
            $this->session->set_flashdata('info','Anda harus login terlebih dahulu !');
            redirect('login');
        }
    }
    
    public function cek_ujian($jurusan,$paket)
    {
        if($jurusan=='1'){
            if($this->session->userdata('saintek_b')=='1' && $paket=='B'){
                redirect('pengguna/ikut_ujian');
            }
            if($this->session->userdata('saintek_c')=='1' && $paket=='C'){
                redirect('pengguna/ikut_ujian');
            }
        }else if($jurusan=='2'){
            if($this->session->userdata('soshum_b')=='1' && $paket=='B'){
                redirect('pengguna/ikut_ujian');
            }
            if($this->session->userdata('soshum_c')=='1' && $paket=='C'){
                redirect('pengguna/ikut_ujian');
            }
        }
    }
    
    public function index()
    {
	$this->cek_login();
        //$data["record"] = $this->model_soal->tampil_soal();
        redirect('soal/saintek');
    }

    public function tes1() 
    {

    }
    
    public function submit()
    {
        $benar  = 0;
        $salah  = 0;
        $kosong = 0;
        for($i=1;$i<=60;$i++){
            $soal = $this->input->post('soal'.$i);
            $hasil = $this->model_soal->data_soal($soal)->row_array();
            if(empty($this->input->post('jawaban'.$i))){
                $jawaban = '';
                $kosong++;
            }else if ($this->input->post('jawaban'.$i)==$hasil['jawaban']){
                $jawaban = $this->input->post('jawaban'.$i);
                $benar++;
            }else{
                $jawaban = $this->input->post('jawaban'.$i);
                $salah++;
            } 
            $detail[$i] = array(
                'id_akun'      => $this->session->userdata('id_akun'),
                'jurusan'      => $this->input->post('jurusan'),
                'paket'        => $this->input->post('paket'),
                'id_soal'      => $soal,
                'jawaban_soal' => $hasil['jawaban'],
                'jawaban'      => $jawaban
                );
        }
        
//      echo '<pre>';
//         print_r($detail);
//      echo '</pre>';
        $skor = (($benar*4)-$salah)*100/(4*60);
        $data = array(
            'id_akun' => $this->session->userdata('id_akun'),
            'jurusan' => $this->input->post('jurusan'),
            'paket'   => $this->input->post('paket'),
            'skor'    => $skor,
            'benar'   => $benar,
            'salah'   => $salah,
            'kosong'  => $kosong
            );
        
        if($this->model_soal->ikut_ujian($data)->num_rows()>0){
            $this->model_pengguna->ubahskor($data);
            for($i=1;$i<=60;$i++){
                $this->model_pengguna->ubahdetail($data,$detail[$i]);
            }
        }else{
            $data1 = array(
                'id_akun'    => $this->session->userdata('id_akun'),
                'jurusan'    => $this->input->post('jurusan'),
                'paket'      => $this->input->post('paket'),
                'ikut_ujian' => '1'
                );
            $this->model_pengguna->ikut_ujian($data1);
            $this->model_pengguna->tambahskor($data);
            for($i=1;$i<=60;$i++){
                $this->model_pengguna->tambahdetail($detail[$i]);
            }
        }
        redirect('pengguna/hasil_ujian');
    }
    
    public function simpan()
    {
        $benar  = 0;
        $salah  = 0;
        $kosong = 0;
        for($i=1;$i<=90;$i++){
            $hasil = $this->model_soal->data_soal($this->input->post('soal'.$i))->row_array();
            if(empty($this->input->post('jawaban'.$i))){
                $jawaban = '';
                $kosong++;
            }else{
                if ($this->input->post('jawaban'.$i)==$hasil['jawaban']){
                    $benar++;
                }else{
                    $salah++;
                }
                $jawaban = $this->input->post('jawaban'.$i); 
            }
            $detail[$i] = array(
                'id_akun'      => $this->session->userdata('id_akun'),
                'jurusan'      => $this->input->post('jurusan'),
                'paket'        => $this->input->post('paket'),
                'id_soal'      => $this->input->post('soal'.$i),
                'jawaban_soal' => $hasil['jawaban'],
                'jawaban'      => $jawaban
            );
            
        }
        
        $skor = (($benar*4)-$salah)*100/(4*60);
        $data = array(
            'id_akun' => $this->session->userdata('id_akun'),
            'jurusan' => $this->input->post('jurusan'),
            'paket'   => $this->input->post('paket'),
            'skor'    => $skor,
            'benar'   => $benar,
            'salah'   => $salah,
            'kosong'  => $kosong
            );
        
        if($this->model_soal->ikut_ujian($data)->num_rows()>0){
            $this->model_pengguna->ubahskor($data);
            for($i=1;$i<=90;$i++){
                $this->model_pengguna->ubahdetail($data,$detail[$i]);
            }
        }else{
            $data1 = array(
                'id_akun'    => $this->session->userdata('id_akun'),
                'jurusan'    => $this->input->post('jurusan'),
                'paket'      => $this->input->post('paket'),
                'ikut_ujian' => '1'
            );
            $this->model_pengguna->ikut_ujian($data1);
            $this->model_pengguna->tambahskor($data);
            for($i=1;$i<=90;$i++){
                $this->model_pengguna->tambahdetail($detail[$i]);
            }
        }
        redirect('pengguna/hasil_ujian');
    }
    
    public function hasil_ujian($skor,$benar,$salah,$kosong)
    {
        $data['judul'] = 'Hasil Ujian';
        $this->load->view('pengguna/header_pengguna',$data);
        $this->load->view('pengguna/ujian/hasil_ujian');
        
    }
    
    public function sc($paket)
    {
        switch ($paket){
            case 1:
                $hasil = 'A';
                break;
            case 2:
                $hasil = 'B';
                break;
            case 3:
                $hasil = 'C';
                break;
            case 4:
                $hasil = 'D';
                break;
        }
        return $hasil;
    }

    
    public function saintek()
    {
        $this->cek_login();
        //$paket1 = $this->uri->segment(3);
        //$paket = $this->sc($paket1);
        $data['judul'] = 'Soal SAINTEK';
        $data['jurusan'] = 1;
        $data['tambah_soal'] = base_url().'soal/tambah_soal/saintek';
        $data['ubah_soal'] = base_url().'soal/ubah_soal/saintek';
        $data['hapus_soal'] = base_url().'soal/hapus_soal/saintek';
        $data['pelajaran'] = array('MATEMATIKA IPA','KIMIA','FISIKA','BIOLOGI');
        $data['paket_a'] = $this->model_soal->soal($jurusan='1',$paket='A');
        $data['paket_b'] = $this->model_soal->soal($jurusan='1',$paket='B');
        $data['paket_c'] = $this->model_soal->soal($jurusan='1',$paket='C');
        $data['paket_d'] = $this->model_soal->soal($jurusan='1',$paket='D');
        $this->load->view('soal/header_soal',$data);
        $this->load->view('admin/soal/soal',$data);
    }
    
    public function soshum()
    {
        $this->cek_login();
        $data['judul'] = 'Soal Soshum';
        $data['jurusan'] = 2;
        $data['tambah_soal'] = base_url().'soal/tambah_soal/soshum';
        $data['ubah_soal'] = base_url().'soal/ubah_soal/soshum';
        $data['hapus_soal'] = base_url().'soal/hapus_soal/soshum';
        $data['pelajaran'] = array('SEJARAH','GEOGRAFI','EKONOMI','SOSIOLOGI');
        $data['paket_a'] = $this->model_soal->soal($jurusan='2',$paket='A');
        $data['paket_b'] = $this->model_soal->soal($jurusan='2',$paket='B');
        $data['paket_c'] = $this->model_soal->soal($jurusan='2',$paket='C');
        $data['paket_d'] = $this->model_soal->soal($jurusan='2',$paket='D');
        $this->load->view('soal/header_soal',$data);
        $this->load->view('admin/soal/soal',$data);
    }
    
    public function tkpa()
    {
        $this->cek_login();
        $data['judul'] = 'Soal TKPA';
        $data['jurusan'] = 4;
        $data['tambah_soal'] = base_url().'soal/tambah_soal/tkpa';
        $data['ubah_soal'] = base_url().'soal/ubah_soal/tkpa';
        $data['hapus_soal'] = base_url().'soal/hapus_soal/tkpa';
        $data['paket_a'] = $this->model_soal->soal($jurusan='4',$paket='A');
        $data['paket_b'] = $this->model_soal->soal($jurusan='4',$paket='B');
        $data['paket_c'] = $this->model_soal->soal($jurusan='4',$paket='C');
        $data['paket_d'] = $this->model_soal->soal($jurusan='4',$paket='D');
        $this->load->view('soal/header_soal',$data);
        $this->load->view('admin/soal/soal',$data);
    }
    
    public function tambah_soal()
    {
        //die(print_r($this->input->post('jurusan')));
        for($i=0;$i<=6;$i++){
            $hasil[$i] = $this->model_soal->foto($i);
        }
        
        $data = array(
            'kode_jurusan' => $this->input->post('jurusan'),
            'paket'        => $this->input->post('paket'),
            'pelajaran'    => $this->input->post('pelajaran'),
            'soal'         => $hasil[0],
            'opsi_a'       => $hasil[1],
            'opsi_b'       => $hasil[2],
            'opsi_c'       => $hasil[3],
            'opsi_d'       => $hasil[4],
            'opsi_e'       => $hasil[5],
            'jawaban'      => $this->input->post('jawaban'),
            'pembahasan'   => $hasil[6]
        );
        $this->model_soal->tambah_soal($data);
        $this->session->set_flashdata('info','Soal Berhasil Ditambah !');
        if($this->uri->segment(3)=="saintek"){
            redirect('admin/saintek');
        }else if($this->uri->segment(3)=="soshum"){
            redirect('admin/soshum');  
        }else if($this->uri->segment(3)=="tkpa"){
            redirect('admin/tkpa');
        }
        
    }
    
    public function ubah_soal()
    {
        for($i=0;$i<=6;$i++){
             if(!empty($_FILES['foto_'.$i]['name'])){
                unlink('./assets/img/soal/'.$this->input->post("edit_foto".$i));
                $hasil[$i] = $this->model_soal->foto($i);
             }else if(!empty($this->input->post("edit_foto".$i))){
                $hasil[$i] = $this->input->post("edit_foto".$i);
             }else{
                $hasil[$i] = $this->input->post('data'.$i);
             }  
        }
        
        $id= $this->input->post('id');
        $data = array(
            'pelajaran'    => $this->input->post('pelajaran'),
            'soal'         => $hasil[0],
            'opsi_a'       => $hasil[1],
            'opsi_b'       => $hasil[2],
            'opsi_c'       => $hasil[3],
            'opsi_d'       => $hasil[4],
            'opsi_e'       => $hasil[5],
            'jawaban'      => $this->input->post('jawaban'),
            'pembahasan'   => $hasil[6]
        );
        $this->model_soal->ubah_soal($id,$data);
        $this->session->set_flashdata('info','Ubah Soal Berhasil !');
        if($this->uri->segment(3)=="saintek"){
            redirect('admin/saintek');
        }else if($this->uri->segment(3)=="soshum"){
            redirect('admin/soshum');  
        }else if($this->uri->segment(3)=="tkpa"){
            redirect('admin/tkpa');
        }
    }
    

    public function hapus_soal()
    {
        $id = $this->input->post('id');
        for($i=0;$i<=6;$i++){
            if(!empty($this->input->post('hapus_foto'.$i))){
                unlink('./assets/img/soal/'.$this->input->post('hapus_foto'.$i));
            }
        }
        $this->model_soal->hapus_soal($id);
        if($this->uri->segment(3)=="saintek"){
            redirect('admin/saintek');
        }else if($this->uri->segment(3)=="soshum"){
            redirect('admin/soshum');  
        }else if($this->uri->segment(3)=="tkpa"){
            redirect('admin/tkpa');
        }
    }
    
    public function lihat_soal()
    {
        $this->cek_pengguna();
        $jurusan = $this->uri->segment(3);
        $paket1 = '1';
        $paket = $this->sc($paket1);
        $data["jurusan"] = $jurusan;
        $data["paket"] = $paket;
        if($jurusan == '1'){
            $data["record"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='MATEMATIKA IPA');
            $data["record1"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='FISIKA');
            $data["record2"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='KIMIA');
            $data["record3"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='BIOLOGI');
            $this->load->view('soal',$data);
        }else if($jurusan == '2'){
            $data["record"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='SEJARAH');
            $data["record1"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='GEOGRAFI');
            $data["record2"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='EKONOMI');
            $data["record3"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='SOSIOLOGI');
            $this->load->view('soal',$data);
        }else{
            $data["record"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='LOGIKA PREPOSISI');
            $data["record1"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='LOGIKA ANALITIK');
            $data["record2"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='VERBAL');
            $data["record3"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='ARITMATIKA');
            $data["record4"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='POLA BARISAN');
            $data["record5"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='POLA GAMBAR');
            $data["record6"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='MATEMATIKA DASAR');
            $data["record7"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='BAHASA INDONESIA');
            $data["record8"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='BAHASA INGGRIS');
            $this->load->view('soaltkpa',$data);
        }
    }
    
    public function ujian()
    {
        $this->cek_pengguna();
        $jurusan = $this->uri->segment(3);
        $paket1 = $this->uri->segment(4);
        $paket = $this->sc($paket1);
        $this->cek_ujian($jurusan,$paket);
        $data["jurusan"] = $jurusan;
        $data["paket"] = $paket;
        if($jurusan == '1'){
            $data["record"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='MATEMATIKA IPA');
            $data["record1"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='FISIKA');
            $data["record2"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='KIMIA');
            $data["record3"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='BIOLOGI');
            $this->load->view('soal',$data);
        }else if($jurusan == '2'){
            $data["record"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='SEJARAH');
            $data["record1"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='GEOGRAFI');
            $data["record2"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='EKONOMI');
            $data["record3"] = $this->model_soal->tampil_soal($jurusan,$paket,$pelajaran='SOSIOLOGI');
            $this->load->view('soal',$data);
        }else if($jurusan == '4'){
            $data["record"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='LOGIKA PREPOSISI');
            $data["record1"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='LOGIKA ANALITIK');
            $data["record2"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='VERBAL');
            $data["record3"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='ARITMATIKA');
            $data["record4"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='POLA BARISAN');
            $data["record5"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='POLA GAMBAR');
            $data["record6"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='MATEMATIKA DASAR');
            $data["record7"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='BAHASA INDONESIA');
            $data["record8"] = $this->model_soal->tampil_tkpa($jurusan,$paket,$pelajaran='BAHASA INGGRIS');
            $this->load->view('soaltkpa',$data);
        }
    }
}
