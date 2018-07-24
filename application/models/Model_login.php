<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
    
    public function cek_akun($email, $password)
    {
        return $this->db->get_where('akun',array('email'=>$email,'password'=> md5($password)));
        //return $this->db->query("SELECT * FROM soal ORDER BY RAND()");
    }
    
    public function register($data)
    {
        return $this->db->insert('akun',$data);
    }
    
    public function aktifasi_akun($email)
    {
        $this->db->where('email',$email);
        $this->db->update('akun',array('status_aktif'=>'1'));
    }
    
    public function data_akun($id)
    {
        return $this->db->get_where('akun',array('id_akun'=>$id));
    }
	
	public function cek_email($email)
    {
        return $this->db->get_where('akun',array('email'=>$email));
    }
    
    public function update_pass($email,$pass)
    {
        $this->db->where('email',$email);
        $this->db->update('akun',array('password'=>md5($pass)));
    }
    
    public function cek_admin(){
        return $this->db->get_where('admin',array('password'=>md5($this->input->post('password'))));
    }

    public function lupa_akun($email)
    {
        return $this->db->get_where('akun',array('email'=>$email));
    }
}
