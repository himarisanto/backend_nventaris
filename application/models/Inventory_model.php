<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('Inventory_model');
        $this->load->library('form_validation');
        $this->token = $this->security->get_csrf_hash();
    }

    public function get_satuan() {
        $data = $this->Inventory_model->get_satuan();
        echo json_encode([
            'status' => !empty($data),
            'data' => $data,
            'token' => $this->token
        ]);
    }

    public function insert_satuan() {
        $this->form_validation->set_rules('id_satuan', 'ID Satuan', 'required|trim');
        $this->form_validation->set_rules('nama_satuan', 'Nama Satuan', 'required|trim');
        
        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors(),
                'token' => $this->token
            ]);
            return;
        }

        $data = [
            'id_satuan' => $this->input->post('id_satuan'),
            'nama_satuan' => $this->input->post('nama_satuan')
        ];

        $status = $this->Inventory_model->insert_satuan($data);
        echo json_encode([
            'status' => $status,
            'message' => $status ? 'Satuan berhasil ditambahkan.' : 'Gagal menambahkan satuan.',
            'token' => $this->token
        ]);
    }

    public function get_satuan_by_id($id) {
        $data = $this->Inventory_model->get_satuan_by_id($id);
        echo json_encode([
            'status' => !empty($data),
            'data' => $data,
            'token' => $this->token
        ]);
    }

    public function update_satuan($id) {
        $this->form_validation->set_rules('id_satuan', 'ID Satuan', 'required|trim');
        $this->form_validation->set_rules('nama_satuan', 'Nama Satuan', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors(),
                'token' => $this->token
            ]);
            return;
        }

        $data = [
            'id_satuan' => $this->input->post('id_satuan'),
            'nama_satuan' => $this->input->post('nama_satuan')
        ];

        $status = $this->Inventory_model->update_satuan($id, $data);
        echo json_encode([
            'status' => $status,
            'message' => $status ? 'Satuan berhasil diperbarui.' : 'Gagal memperbarui satuan.',
            'token' => $this->token
        ]);
    }

    public function delete_satuan($id) {
        $status = $this->Inventory_model->delete_satuan($id);
        echo json_encode([
            'status' => $status,
            'message' => $status ? 'Satuan berhasil dihapus.' : 'Gagal menghapus satuan.',
            'token' => $this->token
        ]);
    }

    public function get_kategori() {
        $data = $this->Inventory_model->get_kategori();
        echo json_encode([
            'status' => !empty($data),
            'data' => $data,
            'token' => $this->token
        ]);
    }

    public function insert_kategori() {
        $this->form_validation->set_rules('id_kategori', 'ID Kategori', 'required|trim');
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors(),
                'token' => $this->token
            ]);
            return;
        }

        $data = [
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_kategori' => $this->input->post('nama_kategori')
        ];

        $status = $this->Inventory_model->insert_kategori($data);
        echo json_encode([
            'status' => $status,
            'message' => $status ? 'Kategori berhasil ditambahkan.' : 'Gagal menambahkan kategori.',
            'token' => $this->token
        ]);
    }

    public function get_kategori_by_id($id) {
        $data = $this->Inventory_model->get_kategori_by_id($id);
        echo json_encode([
            'status' => !empty($data),
            'data' => $data,
            'token' => $this->token
        ]);
    }

    public function update_kategori($id) {
        $this->form_validation->set_rules('id_kategori', 'ID Kategori', 'required|trim');
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors(),
                'token' => $this->token
            ]);
            return;
        }

        $data = [
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_kategori' => $this->input->post('nama_kategori')
        ];

        $status = $this->Inventory_model->update_kategori($id, $data);
        echo json_encode([
            'status' => $status,
            'message' => $status ? 'Kategori berhasil diperbarui.' : 'Gagal memperbarui kategori.',
            'token' => $this->token
        ]);
    }

    public function delete_kategori($id) {
        $status = $this->Inventory_model->delete_kategori($id);
        echo json_encode([
            'status' => $status,
            'message' => $status ? 'Kategori berhasil dihapus.' : 'Gagal menghapus kategori.',
            'token' => $this->token
        ]);
    }

    public function get_lokasi() {
        $data = $this->Inventory_model->get_lokasi();
        echo json_encode([
            'status' => !empty($data),
            'data' => $data,
            'token' => $this->token
        ]);
    }

    public function insert_lokasi() {
        $this->form_validation->set_rules('id_lokasi', 'ID Lokasi', 'required|trim');
        $this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors(),
                'token' => $this->token
            ]);
            return;
        }

        $data = [
            'id_lokasi' => $this->input->post('id_lokasi'),
            'nama_lokasi' => $this->input->post('nama_lokasi')
        ];

        $status = $this->Inventory_model->insert_lokasi($data);
        echo json_encode([
            'status' => $status,
            'message' => $status ? 'Lokasi berhasil ditambahkan.' : 'Gagal menambahkan lokasi.',
            'token' => $this->token
        ]);
    }

    public function get_lokasi_by_id($id) {
        $data = $this->Inventory_model->get_lokasi_by_id($id);
        echo json_encode([
            'status' => !empty($data),
            'data' => $data,
            'token' => $this->token
        ]);
    }

    public function update_lokasi($id) {
        $this->form_validation->set_rules('id_lokasi', 'ID Lokasi', 'required|trim');
        $this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors(),
                'token' => $this->token
            ]);
            return;
        }

        $data = [
            'id_lokasi' => $this->input->post('id_lokasi'),
            'nama_lokasi' => $this->input->post('nama_lokasi')
        ];

        $status = $this->Inventory_model->update_lokasi($id, $data);
        echo json_encode([
            'status' => $status,
            'message' => $status ? 'Lokasi berhasil diperbarui.' : 'Gagal memperbarui lokasi.',
            'token' => $this->token
        ]);
    }

    public function delete_lokasi($id) {
        $status = $this->Inventory_model->delete_lokasi($id);
        echo json_encode([
            'status' => $status,
            'message' => $status ? 'Lokasi berhasil dihapus.' : 'Gagal menghapus lokasi.',
            'token' => $this->token
        ]);
    }
}
