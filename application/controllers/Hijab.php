<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hijab extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('Hijab_model');

    }

    public function index()
    {
        $data['judul'] = "Halaman Hijab";
        $data['hijab'] = $this->Hijab_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('hijab/vw_hijab',$data);
        $this->load->view('layout/footer',$data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Hijab";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hijab'] = $this->Hijab_model->get();
        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'nama wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis', 'jenis', 'required', [
            'required' => 'jenis Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'stok', 'required', [
            'required' => 'stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('warna', 'warna', 'required', [
            'required' => 'warna Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required', [
            'required' => 'harga Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("hijab/vw_tambah_hijab", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis'),
                'stok' => $this->input->post('stok'),
                'warna' => $this->input->post('warna'),
                'harga' => $this->input->post('harga'),
            

            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5000';
                $config['upload_path'] = './template/assets/img/hijab/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Hijab_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data hijab Berhasil Ditambah!</div>');
            redirect('Hijab');
        }
    }
    function edit($id)
    {
        $data['judul'] = "Halaman Edit Hijab";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hijab'] = $this->Hijab_model->getById($id);
        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'nama wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis', 'jenis', 'required', [
            'required' => 'jenis Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'stok', 'required', [
            'required' => 'stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('warna', 'warna', 'required', [
            'required' => 'warna Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required', [
            'required' => 'harga Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("hijab/vw_ubah_hijab", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis'),
                'stok' => $this->input->post('stok'),
                'warna' => $this->input->post('warna'),
                'harga' => $this->input->post('harga'),
            
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5000';
                $config['upload_path'] = './template/assets/img/hijab/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['hijab']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'template/img/hijab/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Hijab_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jilbab Berhasil Diubah!</div>');
            redirect('Hijab');
        }
    }

    public function hapus($id)
    {
        $this->Hijab_model->delete($id);
        $eror = $this->db->error();
        if ($eror['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data prodi tidak berhasil di hapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i>Data prodi berhasil di hapus!</div>');
        }
        redirect('Hijab');
    }

}