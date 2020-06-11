<?php
class PC extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Pimpinan Cabang";
        $data['pc'] = $this->model('PC_model')->getAllPC();
        $this->view('templates/header', $data);
        $this->view('pc/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Tambah Data Pimpinan Cabang";
        $data['pd'] = $this->model('PD_model')->getAllPD();
        $this->view('templates/header', $data);
        $this->view('pc/tambah', $data);
        $this->view('templates/footer');
    }

    public function tambahData()
    {
        var_dump($_POST);
    }
}