<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model(array('model_admin','model_soal'));
        //chek_session();
    }
    
    public function cek_login()
    {
	if(empty($this->session->userdata('status_admin'))){
	     redirect('login/admin');      		
	}    	
    }

    public function index()
    {
	$this->cek_login();
        $data['judul'] = 'Admin Pengen Kuliah';
        $this->load->view('admin/header_admin',$data);
        $this->load->view('admin/dashboard');
    }


    public function akun()
    {
        $this->cek_login();
        $data['judul'] = 'Akun Pengen Kuliah';
        $data['record'] = $this->model_admin->tampil_akun();
        $this->load->view('admin/header_admin',$data);
        $this->load->view('admin/akun',$data);
    }
    
    public function ubah_akun()
    {
        $id = $this->input->post('id');
        $data = array(
            'nama'         => $this->input->post('nama'),
            'alamat'       => $this->input->post('alamat'),
            'sekolah'      => $this->input->post('sekolah'),
            'kode_jurusan' => $this->input->post('jurusan'),
            'status_aktif' => $this->input->post('status_aktif'),
            'status_bayar' => $this->input->post('status_bayar'),
        );
        $this->model_admin->ubah_akun($id,$data);
        redirect('admin/akun');
    }
    
    public function hapus_akun() 
    {
        $id = $this->input->post('id'); 
        $this->model_admin->hapus_akun($id);
        redirect('admin/akun');
    }
    
//    public function soal()
//    {
//        $this->cek_login();
//        $data['judul'] = 'Admin Soal';
//        $data['record'] = $this->model_admin->tampil_akun();
//        $this->load->view('admin/header_admin',$data);
//        $this->load->view('admin/soal',$data);
//    }
    
    public function hasil()
    {
        $this->cek_login();
        $data['record'] = $this->model_admin->tampil_akun();
        $this->load->view('admin/soal',$data);
    }
    
    public function saintek()
    {
        $this->cek_login();
        $data['judul'] = 'Soal Saintek';
        $data['jurusan'] = 1;
        $data['tambah_soal'] = base_url().'soal/tambah_soal/saintek';
        $data['ubah_soal'] = base_url().'soal/ubah_soal/saintek';
        $data['hapus_soal'] = base_url().'soal/hapus_soal/saintek';
        $data['pelajaran'] = array('MATEMATIKA IPA','KIMIA','FISIKA','BIOLOGI');
        $data['paket_a'] = $this->model_soal->soal($jurusan='1',$paket='A');
        $data['paket_b'] = $this->model_soal->soal($jurusan='1',$paket='B');
        $data['paket_c'] = $this->model_soal->soal($jurusan='1',$paket='C');
        $data['paket_d'] = $this->model_soal->soal($jurusan='1',$paket='D');
        $this->load->view('admin/header_admin',$data);
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
        $this->load->view('admin/header_admin',$data);
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
        $data['pelajaran'] = array('LOGIKA PREPOSISI','LOGIKA ANALITIK','VERBAL','ARITMATIKA','POLA BARISAN','POLA GAMBAR','MATEMATIKA DASAR','BAHASA INDONESIA','BAHASA INGGRIS');
        $data['paket_a'] = $this->model_soal->soal($jurusan='4',$paket='A');
        $data['paket_b'] = $this->model_soal->soal($jurusan='4',$paket='B');
        $data['paket_c'] = $this->model_soal->soal($jurusan='4',$paket='C');
        $data['paket_d'] = $this->model_soal->soal($jurusan='4',$paket='D');
        $this->load->view('admin/header_admin',$data);
        $this->load->view('admin/soal/soal',$data);
    }
    
    public function aktifasi_soal()
    {
        if(isset($_POST['submit'])){
            $id = $this->input->post('id');
            $aktifasi = $this->input->post('aktifasi');
            $this->model_soal->ubah_aktifasi($id,$aktifasi);
            redirect('admin/aktifasi_soal');
        }else{
            $this->cek_login();
            $data['judul'] = 'Aktifasi Soal';
            $data['saintek'] =  $this->model_soal->aktifasi($jurusan='1');
            $data['soshum'] =  $this->model_soal->aktifasi($jurusan='2');
            $data['tkpa'] =  $this->model_soal->aktifasi($jurusan='4');
            $this->load->view('admin/header_admin',$data);
            $this->load->view('admin/soal/aktifasi_soal',$data);
        }
        
        //$this->load->view('admin/soal/soal',$data);
    }
    
    public function tambah_soal()
    {   
        
        $data['judul'] = "Tambah Soal";
        //$this->load->view('admin/header_admin',$data);
        $this->load->view('admin/soal/tambah_soal');
    }
    
    public function hasil_ujian()
    {
        $this->cek_login();
        $pelajaran = $this->uri->segment(3);
        if($pelajaran==='saintek'){
            $data['judul'] = 'Hasil Ujian Saintek';
            $jurusan = '1';
        }else if($pelajaran==='soshum'){
            $data['judul'] = 'Hasil Ujian Soshum';
            $jurusan = '2';
        }else if($pelajaran==='tkpa'){
            $data['judul'] = 'Hasil Ujian TKPA';
            $jurusan = '4';
        }
//        echo '<pre>';
//        print_r($this->model_admin->hasil_ujian($jurusan,$paket='A'));
//        echo '</pre>';
        $data['record'] = $this->model_admin->hasil_ujian($jurusan,$paket='A');
        $data['record1'] = $this->model_admin->hasil_ujian($jurusan,$paket='B');
        $data['record2'] = $this->model_admin->hasil_ujian($jurusan,$paket='C');
        $this->load->view('admin/header_admin',$data);
        $this->load->view('admin/hasil_ujian',$data);
    }
}
