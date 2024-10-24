<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Inventory extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Inventory_model');
    }

    public function satuan() {
        $data['satuan'] = $this->Inventory_model->get_satuan();
        $this->load->view('inventory/satuan/index', $data);
    }

    public function create_satuan() {
        $this->load->view('inventory/satuan/create');
    }

    public function store_satuan() {
        $data = $this->input->post();
        $this->Inventory_model->insert_satuan($data);
        redirect('controller_inventory/satuan');
    }

    public function edit_satuan($id) {
        $data['satuan'] = $this->Inventory_model->get_satuan($id);
        $this->load->view('inventory/satuan/edit', $data);
    }

    public function update_satuan($id) {
        $data = $this->input->post();
        $this->Inventory_model->update_satuan($id, $data);
        redirect('controller_inventory/satuan'); 
    }

    public function delete_satuan($id) {
        $this->Inventory_model->delete_satuan($id);
        redirect('controller_inventory/satuan'); 
    }

   
    public function kategori() {
        $data['kategori'] = $this->Inventory_model->get_kategori();
        $this->load->view('inventory/kategori/index', $data);
    }

    public function create_kategori() {
        $this->load->view('inventory/kategori/create');
    }

    public function store_kategori() {
        $data = $this->input->post();
        $this->Inventory_model->insert_kategori($data);
        redirect('controller_inventory/kategori');
    }

    public function edit_kategori($id) {
        $data['kategori'] = $this->Inventory_model->get_kategori($id);
        $this->load->view('inventory/kategori/edit', $data);
    }

    public function update_kategori($id) {
        $data = $this->input->post();
        $this->Inventory_model->update_kategori($id, $data);
        redirect('controller_inventory/kategori');
    }

    public function delete_kategori($id) {
        $this->Inventory_model->delete_kategori($id);
        redirect('controller_inventory/kategori');
    }

 
    public function lokasi() {
        $data['lokasi'] = $this->Inventory_model->get_lokasi();
        $this->load->view('inventory/lokasi/index', $data);
    }

    public function create_lokasi() {
        $this->load->view('inventory/lokasi/create');
    }

    public function store_lokasi() {
        $data = $this->input->post();
        $this->Inventory_model->insert_lokasi($data);
        redirect('controller_inventory/lokasi');
    }

    public function edit_lokasi($id) {
        $data['lokasi'] = $this->Inventory_model->get_lokasi($id);
        $this->load->view('inventory/lokasi/edit', $data);
    }

    public function update_lokasi($id) {
        $data = $this->input->post();
        $this->Inventory_model->update_lokasi($id, $data);
        redirect('controller_inventory/lokasi');
    }

    public function delete_lokasi($id) {
        $this->Inventory_model->delete_lokasi($id);
        redirect('controller_inventory/lokasi');
    }
}
