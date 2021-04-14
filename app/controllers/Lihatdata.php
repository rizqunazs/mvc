<?php

class Lihatdata extends Controller {
    public function index() {
        $data['judul'] = 'Lihat Data';
        $data['mhs'] = $this->model('Data_Model')->getAllMahasiswa();
        $this->view('template/header',$data);
        $this->view('lihatdata/index',$data);
        $this->view('template/footer');
    }
    public function detail($id) {
        $data ['judul'] = 'Detail Mahasiswa';
        $data ['mhs'] = $this->model('Data_Model')->getMahasiswaById($id);
        $this->view('template/header',$data);
        $this->view('lihatdata/detail',$data);
        $this->view('template/footer');
    }

    public function hapus($id) {
        if ($this->model('Data_model')-> hapusData($id) > 0 ) {
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location: '. BASEURL .'/lihatdata');
            exit;
        } else {
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: '. BASEURL .'/lihatdata');
            exit;
        }
    }

    public function ubah($id) {
        $data ['judul'] = 'Ubah Data';
        $data ['mhs'] = $this->model('Data_Model')->getMahasiswaById($id);
        $this->view('template/header',$data);
        $this->view('lihatdata/ubah',$data);
        $this->view('template/footer');
    }

    public function update() {
        if ($this->model('Data_model')-> ubahData($_POST) > 0 ) {
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location: '. BASEURL .'/lihatdata');
            exit;
        } else {
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: '. BASEURL .'/lihatdata');
            exit;
        }
    }

}
