<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MasterBarangModel extends MY_Model
{
    protected $table = 'barang';

    public function getDefaultValues()
    {
        return [
            'merk'            => '',
            'type'            => '',
            'sn'              => '',
            'tgl_pembelian'   => '',
            'tgl_kalibrasi'   => '',
            'kondisi_alat'    => '',
            'lokasi'          => '',
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'merk',
                'label' => 'Merk',
                'rules' => 'trim|required',
                'errors' => [
                    'required' => '<h6>%s harus diisi.</h6>'
                ]
            ],
            // Add validation rules for other fields here...
        ];

        return $validationRules;
    }

    public function createBarang($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}
