<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_model extends CI_Model
{
    public $table = 'donasi';
    public $id = 'donasi.id';
    
    public function __construct()
    {
        parent::__construct();
        $this->db->protect_identifiers('donasi');
        $this->db->protect_identifiers('user');
        $this->db->protect_identifiers('riwayat');
    }

    // ini model untuk mengambil semua data di database
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getAllLastId()
    {
        $query = $this->db->query("Select * from donasi where tanggal_batas >= curdate() || tanggal_batas is null order by id desc");
        return $query->result_array();
    }
    public function getAllFirstId(){
        $query = $this->db->query("Select * from donasi where tanggal_batas >= curdate() || tanggal_batas is null order by id asc");
        return $query->result_array();
    }

    public function getLastId()
    {
        $query = $this->db->query("Select * from donasi where tanggal_batas >= curdate() || tanggal_batas is null order by id desc limit 5");
        return $query->result_array();
    }
    public function getFirstId(){
        $query = $this->db->query("Select * from donasi where tanggal_batas >= curdate() || tanggal_batas is null order by id asc limit 5");
        return $query->result_array();
    }

    public function search($search){
        $query = $this->db->query("SELECT * FROM donasi WHERE nama LIKE '%".$search."%' ORDER BY id desc");
        return $query->result_array();
    }

    public function getByForUser($page)
    {
        
        $this->db->from($this->table);
        $this->db->where('tanggal_upload' > 'tanggal_batas' & 'id' > ($page) &'id' <= ($page+5));
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    // SELECT * FROM `donasi` WHERE id > 0 AND id <= 5 ORDER BY id DESC;


    // ini model untuk mengambil id produk di database
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getByIdUser()
    {
        $id = $this->session->userdata('id');
        $query = $this->db->query("select a.nama 
        from donasi a, riwayat b 
        where 
        b.id_user = ".$id." AND b.id_donasi = a.id");
        return $query->result_array();
    }
    

    // ini model untuk mengupdate data produk
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    // ini model untuk menambah produk
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    // ini model untuk menghapus produk
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function getAllLastIdAd()
    {
        $this->db->from($this->table);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getAllFirstIdAd(){
        $this->db->from($this->table);
        $this->db->order_by('id', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getLastIdAd()
    {
        $this->db->from($this->table);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        $this->db->limit(5);
        return $query->result_array();
    }
    public function getFirstIdAd(){
        $this->db->from($this->table);
        $this->db->order_by('id', 'asc');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>