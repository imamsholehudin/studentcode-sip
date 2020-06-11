<?php
class TM3 extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Taruna Melati 3";
        $data['tm3'] = $this->model('TM3_model')->getAllTM3();
        $this->view('templates/header', $data);
        $this->view('tm3/index', $data);
        $this->view('templates/footer');
    }
}