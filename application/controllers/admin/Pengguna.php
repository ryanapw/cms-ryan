<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	public function __construct(){
		parent::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('level')<>'Admin'){
            redirect('auth');
        }
	}
    public function index()
	{
		$data = array(
			'judul_halaman' =>"Pengguna"
		);
		$this->db->select('*')->from('user');
		$this->db->order_by('nama','ASC');
		$user = $this->db->get()->result_array();
		$data = array('user' => $user);
		$this->template->load('admin/template','admin/input_pengguna',$data);
	}
    public function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $data = $this->db->get()->result_array();
        if($data<>NULL){
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Data berhasil disimpan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/pengguna');
        }
        $this->User_model->simpan();
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Data berhasil disimpan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
		redirect('admin/pengguna');
	}
	public function hapus($id){
        $where = array('id_user' => $id);
        $this->db->Delete('user', $where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Data berhasil dihapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/pengguna');
    }
	public function edit($id){
        $this->db->select('*')->from('user');
        $this->db->where('id_user', $id);
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
        $this->template->load('admin/template','admin/edit_pengguna', array_merge($data));
    }
	public function update(){
        $data = array(
			'nama' => $this->input->post('name'),
            'level' => $this->input->post('level')
        );
        $where = array('id_user' => $this->input->post('id_user'));
        $this->db->update('user' ,$data, $where);
        redirect('admin/pengguna');
    }
}