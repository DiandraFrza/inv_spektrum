<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Master List Barang
 */
class MasterListBarangController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $is_login = $this->session->userdata('is_login');

        if (!$is_login) {
            $this->session->set_flashdata('warning', 'Anda belum login');
            redirect(base_url('login'));
            return;
        }

        // Load the Barang model
        $this->load->model('MasterListBarangModel', 'items');
    }

    public function index($page = null)
    {
        $this->session->unset_userdata('keyword');

        $data['title']              = 'Easy WMS - List Barang';
        $data['breadcrumb_title']   = "List Barang";
        $data['breadcrumb_path']    = 'Pendataan Barang / List Barang';
        $data['content']            = $this->items->select([
                'barang.id AS id_barang', 'barang.merk', 'barang.type', 'barang.sn',
                'barang.tgl_pembelian', 'barang.tgl_kalibrasi', 'barang.kondisi_alat',
                'barang.lokasi', 'barang.created_at', 'barang.updated_at'
            ])
            ->paginate($page)
            ->get();
        $data['total_rows']         = $this->items->count();
        $data['pagination']         = $this->items->makePagination(base_url('masterlistbarang'), 2, $data['total_rows']);
        $data['page']               = 'pages/masterlistbarang/index';

        $this->view($data);
    }
}
