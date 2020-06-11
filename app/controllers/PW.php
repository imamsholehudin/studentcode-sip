<?php
class PW extends Controller
{
	public function index()
	{
		$data['judul'] = "Data Pimpinan Wilayah";
		$data['pw'] = $this->model('PW_model')->getAllPW();
		$this->view('templates/header', $data);
		$this->view('pw/index', $data);
		$this->view('templates/footer');
	}
	public function tambah()
	{
		$data['judul'] = "Tambah Pimpinan Wilayah";

		$this->view('templates/header', $data);
		$this->view('pw/tambah');
		$this->view('templates/footer');
	}

	public function tambahData()
	{
		//var_dump($_POST);
		//die;
		if ($this->model('PW_model')->tambahDataPW($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/PW');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/PW');
			exit;
		}
	}
}