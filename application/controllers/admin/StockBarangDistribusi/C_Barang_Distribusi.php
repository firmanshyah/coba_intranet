<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('changeDateFormat')) {
    function changeDateFormat($format = 'd-m-Y', $givenDate = null)
    {
        return date($format, strtotime($givenDate));
    }
}

class C_Barang_Distribusi extends CI_Controller
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

    public function index()
    {
        $this->load->view('template/DataBarang/V_Header_Barang');
        $this->load->view('template/V_Sidebar_Admin');
        $this->load->view('admin/StockBarangDistribusi/V_Barang_Distribusi');
        $this->load->view('template/DataBarang/V_Footer_Barang');
    }

    public function GetDataAjax()
    {
        $result = $this->M_StockBarang->StockBarangDistribusi();

        $no = 0;

        foreach ($result as $dataBarang) {
            $NamaBarang     = $dataBarang['nama_barang'] == NULL;
            $TanggalRestock = $dataBarang['tanggal_restock'] == NULL;
            $TanggalMutasi  = $dataBarang['tanggal_mutasi'] == NULL;

            $row = array();
            $row[] = ++$no;
            $row[] = '<div>' . ($NamaBarang ? '<span class="badge bg-danger text-white">' . 'DATA KOSONG' . '</span>' :  strtoupper($dataBarang['nama_barang'])) . '</div>';
            $row[] = $dataBarang['jumlah_stockBarang'];
            $row[] = $dataBarang['jumlah_stockMutasi'];
            $row[] = $dataBarang['jumlah_stockRusak'];
            $row[] = '<div>' . ($TanggalRestock ? '<span class="badge bg-danger text-white">' . 'DATA KOSONG' . '</span>' :  changeDateFormat('d-m-Y', $dataBarang['tanggal_restock'])) . '</div>';
            $row[] = '<div>' . ($TanggalMutasi ? '<span class="badge bg-danger text-white">' . 'DATA KOSONG' . '</span>' :  changeDateFormat('d-m-Y', $dataBarang['tanggal_mutasi'])) . '</div>';
            $row[] =
                '<div class="text-center">
                    <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        Option
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a onclick="TambahBonusDistribusi(' . $dataBarang['id_stockBarang'] . ')"class="dropdown-item text-black"><i class="bi bi-patch-plus"></i> Bonus Pembelian</a>
                        <a onclick="BarangDistribusiKeluar(' . $dataBarang['id_stockBarang'] . ')"class="dropdown-item text-black"><i class="bi bi-patch-minus"></i> Keluar Barang</a>
                        <a onclick="BarangDistribusiRusak(' . $dataBarang['id_stockBarang'] . ')"class="dropdown-item text-black"><i class="bi bi-node-minus-fill"></i> Barang Rusak</a>
                </div>';
            $data[] = $row;
        }

        $ouput = array(
            'data' => $data
        );

        $this->output->set_content_type('application/json')->set_output(json_encode($ouput));
    }
}
