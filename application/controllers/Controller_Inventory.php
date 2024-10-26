<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Inventory extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Inventory_model');
        $this->load->library('form_validation');
    }

    private function list_items($type) {
        $data = $this->Inventory_model->{"get_$type"}();
        echo json_encode([
            'status' => true,
            'data' => $data
        ]);
    }

    public function satuan() {
        $this->list_items('satuan');
    }

    public function create_satuan() {
        echo json_encode([
            'status' => true,
            'message' => 'Silakan masukkan data satuan.'
        ]);
    }

    public function store_satuan() {
        $this->form_validation->set_rules('nama_satuan', 'Nama Satuan', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors()
            ]);
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->insert_satuan($data)) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Satuan berhasil ditambahkan.'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Gagal menambahkan satuan.'
                ]);
            }
        }
    }

    public function edit_satuan($id) {
        $data = $this->Inventory_model->get_satuan($id);
        echo json_encode([
            'status' => true,
            'data' => $data
        ]);
    }

    public function update_satuan($id) {
        $this->form_validation->set_rules('nama_satuan', 'Nama Satuan', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors()
            ]);
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->update_satuan($id, $data)) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Satuan berhasil diperbarui.'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Gagal memperbarui satuan.'
                ]);
            }
        }
    }

    public function delete_satuan($id) {
        if ($this->Inventory_model->delete_satuan($id)) {
            echo json_encode([
                'status' => true,
                'message' => 'Satuan berhasil dihapus.'
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Gagal menghapus satuan.'
            ]);
        }
    }

    public function kategori() {
        $this->list_items('kategori');
    }

    public function create_kategori() {
        echo json_encode([
            'status' => true,
            'message' => 'Silakan masukkan data kategori.'
        ]);
    }

    public function store_kategori() {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors()
            ]);
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->insert_kategori($data)) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Kategori berhasil ditambahkan.'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Gagal menambahkan kategori.'
                ]);
            }
        }
    }

    public function edit_kategori($id) {
        $data = $this->Inventory_model->get_kategori($id);
        echo json_encode([
            'status' => true,
            'data' => $data
        ]);
    }

    public function update_kategori($id) {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors()
            ]);
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->update_kategori($id, $data)) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Kategori berhasil diperbarui.'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Gagal memperbarui kategori.'
                ]);
            }
        }
    }

    public function delete_kategori($id) {
        if ($this->Inventory_model->delete_kategori($id)) {
            echo json_encode([
                'status' => true,
                'message' => 'Kategori berhasil dihapus.'
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Gagal menghapus kategori.'
            ]);
        }
    }

    public function lokasi() {
        $this->list_items('lokasi');
    }

    public function create_lokasi() {
        echo json_encode([
            'status' => true,
            'message' => 'Silakan masukkan data lokasi.'
        ]);
    }

    public function store_lokasi() {
        $this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors()
            ]);
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->insert_lokasi($data)) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Lokasi berhasil ditambahkan.'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Gagal menambahkan lokasi.'
                ]);
            }
        }
    }

    public function edit_lokasi($id) {
        $data = $this->Inventory_model->get_lokasi($id);
        echo json_encode([
            'status' => true,
            'data' => $data
        ]);
    }

    public function update_lokasi($id) {
        $this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode([
                'status' => false,
                'errors' => validation_errors()
            ]);
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->update_lokasi($id, $data)) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Lokasi berhasil diperbarui.'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Gagal memperbarui lokasi.'
                ]);
            }
        }
    }

    public function delete_lokasi($id) {
        if ($this->Inventory_model->delete_lokasi($id)) {
            echo json_encode([
                'status' => true,
                'message' => 'Lokasi berhasil dihapus.'
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Gagal menghapus lokasi.'
            ]);
        }
    }
}
