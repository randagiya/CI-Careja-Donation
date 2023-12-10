<?php
defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class User_model extends CI_Model
{
    public $table = 'user';
    public $id = 'user.id';

    public function __construct()
    {
        parent::__construct();
        $this->db->protect_identifiers('donasi');
        $this->db->protect_identifiers('user');
        $this->db->protect_identifiers('riwayat');
    }

    // ini model untuk mengambil semua data di databaase
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    // ini model untuk mengambil data email di databaase
    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        return $query->row_array();
    }

    // ini model untuk mengambil data id user di databaase
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    // ini model untuk mengupdate
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }


    // ini model untuk registrasi
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }
    public function search($search)
    {
        $query = $this->db->query("SELECT * FROM user WHERE email LIKE '%" . $search . "%'");
        return $query->result_array();
    }
    public function getEmail()
    {
        $query = $this->db->query("select email, role, id FROM user");
        return $query->result_array();
    }
    public function upd_role($id, $role)
    {
        $this->db->set('role', $role);
        $this->db->where('id', $id);
        $query = $this->db->update('user');

        if ($this->db->affected_rows() > 0) {
            // Query berhasil mempengaruhi baris data
            return true;
        } else {
            // Query tidak mempengaruhi baris data, kemungkinan ID tidak ditemukan
            return false;
        }
    }



    // public function delete($id)
    // {
    //     $this->db->where($this->id, $id);
    //     $this->db->delete($this->table);
    //     return $this->db->affected_rows();
    // }

}
