<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in2();
		$this->load->model('Donasi_model');
		$this->load->model('User_model', 'userrole');
		$this->load->model('Riwayat_model');
	}

	public function index()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getLastId();
		$this->load->view("layout/header", $data);
		$this->load->view("user/vw_donasi", $data);
		$this->load->view("layout/footer", $data);
	}
	public function info($id)
	{
		$data['judul'] = "Info Donasi";
		$data['user'] = $this->userrole->getBy();
		$data['produk'] = $this->Donasi_model->getById($id);
		$this->load->view("layout/header", $data);
		$this->load->view("user/info_donasi", $data);
		$this->load->view("layout/footer", $data);
	}
	public function kirim_bukti($id_donasi)
	{
		if ($_FILES['gambar']['size'] != 0) {
			$data = [
				'id_user' => $this->session->userdata('id'),
				'id_donasi' => $id_donasi
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'jpeg|png|jpg';
				$config['max_size'] = '20488';
				$config['upload_path'] = './assets/img/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Riwayat_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Terima kasih atas donasinya!</div>');
			redirect("User/info/" . $id_donasi);
		}else{
			redirect("User/info/" . $id_donasi);
		}
	}

	public function riyawat()
	{
		$data['judul'] = "Riwayat Donasi";
		$data['user'] = $this->userrole->getBy();
		$data['riwayat'] = $this->Riwayat_model->getByUser();
		$data['donasi'] = $this->Donasi_model->getByIdUser();

		$this->load->view('layout/header', $data);
		$this->load->view('user/Riwayat', $data);
		$this->load->view('layout/footer', $data);
	}

	public function pencarian()
	{
		if ($this->input->post('search') == NULL) {
			redirect('User/list');
		} else {
			$search = $this->input->post('search');
			$data['judul'] = "Donasi yang tesedia";
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['produk'] = $this->Donasi_model->search($search);
			$this->load->view("layout/header", $data);
			$this->load->view("user/list_donasi", $data);
			$this->load->view("layout/footer", $data);
		}
	}
	public function list()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getLastId();
		$this->load->view("layout/header", $data);
		$this->load->view("user/list_donasi", $data);
		$this->load->view("layout/footer", $data);
	}
	public function list_terlama()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getFirstId();
		$this->load->view("layout/header", $data);
		$this->load->view("user/list_donasi", $data);
		$this->load->view("layout/footer", $data);
	}
	public function list_all()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getAllLastId();
		$this->load->view("layout/header", $data);
		$this->load->view("user/list_donasi", $data);
		$this->load->view("layout/footer", $data);
	}
	public function list_all_terlama()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getAllFirstId();
		$this->load->view("layout/header", $data);
		$this->load->view("user/list_donasi", $data);
		$this->load->view("layout/footer", $data);
	}
}
