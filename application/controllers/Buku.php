<?php
 // write your name and student id here
class Buku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buku_model');
		 $this->load->helper('url');
		//load model "Buku_model"
		 $this->load->library('form_validation');
		//load library form validation

	}


	public function index()
	{

		$data['judul'] = 'Data Buku';
		$data['buku'] = $this->Buku_model->getAllBuku()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('buku/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Buku';

		$this->form_validation->set_rules('kode','Kode','required');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('penulis','penulis','required');
		$this->form_validation->set_rules('pengarang','Pengarang','required');
		$this->form_validation->set_rules('tahun','Tahun','required');
		
		//from library form_validation, set rules for kode, judul, penulis, pengarang, tahun = required
		if($this->form_validation->run() != false){
		echo "Form validation oke";
		}
		//conditon in form_validation, if user input form = true,
		$this->Buku_model->tambahDataBuku();
		//call method "tambahDataBuku" in Buku_model
		$this->session->flashdata('added success');
		//use flashdata to to show alert "added success"
		
		//back to controller buku
	}

	public function hapus($kode)
	{
		$where = array('kode' => $kode);
		$this->Buku_model->hapusDataBuku($where,'buku');
		redirect('buku/index');
		//call method hapusDataBuku with parameter kode from buku_model
		$this->session->flashdata('dihapus');
		//use flashdata to show alert "dihapus"
		
		//back to controller buku

	}

	public function ubah()
	{
		$data['judul'] = 'Form Ubah Data Buku';

		$this->form_validation->set_rules('kode','Kode','required');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('penulis','penulis','required');
		$this->form_validation->set_rules('pengarang','Pengarang','required');
		$this->form_validation->set_rules('tahun','Tahun','required');
		//from library form_validation, set rules for kode, judul, penulis, pengarang, tahun = required
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}
		//conditon in form_validation, if user input form = true
		$this->Buku_model->ubahDataBuku($where,'buku');
		redirect('buku/index');
		//call method "ubahDataBuku" in Buku_model
		$this->session->flashdata('data changed successfully');
		//use flashdata to to show alert "data changed successfully"
		
		//back to controller buku


	}
}

?>