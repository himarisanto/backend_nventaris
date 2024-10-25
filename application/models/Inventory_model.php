<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    public function get_satuan() {
        return $this->db->get('satuan')->result(); 
    }

    public function insert_satuan($data) {
        return $this->db->insert('satuan', $data); 
    }

    public function get_satuan_by_id($id) {
        return $this->db->get_where('satuan', ['id_satuan' => $id])->row(); 
    }

    public function update_satuan($id, $data) {
        $this->db->where('id_satuan', $id);
        return $this->db->update('satuan', $data);
    }

    public function delete_satuan($id) { 
        return $this->db->delete('satuan', ['id_satuan' => $id]);
    }

    public function get_kategori() {
        return $this->db->get('kategori')->result(); 
    }

    public function insert_kategori($data) {
        return $this->db->insert('kategori', $data); 
    }

    public function get_kategori_by_id($id) {
        return $this->db->get_where('kategori', ['id_kategori' => $id])->row(); 
    }

    public function update_kategori($id, $data) {
        $this->db->where('id_kategori', $id);
        return $this->db->update('kategori', $data); 
    }

    public function delete_kategori($id) {
        return $this->db->delete('kategori', ['id_kategori' => $id]); 
    }

    public function get_lokasi() {
        return $this->db->get('lokasi')->result();
    }

    public function insert_lokasi($data) {
        return $this->db->insert('lokasi', $data); 
    }

    public function get_lokasi_by_id($id) {
        return $this->db->get_where('lokasi', ['id_lokasi' => $id])->row();
    }

    public function update_lokasi($id, $data) {
        $this->db->where('id_lokasi', $id);
        return $this->db->update('lokasi', $data);
    }

    public function delete_lokasi($id) {
        return $this->db->delete('lokasi', ['id_lokasi' => $id]);
    }

    public function get_barang() {
        return $this->db->get('barang')->result();
    }

    public function insert_barang($data) {
        return $this->db->insert('barang', $data);

    public function get_barang_by_id($id) {
        return $this->db->get_where('barang', ['id_barang' => $id])->row(); 
    }

    public function update_barang($id, $data) {
        $this->db->where('id_barang', $id);
        return $this->db->update('barang', $data); 
    }

    public function delete_barang($id) {
        return $this->db->delete('barang', ['id_barang' => $id]); 
    }
}
}