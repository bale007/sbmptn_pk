<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_login');
        //chek_session();
    }
    
    public function index()
    {
        $this->load->view('login/login');
    }
    
    public function login()
    {
        $hasil = $this->model_login->cek_akun();
        if($hasil->num_rows()>0){
            foreach($hasil->result() as $h){
                $status = $h->status_aktif;
            }
            if($status <> 1){
                echo json_encode(array('status'=>'belum_aktif'));
            }else{
                echo json_encode(array('status'=>'aktif'));
            }
        }else{
            echo json_encode(array('status'=>'error'));
        }
        //echo $peringatan;
    }
    
    public function register()
    {
        $email = $this->input->post('email');
        $hasil = $this->model_login->data_akun($email);
        if($hasil->num_rows()>0){
            //echo json_encode(array('status'=>'peringatan'));
            echo 'Email sudah ada !';
        }else{
            $data = array(
                'id_akun'      => date('dmYHis'),
                'nama'         => $this->input->post('nama'),
                'alamat'       => $this->input->post('alamat'),
                'sekolah'      => $this->input->post('sekolah'),
                'email'        => $email,
                'password'     => md5($this->input->post('password1')),
                'kode_jurusan' => $this->input->post('jurusan')
            );
            $this->model_login->register($data);
            $status = "daftar";
            $this->email($email,$status);
        }
    }
    
    public function verification()
    {
        $email =  base64_decode($this->uri->segment(3));
        $this->model_login->aktifasi_akun($email);
        redirect('login');
    }
    
    public function reset_password()
    {
        $email = $this->input->post('emailsignup');
        $hasil = $this->model_login->data_akun($email);
        if($hasil->num_rows()>0){
            $status = "reset";
            $this->email($email,$status);
        }else{
            echo json_encode(array('status'=>'gagal'));
        }
    }
    
    public function reset() 
    {
        $email['email'] = base64_decode($this->uri->segment(3));
        $this->load->view('login/ResetPassword',$email);
    }
    
    public function email($email,$status)
    {
        $this->load->library('email');
        $config = array();
        $config['charset'] = 'utf-8';
        $config['useragent'] = 'Codeigniter';
        $config['protocol']= "smtp";
        $config['mailtype']= "html";
        $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
        $config['smtp_port']= "465";
        $config['smtp_timeout']= "400";
        $config['smtp_user']= "iqbal.ramadhani55@gmail.com"; // isi dengan email kamu
        $config['smtp_pass']= "sepedah123"; // isi dengan password kamu
        $config['crlf']="\r\n"; 
        $config['newline']="\r\n"; 
        $config['wordwrap'] = TRUE;
        //memanggil library email dan set konfigurasi untuk pengiriman email
        
        $this->email->initialize($config);
        //konfigurasi pengiriman
        $this->email->from($config['smtp_user']);
        $this->email->to($email);
        if($status=="daftar")
        {
            $this->email->subject("Verifikasi Akun");
            $this->email->message("Terima kasih telah melakukan registrasi, silahkan kilik tautaun berikut untuk mengaktfikan akun anda </br></br>"
                    .site_url('login/verification/'.base64_encode($email)));
        }
        elseif($status=="reset")
        {
            $this->email->subject("Reset Password");
            $this->email->message("Silahkan kilik tautaun berikut untuk merubah password akun anda </br></br>"
                    .site_url('login/reset/'.base64_encode($email)));
        }
        if($this->email->send())
        {
            //echo json_encode(array('status'=>'sukses'));
            echo 'Email telah dikirm kepada '.$email.'. Silahkan cek email kamu';
        }
        else
        {
           echo json_encode(array('status'=>'error'));
           //echo "Berhasil melakukan registrasi, namu gagal mengirim verifikasi email<br>";
           //echo "Segera hubungi admin";
           show_error($this->email->print_debugger());
        }
    }
    
    public function simpan_pass()
    {
        $email = $this->input->post('email');
        $pass  = $this->input->post('password2');
        $this->model_login->update_pass($email,$pass);
        //echo json_encode($hasil);
        redirect('login');
    }
    
    public function admin()
    {   
        if(isset($_POST['submit'])){
            $hasil = $this->model_login->cek_admin();
            if($hasil->num_rows()>0){
                redirect('admin');
            }else{
                $this->session->set_flashdata('info','Usernam atau password salah !');
                redirect('login/admin');
            }
        }else{
            $this->load->view('login/admin');
        }
        
    }
}
