<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function get_all_barang() {
        $query = $this->db->get('barang');
        return $query->result();
    }

    public function add_barang($data) {
        return $this->db->insert('barang', $data);
    }

    public function update_barang($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('barang', $data);
    }

    public function delete_barang($id) {
        $this->db->where('id', $id);
        return $this->db->delete('barang');
    }
    public function get_barang($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('barang');
        return $query->row();
    }
}
