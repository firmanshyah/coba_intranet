<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Delete_Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == null) {

            // Notifikasi Login Terlebih Dahulu
            $this->session->set_flashdata('gagal_icon', 'warning');
            $this->session->set_flashdata('gagal_title', 'Masukkan Username & Password Terlebih Dahulu');

            redirect('C_Login');
        }
    }

    public function DeleteBarang($id_barang)
    {
        $IdBarang = array('id_barang' => $id_barang);

        $this->M_CRUD->deleteData($IdBarang, 'data_namabarang');

        $this->session->set_flashdata('berhasil_icon', 'success');
        $this->session->set_flashdata('berhasil_title', 'Delete Data Berhasil');

        redirect('admin/NamaBarang/C_Nama_Barang');
    }
}
