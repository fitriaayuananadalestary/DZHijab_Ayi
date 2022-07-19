<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Buku_model');
        $this->load->model('Keranjang_model');

    }

    public function index()
    {   
        $data['judul'] = "Profile Page";
        $data['user'] = $this->userrole->getBy();
        $data['buku']= $this->Buku_model->get();
        $this->load->view('layout/header_user',$data);
        $this->load->view('profil/vw_profil',$data);
        $this->load->view('layout/footer_user',$data);

    }
    public function buku()
    {   
        $data['judul'] = "Shopping Page";
        $data['user'] = $this->userrole->getBy();
        $data['buku']= $this->Buku_model->get();
        $this->load->view('layout/header_user',$data);
        $this->load->view('profil/vw_buku',$data);
        $this->load->view('layout/footer_user',$data);
    }
    public function keranjang($id)
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Page";
        $data['user'] = $this->userrole->getBy();
        $data['buku'] = $this->Buku_model->getById($id);

        $this->form_validation->set_rules('jumlah',  'Jumlah', 'required', [
            'required' => 'Jumlah Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_user", $data);
            $this->load->view("profil/vw_keranjang", $data);
            $this->load->view("layout/footer_user");
        } else {
            $data = [
                'id_user' => $this->session->userdata('id'),
                'id_buku' => $this->input->post('id'),
                'jumlah' => $this->input->post('jumlah'),
                'total' => $this->input->post('total'),
                'tanggal' => $this->input->post('tanggal'),
            ];
            $this->Keranjang_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Sembako berhasil ditambahkan ke keranjang!</div>');
            redirect('Profil/detail');
        }
    }
}