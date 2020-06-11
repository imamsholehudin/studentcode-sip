<?php
class TM1 extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Taruna Melati 1";
        $data['tm1pc'] = $this->model('TM1_model')->getAllTM1PC();
        $data['tm1pr'] = $this->model('TM1_model')->getAllTM1PR();
        $this->view('templates/header', $data);
        $this->view('tm1/index', $data);
        $this->view('templates/footer');
    }
}