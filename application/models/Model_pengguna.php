<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pengguna extends CI_Model {
    
    public function ubahpassword($password)
    {
        $this->db->where('id_akun', $this->session->userdata('id_akun'));
        $this->db->update('akun',array('password'=>MD5($password)));
    }
    
    public function soal_tkpa()
    {
        return $this->db->get_where('aktifasi_soal',array('kode_jurusan'=>'4'));
    }
    
    public function soal_saintek()
    {
        return $this->db->get_where('aktifasi_soal',array('kode_jurusan'=>'1'));
    }
    
    public function soal_soshum()
    {
        return $this->db->get_where('aktifasi_soal',array('kode_jurusan'=>'2'));
    }
    
    public function update_profil($data)
    {
        $this->db->where('id_akun',$this->session->userdata("id_akun"));
        $this->db->update('akun',$data);
    }
    
    public function update_status()
    {
        //$id = $this->session->userdata('id_akun');
        //$query = "UPDATE akun SET status_aktif = '0' WHERE id_akun = '$id'";
        //return $this->db->query($query);
        $this->db->where('id_akun',$this->session->userdata("id_akun"));
        $this->db->update('akun',array('status_aktif'=>'0'));
    }
    
    public function ubahskor($data)
    {
        $this->db->where('id_akun',$data['id_akun']);
        $this->db->where('jurusan',$data['jurusan']);
        $this->db->where('paket',$data['paket']);
        $this->db->update('hasil_ujian',$data);
    }
    
    public function tambahskor($data)
    {
        $this->db->insert('hasil_ujian',$data);
    }
    
    public function ikut_ujian($data)
    {
        $this->db->insert('ikut_ujian',$data);
    }
    
    public function hasil_ujian($jurusan)
    {
        return $this->db->query("SELECT * FROM hasil_ujian WHERE id_akun = ".$this->session->userdata('id_akun')." AND jurusan = '$jurusan' AND paket='A'")->result();
    }
    
    
    public function tambahdetail($detail){
        $this->db->insert('detail_hasil',$detail);
    }
    
    public function ubahdetail($data,$detail) {
        $this->db->where('id_akun',$data['id_akun']);
        $this->db->where('id_soal',$detail['id_soal']);
        $this->db->update('detail_hasil',$detail);
    }
    
    public function detail_hasil($jurusan,$paket)
    {
        return $this->db->query("SELECT * FROM soal,detail_hasil WHERE detail_hasil.id_akun = ".$this->session->userdata('id_akun')." AND detail_hasil.jurusan = '$jurusan' AND detail_hasil.paket = '$paket' AND detail_hasil.id_soal = soal.id_soal");
        //return $this->db->get_where('detail_hasil',array('id_akun'=> ,'jurusan'=>$jurusan,'paket'=>$paket))->result();
    }
}
