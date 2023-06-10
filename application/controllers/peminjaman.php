<?php

class Peminjaman Extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_peminjaman');
    }

    public function index()
    {
        $isi['content'] = 'peminjaman/v_peminjaman';
        $isi['judul']   = 'Data Peminjaman Buku';
        $isi['data']    = $this->m_peminjaman->getDataPeminjaman();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_peminjaman()
    {
        $isi['content']       = 'peminjaman/tambah_peminjaman';
        $isi['judul']         = 'Form Tambah Peminjaman';
        $isi['id_peminjaman'] = $this->m_peminjaman->id_peminjaman();
        $isi['peminjam']      = $this->db->get('anggota')->result();
        $isi['buku']      = $this->db->get('buku')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id_peminjaman'    => $this->input->post('id_peminjaman'),
            'id_anggota'       => $this->input->post('id_anggota'),
            'id_buku'          => $this->input->post('id_buku'),
            'tgl_peminjaman'   => $this->input->post('tgl_peminjaman'),
            'tgl_pengembalian' => $this->input->post('tgl_pengembalian'),
        );
        $query = $this->db->insert('peminjaman', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Transaksi Berhasil di Simpan');
            redirect('peminjaman');
        }
    }

    public function jumlah_buku()
    {
        $id = $this->input->post('id');
        $data = $this->m_peminjaman->jumlah_buku($id);
        echo json_encode($data);
    }

    public function kembalikan($id)
    {
        $data = $this->m_peminjaman->getDataById_peminjaman($id);
        $kembalikan = array(
            'id_anggota'       => $data['id_anggota'],
            'id_buku'          => $data['id_buku'],
            'tgl_peminjaman'   => $data['tgl_peminjaman'],
            'tgl_pengembalian' => $data['tgl_pengembalian'],
            'tgl_kembalikan'   => date('Y-m-d')
        );

        $query = $this->db->insert('pengembalian', $kembalikan);
        if ($query = true) {
            $delete = $this->m_peminjaman->deletePeminjaman($id);
            if ($delete = true) {
                $this->session->set_flashdata('info', 'Buku Berhasil di Kembalikan');
                redirect('peminjaman');
            }
        }
    }
}