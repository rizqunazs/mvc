<?php

class Form extends Controller {
    public function index() 
    {
        $data['judul'] = 'Form Mahasiswa';
        $this->view('template/header',$data);
        $this->view('form/index',$data);
        $this->view('template/footer',$data);
    }
    public function submit() {
        if ($this->model('Data_model')->tambahData($_POST) > 0 ) {
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: '. BASEURL .'/form');
            exit;
        } else {
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location: '. BASEURL .'/form');
            exit;
        }
    }
}