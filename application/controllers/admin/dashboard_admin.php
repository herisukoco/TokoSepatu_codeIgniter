<?php

class dashboard_admin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id')!=='1'){
			$this->session->set_flashdata('pesan','<div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
		Akses ditolak, Anda belum login!! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  					</button></div>');
			redirect('auth');
		}
	}

	public function  index()
	{
		$data['invoice']=$this->model_invoice->tampil_data1();
		$data['invoice2']=$this->model_invoice->tampil_data2();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templates_admin/footer');
	}
}
/**
 * Created by PhpStorm.
 * User: Heri
 * Date: 04/12/2019
 * Time: 00.20
 */
