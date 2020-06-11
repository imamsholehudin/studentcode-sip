<?php
class About extends Controller
{
	public function index()
	{

		//$data['nama'] = $nama;
		//$data['pekerjaan'] = $pekerjaan;
		//$data['umur'] = $umur;
		$data['judul'] = "Halaman About";
		$this->view('templates/header', $data);
		$this->view('about/index');
		$this->view('templates/footer');
	}
}