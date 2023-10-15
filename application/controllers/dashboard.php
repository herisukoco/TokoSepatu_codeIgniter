<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id')!=='2'){
			$this->session->set_flashdata('pesan','<div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
		Login dahulu untuk melanjutkan!! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  					</button></div>');
			redirect('auth');
		}
	}
	public function tambahkan($id){
		$barang = $this->model_barang->find($id);
		$data = array(
			'id'      => $barang->id_brg,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_brg
			/**'options' => array('Size' => 'L')**/
		);

		$this->cart->insert($data);
		redirect('welcome');
	}
	public function detail_keranjang(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('auth/keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('welcome');
	}

	public function pembayaran(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('auth/pembayaran');
		$this->load->view('templates/footer');
	}
	public function proses_pesanan(){
		$is_processed = $this->model_invoice->index();
		if ($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('auth/proses_pesanan');
			$this->load->view('templates/footer');
		}else{
			echo "maaf pesanan anda gagal di proses";
		}

	}
	public function detail($id_brg){
		$data['barang']=$this->model_barang->detail_brg($id_brg);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('auth/detail_barang',$data);
		$this->load->view('templates/footer');
	}
	public function s_pria(){
		$keterangan='sepatu pria';
		$data['barang'] =$this->model_barang->pria($keterangan);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('auth/kategori', $data);
		$this->load->view('templates/footer');
	}

	public function s_wanita(){
		$keterangan='sepatu wanita';
		$data['barang'] =$this->model_barang->wanita($keterangan);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('auth/kategori', $data);
		$this->load->view('templates/footer');
	}

	public function s_anak(){
		$keterangan='sepatu anak';
		$data['barang'] =$this->model_barang->anak($keterangan);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('auth/kategori', $data);
		$this->load->view('templates/footer');
	}

	public function cari(){
		$nama=$this->session->userdata('username');
		$data['invoice']=$this->model_invoice->cari($nama);
		$is_processed =$this->model_invoice->cari($nama);
		if ($is_processed){
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('auth/konfir',$data);
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('auth/belum_pesan');
			$this->load->view('templates/footer');
		}

	}

	public function tambah_aksi($id){
		$id=$this->input->post('id');
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
	$data=array(
		'gambar'=>$gambar,
		'status'=>'sudah dibayar'
	);
	$where=array(
		'id'=>$id
	);
		$this->model_barang->update_data($where,$data,'tb_invoice');
		redirect('dashboard/cari');
	}
}

/**
 * Created by PhpStorm.
 * User: Heri
 * Date: 29/11/2019
 * Time: 19.35
 */
