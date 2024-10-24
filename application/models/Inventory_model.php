<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model {

    public function get_satuan() {
        return $this->db->get('satuan')->result();
    }

    public function insert_satuan($data) {
        return $this->db->insert('satuan', $data);
    }

    public function update_satuan($id, $data) {
        $this->db->where('id_satuan', $id);
        return $this->db->update('satuan', $data);
    }

    public function delete_satuan($id) {
        $this->db->where('id_satuan', $id);
        return $this->db->delete('satuan');
    }


    public function get_kategori() {
        return $this->db->get('kategori')->result();
    }

    public function insert_kategori($data) {
        return $this->db->insert('kategori', $data);
    }

    public function update_kategori($id, $data) {
        $this->db->where('id_kategori', $id);
        return $this->db->update('kategori', $data);
    }

    public function delete_kategori($id) {
        $this->db->where('id_kategori', $id);
        return $this->db->delete('kategori');
    }

 
    public function get_lokasi() {
        return $this->db->get('lokasi')->result();
    }

    public function insert_lokasi($data) {
        return $this->db->insert('lokasi', $data);
    }

    public function update_lokasi($id, $data) {
        $this->db->where('id_lokasi', $id);
        return $this->db->update('lokasi', $data);
    }

    public function delete_lokasi($id) {
        $this->db->where('id_lokasi', $id);
        return $this->db->delete('lokasi');
    }
}
