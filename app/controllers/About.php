<?php

class About extends Controller{

    public function index($nama = 'mae', $status= 'punya gilang'){
        $data = [
            'judul' => 'halaman index dari about',
            'nama' => $nama,
          'status' => $status
        ];
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }
    public function page(){
        $data['judul'] = 'halaman page dari about';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer', $data);
    }

}