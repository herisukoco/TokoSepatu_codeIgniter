<?php
class data_barang extends CI_Controller
{
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
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang',$data);
		$this->load->view('templates_admin/footer');
	}
	public function  tambah_aksi()
	{
		$nama_brg 	= $this->input->post('nama_brg');
		$keterangan = $this->input->post('keterangan');
		$harga 		= $this->input->post('harga');
		$stock 		= $this->input->post('stock');
		$gambar		= $_FILES['gambar']['name'];
		if ($gambar =''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('gambar')){
				echo "gambar gagal di upload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		$data =array(
		'nama_brg' 		=> $nama_brg,
		'keterangan' 	=> $keterangan,
		'harga' 		=> $harga,
		'stock' 		=> $stock,
		'gambar'		=> $gambar
		);
	$this->model_barang->tambah_barang($data, 'tb_barang');
	redirect('admin/data_barang/index');
	}
	public function edit($id){
		$where	= array('id_brg' =>$id);
		$data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang',$data);
		$this->load->view('templates_admin/footer');
	}
	public function update(){
		$id				= $this->input->post('id_brg');
		$nama_brg		= $this->input->post('nama_brg');
		$keterangan		= $this->input->post('keterangan');
		$harga			= $this->input->post('harga');
		$stock			= $this->input->post('stock');
		$data	= array(
			'nama_brg'		=> $nama_brg,
			'keterangan' 	=> $keterangan,
			'harga'			=> $harga,
			'stock' 		=> $stock
		);
		$where = array(
			'id_brg'=> $id
		);
		$this->model_barang->update_data($where,$data,'tb_barang');
		redirect('admin/data_barang/index');
	}
	public function hapus($id){
		$where = array('id_brg'=>$id);
		$this->model_barang->hapus_data($where, 'tb_barang');
		redirect('admin/data_barang/index');
	}
}
/**
 * Created by PhpStorm.
 * User: Heri
 * Date: 04/12/2019
 * Time: 01.34
 */
