<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Inventory extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Inventory_model');
        $this->load->library('form_validation');
    }

    private function list_items($type) {
        $data[$type] = $this->Inventory_model->{"get_$type"}();
        $this->load->view("inventory/$type/index", $data);
    }

    public function satuan() {
        $this->list_items('satuan');
    }

    public function create_satuan() {
        $this->load->view('inventory/satuan/create');
    }

    public function store_satuan() {
        $this->form_validation->set_rules('nama_satuan', 'Nama Satuan', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->create_satuan(); 
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->insert_satuan($data)) {
                $this->session->set_flashdata('message', 'Satuan berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('message', 'Gagal menambahkan satuan.');
            }
            redirect('controller_inventory/satuan');
        }
    }

    public function edit_satuan($id) {
        $data['satuan'] = $this->Inventory_model->get_satuan($id);
        $this->load->view('inventory/satuan/edit', $data);
    }

    public function update_satuan($id) {
        $this->form_validation->set_rules('nama_satuan', 'Nama Satuan', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->edit_satuan($id); 
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->update_satuan($id, $data)) {
                $this->session->set_flashdata('message', 'Satuan berhasil diperbarui.');
            } else {
                $this->session->set_flashdata('message', 'Gagal memperbarui satuan.');
            }
            redirect('controller_inventory/satuan');
        }
    }

    public function delete_satuan($id) {
        if ($this->Inventory_model->delete_satuan($id)) {
            $this->session->set_flashdata('message', 'Satuan berhasil dihapus.');
        } else {
            $this->session->set_flashdata('message', 'Gagal menghapus satuan.');
        }
        redirect('controller_inventory/satuan');
    }

   
    public function kategori() {
        $this->list_items('kategori');
    }

    public function create_kategori() {
        $this->load->view('inventory/kategori/create');
    }

    public function store_kategori() {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->create_kategori();
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->insert_kategori($data)) {
                $this->session->set_flashdata('message', 'Kategori berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('message', 'Gagal menambahkan kategori.');
            }
            redirect('controller_inventory/kategori');
        }
    }

    public function edit_kategori($id) {
        $data['kategori'] = $this->Inventory_model->get_kategori($id);
        $this->load->view('inventory/kategori/edit', $data);
    }

    public function update_kategori($id) {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->edit_kategori($id);
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->update_kategori($id, $data)) {
                $this->session->set_flashdata('message', 'Kategori berhasil diperbarui.');
            } else {
                $this->session->set_flashdata('message', 'Gagal memperbarui kategori.');
            }
            redirect('controller_inventory/kategori');
        }
    }

    public function delete_kategori($id) {
        if ($this->Inventory_model->delete_kategori($id)) {
            $this->session->set_flashdata('message', 'Kategori berhasil dihapus.');
        } else {
            $this->session->set_flashdata('message', 'Gagal menghapus kategori.');
        }
        redirect('controller_inventory/kategori');
    }

    public function lokasi() {
        $this->list_items('lokasi');
    }

    public function create_lokasi() {
        $this->load->view('inventory/lokasi/create');
    }

    public function store_lokasi() {
        $this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->create_lokasi();
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->insert_lokasi($data)) {
                $this->session->set_flashdata('message', 'Lokasi berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('message', 'Gagal menambahkan lokasi.');
            }
            redirect('controller_inventory/lokasi');
        }
    }

    public function edit_lokasi($id) {
        $data['lokasi'] = $this->Inventory_model->get_lokasi($id);
        $this->load->view('inventory/lokasi/edit', $data);
    }

    public function update_lokasi($id) {
        $this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->edit_lokasi($id);
        } else {
            $data = $this->input->post();
            if ($this->Inventory_model->update_lokasi($id, $data)) {
                $this->session->set_flashdata('message', 'Lokasi berhasil diperbarui.');
            } else {
                $this->session->set_flashdata('message', 'Gagal memperbarui lokasi.');
            }
            redirect('controller_inventory/lokasi');
        }
    }

    public function delete_lokasi($id) {
        if ($this->Inventory_model->delete_lokasi($id)) {
            $this->session->set_flashdata('message', 'Lokasi berhasil dihapus.');
        } else {
            $this->session->set_flashdata('message', 'Gagal menghapus lokasi.');
        }
        redirect('controller_inventory/lokasi');
    }
}
