<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function get_all_barang() {
        $query = $this->db->get('barang');
        return json_encode([
            'status' => true,
            'data' => $query->result()
        ]);
    }

    public function add_barang($data) {
        $status = $this->db->insert('barang', $data);
        return json_encode([
            'status' => $status,
            'message' => $status ? 'Barang berhasil ditambahkan.' : 'Gagal menambahkan barang.'
        ]);
    }

    public function update_barang($id, $data) {
        $this->db->where('id', $id);
        $status = $this->db->update('barang', $data);
        return json_encode([
            'status' => $status,
            'message' => $status ? 'Barang berhasil diperbarui.' : 'Gagal memperbarui barang.'
        ]);
    }

    public function delete_barang($id) {
        $this->db->where('id', $id);
        $status = $this->db->delete('barang');
        return json_encode([
            'status' => $status,
            'message' => $status ? 'Barang berhasil dihapus.' : 'Gagal menghapus barang.'
        ]);
    }

    public function get_barang($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('barang');
        $data = $query->row();
        return json_encode([
            'status' => !empty($data),
            'data' => $data
        ]);
    }
}
