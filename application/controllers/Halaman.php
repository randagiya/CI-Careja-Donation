<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Donasi_model'); 
	}

	// ini controller untuk halaman dashboard non_login
	public function index()
	{
		$data['judul'] = "Donasi yang tesedia";
        $data['produk'] = $this->Donasi_model->getLastId();
        $this->load->view("non_login/layout/header", $data);
        $this->load->view("non_login/Halaman", $data);
        $this->load->view("non_login/layout/footer", $data);
	}

	public function list()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['produk'] = $this->Donasi_model->getLastId();
		$this->load->view("non_login/layout/header", $data);
		$this->load->view("non_login/nlist_donasi", $data);
		$this->load->view("non_login/layout/footer", $data);
	}
	public function list_terlama()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['produk'] = $this->Donasi_model->getFirstId();
		$this->load->view("non_login/layout/header", $data);
		$this->load->view("non_login/nlist_donasi", $data);
		$this->load->view("non_login/layout/footer", $data);
	}
	public function list_all()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['produk'] = $this->Donasi_model->getAllLastId();
		$this->load->view("non_login/layout/header", $data);
		$this->load->view("non_login/nlist_donasi", $data);
		$this->load->view("non_login/layout/footer", $data);
	}
	public function list_all_terlama()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['produk'] = $this->Donasi_model->getAllFirstId();
		$this->load->view("non_login/layout/header", $data);
		$this->load->view("non_login/nlist_donasi", $data);
		$this->load->view("non_login/layout/footer", $data);
	}

	public function info($id)
    {
		$data['judul'] = "Info Donasi";
		$data['produk'] = $this->Donasi_model->getById($id);
        $this->load->view("non_login/layout/header", $data);
        $this->load->view("non_login/info_donasi", $data);
        $this->load->view("non_login/layout/footer", $data);
	}
	public function pencarian()
	{
		if ($this->input->post('search') == NULL) {
			redirect('Halaman/list');
		} else {
			$search = $this->input->post('search');
			$data['judul'] = "Donasi yang tesedia";
			$data['produk'] = $this->Donasi_model->search($search);
			$this->load->view("non_login/layout/header", $data);
			$this->load->view("non_login/nlist_donasi", $data);
			$this->load->view("non_login/layout/footer", $data);
		}
	}
}