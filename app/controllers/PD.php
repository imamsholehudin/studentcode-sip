<?php
class PD extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Pimpinan Daerah";
        $data['pd'] = $this->model('PD_model')->getAllPD();
        //$data['pw'] = $this->model('PW_model')->getAllPW();
        $this->view('templates/header', $data);
        $this->view('pd/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Data Pimpinan Daerah";
        //$data['pd'] = $this->model('PD_model')->getAllPD();
        $data['pw'] = $this->model('PW_model')->getAllPW();
        $this->view('templates/header', $data);
        $this->view('pd/tambah', $data);
        $this->view('templates/footer');
    }

    public function tambahData()
    {
        var_dump($_POST);
        // $data['judul'] = "Data Pimpinan Daerah";
        // //$data['pd'] = $this->model('PD_model')->getAllPD();
        // $data['pw'] = $this->model('PW_model')->getAllPW();
        // $this->view('templates/header', $data);
        // $this->view('pd/tambah', $data);
        // $this->view('templates/footer');
    }
}