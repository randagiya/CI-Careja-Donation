<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Donasi_model');
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getLastIdAd();
		$this->load->view("layout/header", $data);
		$this->load->view("user/vw_donasi", $data);
		$this->load->view("layout/footer");
	}



	function checkDateFormat($date)
	{
		if ($date != null) {
			$d = DateTime::createFromFormat('Y-m-d', $date);
			if (($d && $d->format('Y-m-d') === $date) === FALSE) {
				$this->form_validation->set_message('checkDateFormat', '' . $date . ' is not a valid date format.');
				return FALSE;
			} else {
				return TRUE;
			}
		} else {
			return TRUE;
		}
	}


	public function tambah()
	{
		$data['judul'] = "Tambah Donasi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->get();

		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Judul Donasi Wajib di isi'
		]);

		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);

		$this->form_validation->set_rules('tanggal_batas', 'Tanggal_batas', 'trim|callback_checkDateFormat');

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("admin/vw_tambah_donasi", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'tanggal_batas' => $this->input->post('tanggal_batas'),
				'tanggal_batas' => $this->input->post('tanggal_batas') ? $this->input->post('tanggal_batas') : null,
				'keterangan' => $this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'jpeg|png|jpg';
				$config['max_size'] = '204888';
				$config['upload_path'] = './assets/img/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Donasi_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Donasi Berhasil Ditambah!</div>');
			redirect('Post/list');
		}
	}

	public function edit($id)
	{
		$data['judul'] = "Edit Donasi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getById($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Judul Donasi Wajib di isi'
		]);

		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);

		$this->form_validation->set_rules('tanggal_batas', 'Tanggal_batas', 'trim|callback_checkDateFormat');

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("admin/vw_ubah_donasi", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'tanggal_batas' => $this->input->post('tanggal_batas') ? $this->input->post('tanggal_batas') : null,
				'keterangan' => $this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'jpeg|png|jpg';
				$config['max_size'] = '204888';
				$config['upload_path'] = './assets/img/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$old_image = $data['produk']['gambar'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Donasi_model->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Diubah!</div>');
			redirect('Post/list');
		}
	}

	public function hapus($id)
	{
		$this->Donasi_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			redirect('Post/list');
		} else {
			redirect('Post/list');
		}
	}

	public function pencarian()
	{
		if ($this->input->post('search') == NULL) {
			redirect('Post/list');
		} else {
			$search = $this->input->post('search');
			$data['judul'] = "Donasi yang tesedia";
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['produk'] = $this->Donasi_model->search($search);
			$this->load->view("layout/header", $data);
			$this->load->view("admin/list_donasi", $data);
			$this->load->view("layout/footer", $data);
		}
	}
	public function list()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getLastIdAd();
		$this->load->view("layout/header", $data);
		$this->load->view("admin/list_donasi", $data);
		$this->load->view("layout/footer", $data);
	}
	public function list_terlama()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getFirstIdAd();
		$this->load->view("layout/header", $data);
		$this->load->view("admin/list_donasi", $data);
		$this->load->view("layout/footer", $data);
	}
	public function list_all()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getAllLastIdAd();
		$this->load->view("layout/header", $data);
		$this->load->view("admin/list_donasi", $data);
		$this->load->view("layout/footer", $data);
	}
	public function list_all_terlama()
	{
		$data['judul'] = "Donasi yang tesedia";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Donasi_model->getAllFirstIdAd();
		$this->load->view("layout/header", $data);
		$this->load->view("admin/list_donasi", $data);
		$this->load->view("layout/footer", $data);
	}
	public function akun()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['akun'] = $this->User_model->getEmail();
		$this->load->view("layout/header", $data);
		$this->load->view("admin/vw_ubah_ak", $data);
		$this->load->view("layout/footer", $data);
	}

	public function cari_ak()
	{
		if ($this->input->post('search') == NULL) {
			redirect('Post/akun');
		} else {
			$search = $this->input->post('search');
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['akun'] = $this->User_model->search($search);
			$this->load->view("layout/header", $data);
			$this->load->view("admin/vw_ubah_ak", $data);
			$this->load->view("layout/footer", $data);
		}
	}

	public function ak_ad($id)
	{
		$ses = $this->session->userdata('id');
		if ($id != $ses) {
			$this->User_model->upd_role($id, 'Admin');
			redirect("Post/akun");
		}else{
			redirect("Post");
		}
	}
	public function ak_us($id)
	{
		$ses = $this->session->userdata('id');
		if ($id != $ses) {
			if ($id != 1) {
				$this->User_model->upd_role($id, 'User');
				redirect("Post/akun");
			}else{
				redirect("Post/akun");
			}
		}else{
			redirect("Post");
		}
	}
}
