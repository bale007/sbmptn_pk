<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_soal extends CI_Model {
    
    public function tampil_soal($jurusan,$paket,$pelajaran){
        return $this->db->query("SELECT * FROM soal WHERE kode_jurusan = '$jurusan' AND paket = '$paket' AND pelajaran = '$pelajaran' ORDER BY RAND() LIMIT 15");
    }
    
    public function tampil_tkpa($jurusan,$paket,$pelajaran){
        return $this->db->query("SELECT * FROM soal WHERE kode_jurusan = '$jurusan' AND paket = '$paket' AND pelajaran = '$pelajaran' ORDER BY RAND()");
    }
    
    public function data_soal($id){
        return $this->db->get_where('soal',array('id_soal'=>$id));
    }
    
    public function soal($jurusan,$paket)
    {
        return $this->db->get_where('soal',array('kode_jurusan'=>$jurusan,'paket'=>$paket));
    }
    
    public function tambah_soal($data)
    {
        $this->db->insert('soal',$data);
    }
    
    public function ubah_soal($id,$data)
    {
        $this->db->where('id_soal',$id);
        $this->db->update('soal',$data);
    }
    
    public function hapus_soal($id)
    {
        $this->db->delete('soal',array('id_soal'=>$id));
    }
    
    public function foto($i)
    {
        
        $config['upload_path'] = './assets/img/soal/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
        $this->load->library('upload');
        $this->upload->initialize($config);
        if(!empty($_FILES['foto_'.$i]['name'])){
            if ($this->upload->do_upload('foto_'.$i)){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/soal'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= 'assets/img/soal/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                return $gbr['file_name'];
                //$judul=$this->input->post('xjudul');
                //$this->model_pengguna->update_profil($gambar);
                //echo "Image berhasil diupload";
            }
//            else{
//                 echo $this->upload->display_errors();
//            }
        }else{
            return $this->input->post('data'.$i);
        }
        
    }
    
    public function aktifasi($jurusan)
    {
        return $this->db->get_where('aktifasi_soal',array('jurusan'=>$jurusan))->result();
    }
    
    public function gratis($jurusan)
    {
        return $this->db->get_where('aktifasi_soal',array('jurusan'=>$jurusan,'paket'=>'A'))->result();
    }
    
    public function bayar($jurusan,$paket)
    {
        return $this->db->query("SELECT * FROM aktifasi_soal WHERE jurusan = '$jurusan' &&  paket = '$paket'")->result();
    }
    
    public function ubah_aktifasi($id,$aktifasi)
    {
        $this->db->where('id',$id);
        $this->db->update('aktifasi_soal',array('status_soal'=>$aktifasi));
    }
    
    public function ikut_ujian($data){
        return $this->db->get_where('ikut_ujian',array('id_akun'=> $this->session->userdata('id_akun'),'jurusan'=>$data['jurusan'],'paket'=>$data['paket']));
    }
    
    public function cek_ikut_ujian($jurusan,$paket){
        return $this->db->get_where('ikut_ujian',array('id_akun'=> $this->session->userdata('id_akun'),'jurusan'=>$jurusan,'paket'=>$paket));
    }
}
