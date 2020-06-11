<?php 
	class Mahasiswa extends Controller{
		public function index(){
			$data['judul']= "Halaman Mahasiswa";
			$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
			//$data['nama'] = $this->model('User_model')->getUser();
			$this->view('templates/header',$data);
			$this->view('mahasiswa/index',$data);
			$this->view('templates/footer');
		}

		public function detail($id){
			$data['judul']= "Detail Mahasiswa";
			$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
			//$data['nama'] = $this->model('User_model')->getUser();
			$this->view('templates/header',$data);
			$this->view('mahasiswa/detail',$data);
			$this->view('templates/footer');
		}

		public function tambah(){
			if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
				Flasher::setFlash('berhasil','ditambahkan','success');
				header('Location: '.BASEURL.'/Mahasiswa');
				exit;
			}else{
				Flasher::setFlash('gagal','ditambahkan','danger');
				header('Location: '.BASEURL.'/Mahasiswa');
				exit;
			}
		}

		public function hapus($id){
			if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
				Flasher::setFlash('berhasil','didihapus','success');
				header('Location: '.BASEURL.'/Mahasiswa');
				exit;
			}else{
				Flasher::setFlash('gagal','dihapus','danger');
				header('Location: '.BASEURL.'/Mahasiswa');
				exit;
			}
		}

		public function ubah()
    {
        if( $this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function getubah(){
    	echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }
}
