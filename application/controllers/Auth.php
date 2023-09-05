<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
    public function login()
	{
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user');
        $this->db->where('username', $username)->where('password', $password);
        $data = $this->db->get()->row();
        if($data==NULL){
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Username salah
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('auth');
        }   else if($password==$data->password){
            $data = array(
                'id_user' => $data->id_user,
                'nama' => $data->nama,
                'username' => $data->username,
                'level' => $data->level,
            );
            $this->session->set_userdata($data);
            redirect('admin/dashboard/index');
        }   else {
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Password salah
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        redirect('auth');
        }
        
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}