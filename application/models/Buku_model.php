<?php
 // write your name and student id here
class Buku_model extends CI_model
{

	public function getAllBuku()
	{
		return $this->db->get('buku');
	}

	public function tambahDataBuku()
	{
		$data = [
			"kode" => $this->input->post('kode', true),
			"judul" => $this->input->post('judul', true),
			"penulis" => $this->input->post('penulis', true),
			"penerbit" => $this->input->post('penerbit', true),
			"tahun" => $this->input->post('tahun', true),
		];

		$this->db->insert($data);
	}

	public function hapusDataBuku($kode)
	{
		$this->db->where($kode);
		$this->db->delete($table);
	}

	public function ubahDataBuku()
	{
		$data = [
			"kode" => $this->input->post('kode', true),
			"judul" => $this->input->post('judul', true),
			"penulis" => $this->input->post('penulis', true),
			"penerbit" => $this->input->post('penerbit', true),
			"tahun" => $this->input->post('tahun', true),
		];
		return $this->db->get('buku');
	}

}
