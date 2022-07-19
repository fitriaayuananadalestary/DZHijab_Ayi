<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('Hijab_model');
        $this->load->model('User_model','userrole');
        $this->load->model('Keranjang_model');
        $this->load->model('Penjualan_model');
        $this->load->model('Detail_model');
    }

    public function index()
    {
        $data['hijab'] = $this->Hijab_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user',$data);
        $this->load->view('auth/utama',$data);
        $this->load->view('layout/footer_user');

    }

    //  categori
    public function segiempat()
    {
        $data['hijab'] = $this->Hijab_model->filter('Segi Empat');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user',$data);
        $this->load->view('auth/utama',$data);
        $this->load->view('layout/footer_user');
    }
    public function pashmina()
    {
        $data['hijab'] = $this->Hijab_model->filter('Pashmina');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user',$data);
        $this->load->view('auth/utama',$data);
        $this->load->view('layout/footer_user');
    }
    public function dress()
    {
        $data['hijab'] = $this->Hijab_model->filter('Home Dress');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user',$data);
        $this->load->view('auth/utama',$data);
        $this->load->view('layout/footer_user');
    }
    public function motif()
    {
        $data['hijab'] = $this->Hijab_model->filter('Segi Empat Motif');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user',$data);
        $this->load->view('auth/utama',$data);
        $this->load->view('layout/footer_user');
    }
    public function manset()
    {
        $data['hijab'] = $this->Hijab_model->filter('Manset');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user',$data);
        $this->load->view('auth/utama',$data);
        $this->load->view('layout/footer_user');
    }
    public function bergo()
    {
        $data['hijab'] = $this->Hijab_model->filter('Bergo');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user',$data);
        $this->load->view('auth/utama',$data);
        $this->load->view('layout/footer_user');
    }
    public function inner()
    {
        $data['hijab'] = $this->Hijab_model->filter('Inner Hijab');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user',$data);
        $this->load->view('auth/utama',$data);
        $this->load->view('layout/footer_user');
    }
    public function keranjang($id)
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Hijab";
        $data['user'] = $this->userrole->getBy();
        $data['hijab'] = $this->Hijab_model->getById($id);
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('jumlah',  'Jumlah', 'required', [
            'required' => 'Jumlah Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['jlh'] = $this->Keranjang_model->jumlah();
            $this->load->view("layout/header_user", $data);
            $this->load->view("profil/vw_keranjang", $data);
            $this->load->view("layout/footer_user");
        } else {
            $data = [
                'id_user' => $this->session->userdata('id'),
                'id_hijab' => $this->input->post('id'),
                'jumlah' => $this->input->post('jumlah'),
                'total' => $this->input->post('total'),
                'tanggal' => $this->input->post('tanggal'),
            ];
            $this->Keranjang_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            hijab berhasil ditambahkan ke keranjang!</div>');
            redirect('Utama/detail');
        }
    }

    public function detail()
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Keranjang";
        $data['user'] = $this->userrole->getBy();
        $data['hijab'] = $this->Hijab_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/header_user", $data);
        $this->load->view("profil/vw_detail_keranjang", $data);
        $this->load->view("layout/footer_user");
    }
    public function delkeranjang($id)
    {
        $this->Keranjang_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> hijab berhasil dihapus dari keranjang!</div>');
        redirect('Utama/detail');
    }
    public function pesanan()
    {
        $jumlah_beli = count($this->input->post('hijab'));
        $data_p = [
            'no_penjualan' => $this->input->post('no_penjualan'),
            'id_user' => $this->session->userdata('id'),
            'tanggal' => $this->input->post('tanggal'),
            'total_bayar' => $this->input->post('bayar'),
            'alamat' => $this->input->post('alamat'),
            'pembayaran' => $this->input->post('pembayaran'),
            'keterangan' => $this->input->post('keterangan'),

        ];
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '5000';
            $config['upload_path'] = './template/assets/img/pembayaran/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data_detail = [];
        for ($i = 0; $i < $jumlah_beli; $i++) {
            array_push($data_detail, ['id_hijab' => $this->input->post('hijab')[$i]]);
            $data_detail[$i]['no_penjualan'] = $this->input->post('no_penjualan');
            $data_detail[$i]['id_user'] = $this->session->userdata('id');
            $data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
            $data_detail[$i]['total'] = $this->input->post('total_p')[$i];
        }
        if ($this->Penjualan_model->insert($data_p, $upload_image) && $this->Detail_model->insert($data_detail)) {
            for ($i = 0; $i < $jumlah_beli; $i++){
                $this->Hijab_model->min_stok($data_detail[$i]['jumlah'], $data_detail[$i]['id_hijab']) or die('gagal min stok');
            }
            $id_us = $this->session->userdata('id');
            $this->Keranjang_model->delete_all($id_us);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Berhasil dibuat!</div>');
            redirect('Utama');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Gagal dibuat!</div>');
            redirect('Utama');
        }
    }
    public function profil(){
        $data['judul'] = "Halaman Profil";
        $data['user'] = $this->userrole->getBy();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/header_user", $data);
        $this->load->view("profil/vw_profil", $data);
        $this->load->view("layout/footer_user");
    }

    public function pembelian()
    {
        $data['judul'] = "Data Pembelian";
        $data['user'] = $this->userrole->getBy();
        $data['pembelian'] = $this->Penjualan_model->getByUser();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user', $data);
        $this->load->view('profil/pembelian_user', $data);
        $this->load->view('layout/footer_user', $data);
    }

    public function statusbeli($id)
    {
        $data['judul'] = "Ubah Data Pembelian";
        $data['user'] = $this->userrole->getBy();
        $data['pembelian'] = $this->Penjualan_model->getByUser2($id);
        $data['detailbeli'] = $this->Detail_model->getByUser($id);
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_user", $data);
            $this->load->view("profil/detail_beli", $data);
            $this->load->view("layout/footer_user");
        } else {
            $status = $this->input->post('status');
            $nojual = $this->input->post('no_penjualan');
            $this->Penjualan_model->updatestatus($status, $nojual);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berhasil DiUbah!</div>');
            redirect('Utama/pembelian');
        }
    }
    
}