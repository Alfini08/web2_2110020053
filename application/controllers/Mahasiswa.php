<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('prodi_model');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->lihatData();
        //echo $data;
        $this->load->view('mahasiswa_view', $data);
    }

    public function mhs_result()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->metodeResult(); // Change 'result' to 'mahasiswa'
        //echo $data;
        $this->load->view('result_view', $data);
    }

    public function mhs_row()
    {
        $data['row'] = $this->Mahasiswa_model->metodeRow();
        //echo $data;
        $this->load->view('row_view', $data);
    }

    public function mhs_resultArray()
    {
        $data['resultArray'] = $this->Mahasiswa_model->metoderesultArray();
        //echo $data;
        $this->load->view('resultArray_view', $data);
    }

    public function mhs_rowArray()
    {
        $data['rowarray'] = $this->Mahasiswa_model->metodeRowArray();
        //echo $data;
        $this->load->view('rowarray_view', $data);
    }

    public function tambah()
    {
        $data['prodi'] = $this->prodi_model->lihatData();
        $this->load->view('mahasiswa_tambah', $data);
    }

    public function simpan()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama_mhs' => $this->input->post('nama_mhs'),
            'id_prodi' => $this->input->post('id_prodi')
        ];
        $this->Mahasiswa_model->simpan($data);
        redirect('mahasiswa');
    }

    public function edit($id)
    {
        $data['prodi'] = $this->prodi_model->lihatData();
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $this->load->view('mahasiswa_edit', $data);
    }

    public function perbarui($id)
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama_mhs' => $this->input->post('nama_mhs'),
            'id_prodi' => $this->input->post('id_prodi')
        ];
        $this->Mahasiswa_model->perbarui($id, $data);
        redirect('mahasiswa');
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapus($id, $data);
        redirect('mahasiswa');
    }

    public function cetak()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->lihatData();
        $this->load->view('mahasiswa_print', $data);
    }
}
