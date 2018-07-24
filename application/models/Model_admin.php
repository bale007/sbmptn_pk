<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
    
    public function tampil_akun(){
        return $this->db->get('akun');
    }
    
    public function tambah_akun($data){
        $this->db->insert('akun',$data);
    }
    
    public function ubah_akun($id,$data){
        $this->db->where('id_akun',$id);
        $this->db->update('akun',$data); 
    }
    
    public function hapus_akun($id){
        $this->db->delete('akun',array('id_akun'=>$id)); 
    }
    
    public function hasil_ujian($jurusan,$paket)
    {
        return $this->db->query("SELECT * FROM hasil_ujian,akun WHERE hasil_ujian.id_akun = akun.id_akun AND hasil_ujian.jurusan = '$jurusan' AND hasil_ujian.paket = '$paket' ORDER BY hasil_ujian.skor DESC");        
    }
    
}
