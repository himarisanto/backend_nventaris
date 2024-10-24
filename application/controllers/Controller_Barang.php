<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model'); 
    }

         
    public function index() {
        $data['barang'] = $this->Barang_model->get_all_barang();
        $data->view('barang/index', $data);
    }
    public function add() {
        if ($this->input->post()) {
            $data = array(
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'kategori_barang' => $this->input->post('kategori_barang'),
                'jumlah_barang' => $this->input->post('jumlah_barang'),
                'lokasi_barang' => $this->input->post('lokasi_barang'),
                'satuan_barang' => $this->input->post('satuan_barang'),
                'keterangan' => $this->input->post('keterangan') ? $this->input->post('keterangan') : NULL, 
                'harga_barang' => $this->input->post('harga_barang') 
            );
            if ($this->Barang_model->add_barang($data)) {
                echo json_encode(['status' => 'success', 'message' => 'Barang berhasil ditambahkan.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Gagal menambahkan barang.']);
            }
            return;
        }
        $this->load->view('barang/add');
    }
    
    public function edit($id) {
        $data['barang'] = $this->Barang_model->get_barang($id);
    
        if ($this->input->post()) {
            $data_update = array(
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'kategori_barang' => $this->input->post('kategori_barang'),
                'jumlah_barang' => $this->input->post('jumlah_barang'),
                'lokasi_barang' => $this->input->post('lokasi_barang'),
                'satuan_barang' => $this->input->post('satuan_barang'),
                'keterangan' => $this->input->post('keterangan') ? $this->input->post('keterangan') : NULL, 
                'harga_barang' => $this->input->post('harga_barang') 
            );
            if ($this->Barang_model->update_barang($id, $data_update)) {
                echo json_encode(['status' => 'success', 'message' => 'Barang berhasil diperbarui.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Gagal memperbarui barang.']);
            }
            return;
        }
        $this->load->view('barang/edit', $data); 
    }
    
    public function delete($id) {
        if (empty($id) || !is_numeric($id)) {
            echo json_encode(['status' => 'error', 'message' => 'ID barang tidak valid.']);
            return;
        }
    
        if ($this->Barang_model->delete_barang($id)) {
            echo json_encode(['status' => 'success', 'message' => 'Barang berhasil dihapus.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus barang.']);
        }
    }
    
    
}