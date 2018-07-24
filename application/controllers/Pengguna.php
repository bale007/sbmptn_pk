<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model(array('model_login','model_pengguna','model_soal'));
        $this->load->library('upload');
        //chek_session();
    }
    
    
    public function cek_login()
    {
        if($this->session->userdata('status_login')!='oke'){
            $this->session->set_flashdata('info','Anda harus login terlebih dahulu !');
            redirect('login');
        }
    }

      
    public function index()
    {
        $this->cek_login();
        //echo $this->session->userdata('nama');
        $data['judul'] = 'Dashboard';
        //$this->load->view('pengguna/header_pengguna',$data);
        $this->load->view('pengguna/dashboard',$data);
    }
    
    public function ikut_ujian()
    {
        $this->cek_login();
        //$data['tkpa'] = $this->model_pengguna->soal_tkpa();
        $jurusan = $this->session->userdata('kode_jurusan');
        if($jurusan=='1'){
            $data['judul']   = 'Saintek';
            $data['ujian']   = 'SAINTEK';
            $data['jurusan'] = 'Tes Kemampuan Dasar Saintek (TKD Saintek)';
            $data['saintek'] =  $this->model_soal->gratis($jurusan='1');
            $data['saintek1'] =  $this->model_soal->bayar($jurusan='1',$paket='B');
            $data['saintek2'] =  $this->model_soal->bayar($jurusan='1',$paket='C');
            $data['tkpa'] =  $this->model_soal->gratis($jurusan='4');
            $data['tkpa1'] =  $this->model_soal->bayar($jurusan='4',$paket='B');
            $hasil = $this->model_soal->cek_ikut_ujian($jurusan='1',$paket='B')->row_array();
            $hasil2 = $this->model_soal->cek_ikut_ujian($jurusan='1',$paket='C')->row_array();
            $hasil3 = $this->model_soal->cek_ikut_ujian($jurusan='4',$paket='B')->row_array();
            $this->session->set_userdata(array('saintek_b'=>$hasil['ikut_ujian'],'saintek_c'=>$hasil2['ikut_ujian'],'tkpa_b'=>$hasil3['ikut_ujian']));
            $this->load->view('pengguna/header_pengguna',$data);
            $this->load->view('pengguna/ujian/saintek',$data);
        }elseif ($jurusan=='2') {
            //$data['saintek'] = $this->model_pengguna->soal_soshum($jurusan);
            $data['judul']  = 'Soshum';
            $data['ujian']  = 'SOSHUM';
            $data['soshum'] =  $this->model_soal->gratis($jurusan='2');
            $data['soshum1'] =  $this->model_soal->bayar($jurusan='2',$paket='B');
            $data['soshum2'] =  $this->model_soal->bayar($jurusan='2',$paket='C');
            $data['tkpa']   =  $this->model_soal->gratis($jurusan='4');
            $data['tkpa1'] =  $this->model_soal->bayar($jurusan='4',$paket='B');
            $hasil = $this->model_soal->cek_ikut_ujian($jurusan='2',$paket='B')->row_array();
            $hasil2 = $this->model_soal->cek_ikut_ujian($jurusan='2',$paket='C')->row_array();  
            $hasil3 = $this->model_soal->cek_ikut_ujian($jurusan='4',$paket='B')->row_array();
            //$data['jurusan'] = 'Tes Kemampuan Dasar SOSHUM (TKD SOSHUM)';
            $this->session->set_userdata(array('soshum_b'=>$hasil['ikut_ujian'],'soshum_c'=>$hasil2['ikut_ujian'],'tkpa_b'=>$hasil3['ikut_ujian']));
            $this->load->view('pengguna/header_pengguna',$data);
            $this->load->view('pengguna/ujian/soshum',$data);
        }else{
            $data['judul']    = 'IPC';
            $data['saintek']  = $this->model_soal->gratis($jurusan='1');
            $data['saintek1'] = $this->model_soal->bayar($jurusan='1',$paket='B');
            $data['saintek2'] = $this->model_soal->bayar($jurusan='1',$paket='C');
            $data['soshum']   = $this->model_soal->gratis($jurusan='2');
            $data['soshum1']  = $this->model_soal->bayar($jurusan='2',$paket='B');
            $data['soshum2']  = $this->model_soal->bayar($jurusan='2',$paket='C');
            $data['tkpa']     = $this->model_soal->gratis($jurusan='4');
            $data['tkpa1']    = $this->model_soal->bayar($jurusan='4',$paket='B');
            $hasil            = $this->model_soal->cek_ikut_ujian($jurusan='1',$paket='B')->row_array();
            $hasil1           = $this->model_soal->cek_ikut_ujian($jurusan='1',$paket='C')->row_array();
            $hasil2           = $this->model_soal->cek_ikut_ujian($jurusan='2',$paket='B')->row_array();
            $hasil3           = $this->model_soal->cek_ikut_ujian($jurusan='2',$paket='C')->row_array();
            $hasil4           = $this->model_soal->cek_ikut_ujian($jurusan='4',$paket='B')->row_array();
            $this->session->set_userdata(array(
                'saintek_b'=>$hasil['ikut_ujian'],
                'saintek_c'=>$hasil1['ikut_ujian'],
                'soshum_b' =>$hasil2['ikut_ujian'],
                'soshum_c' =>$hasil3['ikut_ujian'],
                'tkpa_b'   =>$hasil4['ikut_ujian']
                    ));
            //$data['saintek'] = $this->model_pengguna->soal_saintek($jurusan='1');
            //$data['saintek'] = $this->model_pengguna->soal_soshum($jurusan='2');
            $this->load->view('pengguna/header_pengguna',$data);
            $this->load->view('pengguna/ujian/ipc',$data);
        }
        
    }
    
    public function hasil_ujian() 
    {
        $this->cek_login();
        //$data['tkpa'] = $this->model_pengguna->soal_tkpa();
        $jurusan = $this->session->userdata('kode_jurusan');
        if($jurusan=='1'){
            $data['judul']   = 'Saintek';
            $data['saintek'] = $this->model_pengguna->hasil_ujian($jurusan='1');
            $data['tkpa']    = $this->model_pengguna->hasil_ujian($jurusan='4');
            $data['jurusan'] = 'Tes Kemampuan Dasar Saintek (TKD Saintek)';
            $this->load->view('pengguna/header_pengguna',$data);
            $this->load->view('pengguna/ujian/hasil_saintek',$data);
        }elseif ($jurusan=='2') {
            $data['judul'] = 'Soshum';
            $data['ujian'] = 'SOSHUM';
            $data['soshum']  = $this->model_pengguna->hasil_ujian($jurusan='2');
            $data['tkpa']    = $this->model_pengguna->hasil_ujian($jurusan='4');
            $data['jurusan'] = 'Tes Kemampuan Dasar SOSHUM (TKD SOSHUM)';
            $this->load->view('pengguna/header_pengguna',$data);
            $this->load->view('pengguna/ujian/hasil_soshum',$data);
        }else{
            $data['judul']= 'IPC';
            $data['saintek'] = $this->model_pengguna->hasil_ujian($jurusan='1');
            $data['soshum']  = $this->model_pengguna->hasil_ujian($jurusan='2');
            $data['tkpa']    = $this->model_pengguna->hasil_ujian($jurusan='4');
            $this->load->view('pengguna/header_pengguna',$data);
            $this->load->view('pengguna/ujian/hasil_ipc',$data);
        }
    }
    
    public function profil()
    {
        $this->cek_login();
        $id = $this->session->userdata("id_akun");
        $data['judul'] = 'Profil';
        $data['record'] = $this->model_login->data_akun($id);
        $this->load->view('pengguna/header_pengguna',$data);
        $this->load->view('pengguna/profil',$data);
    }
    
    public function cekpassword()
    {
        $password = $this->input->post('password');
        $id = $this->session->userdata('id_akun');
        //echo json_encode($email);
        $hasil = $this->model_login->data_akun($id)->row_array();
        if(MD5($password) == $hasil['password']){
            echo json_encode(array('status'=>TRUE));
        }else{
            echo json_encode(array('status'=> FALSE));
        }
    }
    
    public function ubahpassword()
    {
        $password = $this->input->post('password2');
        $this->model_pengguna->ubahpassword($password);
        echo json_encode(array('status'=>TRUE));
    }
    
      
    public function ubahprofil(){
        
        $config['upload_path'] = './assets/img/profil/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
        $this->upload->initialize($config);
        if(!empty($_FILES['foto']['name'])){
            if ($this->upload->do_upload('foto')){
                unlink('./assets/img/profil/'.$this->session->userdata("foto"));
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/profil'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= 'assets/img/profil/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar=$gbr['file_name'];
                //$judul=$this->input->post('xjudul');
                //$this->model_pengguna->update_profil($gambar);
                //echo "Image berhasil diupload";
            }
        }else{
            $gambar = $this->session->userdata('foto');
        }
        $data = array(
            'nama'    => $this->input->post('nama'),
            'email'   => $this->input->post('email'),
            'sekolah' => $this->input->post('sekolah'),
            'alamat'  => $this->input->post('alamat'),
            'foto'    => $gambar
        );
        $this->model_pengguna->update_profil($data);
        if($data['email'] != $this->session->userdata('email')){
            $this->model_pengguna->update_status();
            $this->email($data['email']);
        }else{
            $this->session->set_userdata(array('foto'=>$gambar));
            $this->session->set_flashdata('sukses_update','Ubah Profil berhasil !');
            redirect('pengguna/profil');
        }
    }
    
    public function email($email)
    {
        $this->load->library('email');
        $config = array();
        $config['charset'] = 'utf-8';
        $config['useragent'] = 'Codeigniter';
        $config['protocol']= "smtp";
        $config['mailtype']= "html";
        $config['smtp_host']= "ssl://mail.kampusgo.xyz";//pengaturan smtp
        $config['smtp_port']= "465";
        $config['smtp_timeout']= "400";
        $config['smtp_user']= "admin@kampusgo.xyz"; // isi dengan email kamu
        $config['smtp_pass']= "[p~nGRo@uQJ_"; // isi dengan password kamu
        $config['crlf']="\r\n"; 
        $config['newline']="\r\n"; 
        $config['wordwrap'] = TRUE;
        //memanggil library email dan set konfigurasi untuk pengiriman email
        
        $this->email->initialize($config);
        //konfigurasi pengiriman
        $this->email->from($config['smtp_user']);
        $this->email->to($email);
		$this->email->subject("Verifikasi Akun");
		$this->email->message("Terima kasih telah melakukan registrasi, silahkan kilik tautaun berikut untuk mengaktfikan akun anda </br></br>".site_url('login/verification/'.base64_encode($email)));
        if($this->email->send())
        {
            $this->session->set_flashdata('info','Email telah dikirm kepada '.$email.'. Silahkan cek email kamu');
            redirect('login');
        }
        else
        {
           $this->session->set_flashdata('info','Terjadi kesalahan, segera hubungi admin');
           redirect('login');
        }
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
    
    public function detail_hasil()
    {
        $jurusan = $this->uri->segment(3);
        $paket1  = $this->uri->segment(4);
        $paket = $this->sc($paket1);
        $data['judul'] = 'Detail Hasil Ujian';
        $data['record'] = $this->model_pengguna->detail_hasil($jurusan,$paket);
        $this->load->view('pengguna/header_pengguna',$data);
        $this->load->view('pengguna/detail_hasil',$data);
    }
}
