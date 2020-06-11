<?php
class PR extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Pimpinan Ranting";
        $data['pr'] = $this->model('PR_model')->getAllPR();
        $this->view('templates/header', $data);
        $this->view('pr/index', $data);
        $this->view('templates/footer');
    }
}