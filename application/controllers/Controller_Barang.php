<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model'); 
        $this->load->model('Inventory_model'); 
        $this->load->library('form_validation');
        $this->token = $this->security->get_csrf_hash();
    }

    public function index() {
        $status = false;
        $data = [];
        
        $barang = $this->Barang_model->get_all_barang();
        if (!empty($barang)) {
            $status = true;
            $data = $barang;
        }

        echo json_encode([
            'status' => $status,
            'data' => $data,
            'token' => $this->token
        ]);
    }

    public function add() {
        $status = false;
        $message = '';
        $errors = [];

        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required|trim');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|trim');
        $this->form_validation->set_rules('kategori_barang', 'Kategori Barang', 'required|trim');
        $this->form_validation->set_rules('jumlah_barang', 'Jumlah Barang', 'required|integer');
        $this->form_validation->set_rules('lokasi_barang', 'Lokasi Barang', 'required|trim');
        $this->form_validation->set_rules('satuan_barang', 'Satuan Barang', 'required|trim');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required|numeric');
        $this->form_validation->set_rules('keterangan_barang', 'Keterangan Barang', 'trim'); 


        if ($this->form_validation->run() == FALSE) {
            foreach ($this->input->post() as $key => $value) {
                if (form_error($key)) {
                    $errors[$key] = form_error($key);
                }
            }

            echo json_encode([
                'status' => $status,
                'errors' => $errors,
                'token' => $this->token
            ]);
            return;
        }
        $data_barang = array(
            'kode_barang' => $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'kategori_barang' => $this->input->post('kategori_barang'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'lokasi_barang' => $this->input->post('lokasi_barang'),
            'satuan_barang' => $this->input->post('satuan_barang'),
            'keterangan_barang' => $this->input->post('keterangan_barang') ? $this->input->post('keterangan_barang') : NULL,
            'harga_barang' => $this->input->post('harga_barang')
        );

        if ($this->Barang_model->add_barang($data_barang)) {
            $status = true;
            $message = 'Barang berhasil ditambahkan.';
        } else {
            $message = 'Gagal menambahkan barang.';
        }

        echo json_encode([
            'status' => $status,
            'message' => $message,
            'token' => $this->token
        ]);
    }

    public function edit($id) {
        $status = false;
        $message = '';
        $errors = [];
        
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required|trim');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|trim');
        $this->form_validation->set_rules('kategori_barang', 'Kategori Barang', 'required|trim');
        $this->form_validation->set_rules('jumlah_barang', 'Jumlah Barang', 'required|integer');
        $this->form_validation->set_rules('lokasi_barang', 'Lokasi Barang', 'required|trim');
        $this->form_validation->set_rules('satuan_barang', 'Satuan Barang', 'required|trim');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required|numeric');
        $this->form_validation->set_rules('keterangan_barang', 'Keterangan Barang', 'trim'); 


        if ($this->form_validation->run() == FALSE) {
            foreach ($this->input->post() as $key => $value) {
                if (form_error($key)) {
                    $errors[$key] = form_error($key);
                }
            }

            echo json_encode([
                'status' => $status,
                'errors' => $errors,
                'token' => $this->token
            ]);
            return;
        }
        $data_update = array(
            'kode_barang' => $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'kategori_barang' => $this->input->post('kategori_barang'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'lokasi_barang' => $this->input->post('lokasi_barang'),
            'satuan_barang' => $this->input->post('satuan_barang'),
            'keterangan_barang' => $this->input->post('keterangan_barang') ? $this->input->post('keterangan_barang') : NULL,
            'harga_barang' => $this->input->post('harga_barang')
        );

        if ($this->Barang_model->update_barang($id, $data_update)) {
            $status = true;
            $message = 'Barang berhasil diperbarui.';
        } else {
            $message = 'Gagal memperbarui barang.';
        }

        echo json_encode([
            'status' => $status,
            'message' => $message,
            'token' => $this->token
        ]);
    }
    
    public function delete($id) {
        $status = false;
        $message = '';

        if (empty($id) || !is_numeric($id)) {
            $message = 'ID barang tidak valid.';
        } else {
            if ($this->Barang_model->delete_barang($id)) {
                $status = true;
                $message = 'Barang berhasil dihapus.';
            } else {
                $message = 'Gagal menghapus barang.';
            }
        }
        echo json_encode([
            'status' => $status,
            'message' => $message,
            'token' => $this->token
        ]);
    }
}
