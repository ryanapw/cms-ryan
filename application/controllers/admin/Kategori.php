<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
	}
    public function index()
	{
		$data = array(
			'judul_halaman' =>"Halaman Kategpri"
		);
		$this->db->select('*')->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array();
		$data = array('kategori' => $kategori);
		$this->template->load('admin/template','admin/input_kategori',$data);
	}
    public function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$this->input->post('nama_kategori'));
        $data = $this->db->get()->result_array();
        if($data<>NULL){
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Kategori konten sudah digunakan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/kategori');
        }
		$data = array(
			'nama_kategori'   => $this->input->post('nama_kategori')
		);
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Data menambahkan kategori
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
		redirect('admin/kategori');
	}
	public function delete_data($id){
        $where = array('id_kategori' => $id);
        $this->db->Delete('kategori', $where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Kategori berhasil dihapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/kategori');
    }
	public function edit($id){
        $this->db->select('*')->from('kategori');
        $this->db->where('id_kategori', $id);
        $kategori = $this->db->get()->result_array();
        $data = array('kategori' => $kategori);
        $this->template->load('admin/template','admin/edit_kategori', $data);
    }
	public function update(){
        $where = array(
            'id_kategori' => $this->input->post('id_kategori')
        );
        $data = array(
            'nama_kategori'    => $this->input->post('nama_kategori')
        );
        $this->db->update('kategori',$data,$where);
        redirect('admin/kategori');
    }
}