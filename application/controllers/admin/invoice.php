<?php

class Invoice extends CI_Controller{
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

	public function index(){
	$data['invoice'] = $this->model_invoice->tampil_data();
	$this->load->view('templates_admin/header');
	$this->load->view('templates_admin/sidebar');
	$this->load->view('admin/invoice', $data);
	$this->load->view('templates_admin/footer');
}
public function detail($id_invoice){
	$data['invoice']=$this->model_invoice->ambil_id_invoice($id_invoice);
	$data['pesanan']=$this->model_invoice->ambil_id_pesanan($id_invoice);
	$this->load->view('templates_admin/header');
	$this->load->view('templates_admin/sidebar');
	$this->load->view('admin/detail_invoice', $data);
	$this->load->view('templates_admin/footer');
}

	public function konfirmasi($id){
		$data=array(
			'status1'=>'sudah dikonfirmasi',
			'status2'=>'sedang diproses'
		);
		$where=array(
			'id'=>$id
		);
		$this->model_barang->update_data($where,$data,'tb_invoice');
		redirect('admin/invoice');
	}


}
/**
 * Created by PhpStorm.
 * User: Heri
 * Date: 12/12/2019
 * Time: 22.02
 */
