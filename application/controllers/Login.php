<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_login');
        //chek_session();
    }
    
    public function cek_login()
    {
        if($this->session->userdata('status_login')!='oke'){
            redirect(base_url());
        }
    }

    public function cek_pengguna()
    {
        if($this->session->userdata('status_login')=='oke'){
            redirect('pengguna');
        }
    }

    
    public function admin_login()
    {
        if($this->session->userdata('status_admin')=='oke'){
            redirect('admin');
        }else if($this->session->userdata('admin_soal')=='oke'){
            redirect('soal');
        }    
    }

    public function index()
    {
        $this->cek_pengguna();
        $this->session->sess_destroy();
        $this->load->view('login/login');
    }
    
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $hasil = $this->model_login->cek_akun($email, $password);
        if($hasil->num_rows()>0){
            $status=$hasil->row_array();
	    $status['status_login']='oke';
            if($status['status_aktif'] <> '1'){
                echo json_encode(array('status'=>'belum_aktif'));
            }else{
                $this->session->set_userdata($status);
                //echo json_encode($this->session->userdata('nama'));
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
        $hasil = $this->model_login->cek_email($email);
        if($hasil->num_rows()>0){
            echo json_encode(array('status'=>'peringatan'));
            //echo 'Email sudah ada !';
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
	$this->session->set_flashdata('info','Akun kamu telah aktif. Silahkan login');
        redirect('login');
    }
    
    public function reset_password()
    {
        $email = $this->input->post('emailsignup');
        $hasil = $this->model_login->lupa_akun($email);
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
        $config['smtp_host']= "ssl://mail.kampusgo.xyz";
        $config['smtp_port']= "465";
        $config['smtp_timeout']= "400";
        $config['smtp_user']= "admin@kampusgo.xyz";
        $config['smtp_pass']= "[p~nGRo@uQJ_";
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
            $this->email->message('Terima kasih telah melakukan registrasi, silahkan kilik tautaun berikut untuk mengaktfikan akun anda <br/><br/>'
                    .site_url('login/verification/'.base64_encode($email)).
                          '<br><br>
                    Selanjutnya, lakukan pembayaran untk bisa mengakses ujian SBMPTN pada tanggal .... nanti.<br/>                    
                    Tata caranya adalah<br>
                    1. Transfer ke BRI 099101013535530 A.n Opti Legi Barahti sebesar 20 ribu jika kamu membayar tanggal 3-10 april, 25 rb jika membayar di tanggal 11-15 april, dan 30 rb jika membayat di tanggal 16-20 april (Nominal harus sesuai tanggalnya, jika tidak, tidak akan diproses)<br>
                    2. Kirim bukti transfer ke tolsbmptnpengenkuliah@gmail.com. Dengan Judul "BUKTI TOL<br/>"
                    3. Jangan lupajg sertakan format<br/> 
                       Nama  : (yg terdaftar di akun tol)<br/>
                       Prodi : (Saintek/soshum/campuran)<br/>
                    4. Tunggu email balasan dari kami<br/>
                    5. Dan akunmu siap untuk dipakai mengerjakan try Out simulasi naupun try out aslinya di tanggal 22-22 April 2018');
        }
        else if($status=="reset")
        {
            $this->email->subject("Reset Password");
            $this->email->message("Silahkan klik tautan berikut untuk merubah password akun anda <br><br>".site_url('login/reset/'.base64_encode($email)));
        }
        
        if($this->email->send())
        {
            echo json_encode(array('status'=>'sukses'));
            //echo 'Email telah dikirm kepada '.$email.'. Silahkan cek email kamu';
        }
        else
        {
           echo json_encode(array('status'=>'error'));
           //echo "Berhasil melakukan registrasi, namu gagal mengirim verifikasi email<br>";
           //echo "Segera hubungi admin";
           //echo show_error($this->email->print_debugger());
        }
    }
    
    public function kirimemail()
    {
		$email='iqbal.ramadhani55@gmail.com';
		$status='daftar';
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
        if($status=="daftar")
        {
            $this->email->subject("Verifikasi Akun");
            $this->email->message('Terima kasih telah melakukan registrasi, silahkan kilik tautaun berikut untuk mengaktfikan akun anda <br><br>
                    <h4>'.site_url('login/verification/'.base64_encode($email)).'</h4>
                          <br/><br/>
                    Pendaftaran akun TOL SBMPTN kamu sudah berhasil ! Selanjutnya, lakukan pembayaran untk bisa mengakses ujian SBMPTN pada tanggal .... nanti.<br>                    
                    Tata caranya adalah<br/>
                    1. Transfer ke BRI 099101013535530 A.n Opti Legi Barahti sebesar 20 ribu jika kamu membayar tanggal 3-10 april, 25 rb jika membayar di tanggal 11-15 april, dan 30 rb jika membayat di tanggal 16-20 april (Nominal harus sesuai tanggalnya, jika tidak, tidak akan diproses)<br/>
                    2. Kirim bukti transfer ke tolsbmptnpengenkuliah@gmail.com. Dengan Judul "BUKTI TOL"<br/>
                    3. Jangan lupajg sertakan format<br/> 
                       Nama  : (yg terdaftar di akun tol)<br/>
                       Prodi : (Saintek/soshum/campuran)<br/>
                    4. Tunggu email balasan dari kami<br/>
                    4. Dan akunmu siap untuk dipakai mengerjakan try Out simulasi naupun try out aslinya di tanggal 22-22');
        }
        else if($status=="reset")
        {
            $this->email->subject("Reset Password");
            $this->email->message("Silahkan kilik tautaun berikut untuk merubah password akun anda </br></br>".site_url('login/reset/'.base64_encode($email)));
        }
        if($this->email->send())
        {
            //echo json_encode(array('status'=>'sukses'));
            echo 'Email telah dikirm kepada '.$email.'. Silahkan cek email kamu';
        }
        else
        {
           //echo json_encode(array('status'=>'error'));
           //echo "Berhasil melakukan registrasi, namu gagal mengirim verifikasi email<br>";
           //echo "Segera hubungi admin";
           echo show_error($this->email->print_debugger());
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
        $this->admin_login();
        if(isset($_POST['submit'])){
            $hasil = $this->model_login->cek_admin();
            if($hasil->num_rows()>0){
                $this->cek_admin($hasil);	
            }else{
                $this->session->set_flashdata('info','Username atau password salah !');
                redirect('login/admin');
            }
        }else{
            $this->load->view('login/admin');
        }   
    }
    
    public function cek_admin($hasil)
    {
        $data = $hasil->row_array();
        if($data['tipe']=="ADMIN"){
            $this->session->set_userdata(array('status_admin'=>'oke'));
            redirect('admin');
        }else if($data['tipe']=="SOAL"){
            $this->session->set_userdata(array('admin_soal'=>'oke'));
            redirect('soal');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
