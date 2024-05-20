<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MasterBarangController extends MY_Controller
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

        // Load the MasterBarang model
        $this->load->model('MasterBarangModel', 'barang');
    }

    public function index()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('warning', 'Anda tidak memiliki akses');
            redirect(base_url('home'));
            return;
        }

        if ($_POST) {
            $input = (object) $this->input->post(null, true);

            if ($this->barang->validate()) {
                $data = [
                    'merk'            => $input->merk,
                    'type'            => $input->type,
                    'sn'              => $input->sn,
                    'tgl_pembelian'   => $input->tgl_pembelian,
                    'tgl_kalibrasi'   => $input->tgl_kalibrasi,
                    'kondisi_alat'    => $input->kondisi_alat,
                    'lokasi'          => $input->lokasi,
                ];

                $this->barang->createBarang($data);
                $this->session->set_flashdata('success', 'Barang berhasil ditambahkan');
                redirect(base_url('masterbarang'));
            }
        }

        $data['title'] = 'WMS Spektrum - Master Barang';
        $data['input'] = $this->barang->getDefaultValues();
        $data['page']  = 'pages/masterbarang/index';
        $data['breadcrumb_title'] = 'Master Barang';
        $data['breadcrumb_path']  = 'Manajemen Barang / Master Barang';

        $this->view($data);
    }

    public function reset()
    {
        redirect(base_url('masterbarang'));
    }
}
