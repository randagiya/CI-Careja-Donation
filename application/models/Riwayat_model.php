<?php
defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Riwayat_model extends CI_Model
{
    public $table = 'riwayat';
    public $id = 'riwayat.id';

    public function __construct()
    {
        parent::__construct();
        $this->db->protect_identifiers('donasi');
        $this->db->protect_identifiers('user');
        $this->db->protect_identifiers('riwayat');
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    // public function getByUser()
    // {
    //     $id = $this->session->userdata('id');
    //     $this->db->select('d.*');
    //     $this->db->from('riwayat d');
    //     $this->db->where('d.id_user', $id);
    //     $this->db->join('donasi r', 'd.id_donasi = r.id', 'inner');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
    public function getByUser()
    {
        $id = $this->session->userdata('id');
        $this->db->from($this->table);
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}
