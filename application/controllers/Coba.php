<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_soal');
    }
    
    public function index()
    {
	$data["jurusan"] = 1;
	$data["paket"] = "A";
        $data["record"]  = $this->model_soal->tampil_soal($jurusan='2',$paket='B',$pelajaran='EKONOMI');
	$data["record1"] = $this->model_soal->tampil_soal($jurusan='2',$paket='B',$pelajaran='SEJARAH');
	$data["record2"] = $this->model_soal->tampil_soal($jurusan='2',$paket='B',$pelajaran='SOSIOLOGI');
	$data["record3"] = $this->model_soal->tampil_soal($jurusan='2',$paket='B',$pelajaran='GEOGRAFI');
        $this->load->view('soal',$data);
    }
    
    public function submit()
    {
        $benar  = 0;
        $salah  = 0;
        $kosong = 0;
        for($i=1;$i<=60;$i++){
            if(empty($this->input->post('jawaban'.$i))){
                $kosong++;
            }else{
                $hasil = $this->model_soal->data_soal($this->input->post('soal'.$i))->row_array();
                if ($this->input->post('jawaban'.$i)==$hasil['jawaban']){
                    $benar++;
                }else{
                    $salah++;
                }
            }
        }
        $skor = (($benar*4)-$salah)*100/(4*60);
        $this->hasil_ujian($skor,$benar,$salah,$kosong);
        //redirect();
    }
    
    public function hasil_ujian($skor,$benar,$salah,$kosong)
    {
        $data['judul']  = 'Hasil Ujian';
        $data['skor']   = $skor;
        $data['benar']  = $benar;
        $data['salah']  = $salah;
        $data['kosong'] = $kosong;
        $this->load->view('pengguna/header_pengguna',$data);
        $this->load->view('pengguna/ujian/hasil_ujian');
        
    }

    
}
