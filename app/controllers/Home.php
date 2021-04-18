<?php

class Home extends Controller {
    public function index() 
    {
        $data['judul'] = 'Form Hotel';
        $this->view('template/header',$data);
        $this->view('home/index',$data);
        $this->view('template/footer',$data);
    
        
    }
}