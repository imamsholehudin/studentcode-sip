<?php
class TM2 extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Taruna Melati 2";
        $data['tm2'] = $this->model('TM2_model')->getAllTM2();
        $this->view('templates/header', $data);
        $this->view('tm2/index', $data);
        $this->view('templates/footer');
    }
}