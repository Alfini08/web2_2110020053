<?php
defined('BASEPATH') or exit('No direct script access allowed');

class prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('prodi_model');
    }

    public function index()
    {
        $data['prodi'] = $this->prodi_model->lihatData();
        //echo $data;
        $this->load->view('prodi_view', $data);
    }

    public function tambah()
    {
        $this->load->view('prodi_tambah');
    }

    public function simpan()
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        ];
        $this->prodi_model->simpan($data);
        redirect('prodi');
    }

    public function edit($id)
    {
        $data['prodi'] = $this->prodi_model->getById($id);
        $this->load->view('prodi_edit', $data);
    }

    public function perbarui($id)
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        ];
        $this->prodi_model->perbarui($id, $data);
        redirect('prodi');
    }

    public function hapus($id)
    {
        $this->prodi_model->hapus($id, $data);
        redirect('prodi');
    }
}
