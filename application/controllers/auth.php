<?php

class Auth extends CI_Controller
{
	public function index()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run()==false)
		{
			$this->load->view('templates/header');
			$this->load->view('auth/login');
			$this->load->view('templates/footer');
		}
		else
		{
			$auth = $this->model_auth->cek_login();
			if ($auth==false)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Username atau Password Anda salah!!
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  					</button></div>');

				redirect('auth');
			}else{
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);

				switch ($auth->role_id){
					case 1: redirect('admin/dashboard_admin');
					break;
					case 2: redirect('welcome');
					break;
					default: break;
				}
			}
		}

	}


 	public function registration()
 	{

 		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password1','Password','required|matches[password2]');
		$this->form_validation->set_rules('password2','Password','required|matches[password1]');

 		if($this->form_validation->run()==false){
			$this->load->view('templates/header');
			$this->load->view('auth/registration');
			$this->load->view('templates/footer');
		}else{
 			$data = array(
 				'id' => '',
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password1'),
				'role_id' => 2,
			);
		$this->db->insert('tb_user',$data);
		redirect('auth');
 		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
/**
 * Created by PhpStorm.
 * User: Heri
 * Date: 30/11/2019
 * Time: 02.01
 */
