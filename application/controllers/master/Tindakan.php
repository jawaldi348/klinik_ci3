<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tindakan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('master/Mtindakan');
    }
    public function index()
    {
        $data = [
            'title' => 'Tindakan',
            'small' => 'Data Tindakan / Harga Paket',
            'links' => '<li class="active">Tindakan</li>',
            'data'  => $this->Mtindakan->getAll()
        ];
        $this->template->display('master/tindakan/index', $data);
    }
    public function create()
    {
        $d['kode'] = $this->Mtindakan->kode();
        $this->load->view('master/tindakan/create', $d);
    }
    public function store()
    {
        $this->form_validation->set_rules('nama', 'nama tindakan', 'required|is_unique[tindakan.nm_tindakan]');
        $this->form_validation->set_rules('harga', 'harga paket', 'required');
        $this->form_validation->set_error_delimiters(errorDelimiter(), '</div>');
        $this->form_validation->set_message('required', errorRequired());
        $this->form_validation->set_message('is_unique', isUnique());
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post(null, TRUE);
            $this->Mtindakan->store($post);
            $this->session->set_flashdata('pesan', text_success('tindakan', 'store'));
            $json['status'] = true;
        } else {
            foreach ($_POST as $key => $value) {
                $json['pesan'][$key] = form_error($key);
            }
        }
        echo json_encode($json);
    }
    public function edit()
    {
        $kode = $this->input->post('kode');
        $d['data'] = $this->Mtindakan->show($kode);
        $this->load->view('master/tindakan/edit', $d);
    }
    public function update()
    {
        $this->form_validation->set_rules('nama', 'nama tindakan', 'required');
        $this->form_validation->set_rules('harga', 'harga paket', 'required');
        $this->form_validation->set_error_delimiters(errorDelimiter(), '</div>');
        $this->form_validation->set_message('required', errorRequired());
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post(null, TRUE);
            $this->Mtindakan->update($post);
            $this->session->set_flashdata('pesan', text_success('tindakan', 'update'));
            $json['status'] = true;
        } else {
            foreach ($_POST as $key => $value) {
                $json['pesan'][$key] = form_error($key);
            }
        }
        echo json_encode($json);
    }
    public function destroy()
    {
        $kode = $this->input->post('kode', true);
        $action = $this->Mtindakan->destroy($kode);
        if (!$action) {
            $pesan['error'] = errorDestroy();
        } else {
            $pesan['success'] = successDestroy();
        }
        echo json_encode($pesan);
    }
}
