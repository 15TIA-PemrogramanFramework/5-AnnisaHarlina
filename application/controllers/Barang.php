<?php 
/**
* 
*/
class Barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');


			if(!$this->session->userdata('logined') && $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
		
	}

	function index()
	{
		//print_r($this->Barang_model->ambil_data());
		$data['Barang']=$this->Barang_model->ambil_data();
		$this->load->view('Barang/barang_list',$data);
	}

	function tambah(){
		$data=array(
			'nama_barang'=>set_value('nama_barang'),
			'harga_barang'=>set_value('harga_barang'),
			'id_barang'=>set_value('id_barang'),
			'button'=>'Tambah',
			'action'=>site_url('Barang/tambah_aksi'),
			);
		$this->load->view('Barang/barang_form',$data);
	}

	function tambah_aksi(){
		$data=array(
			'nama_barang'=>$this->input->post('nama_barang'),
			'harga_barang'=>$this->input->post('harga_barang'),
			);
		$this->Barang_model->tambah_data($data);
		redirect(site_url('Barang'));
	}
	function delete($id){
		$this->Barang_model->hapus_data($id);
		redirect(site_url('Barang'));
	}
	function edit($id){
		$brg=$this->Barang_model->ambil_data_id($id);
		$data=array(
			'nama_barang'		=>set_value('nama_barang',$brg->nama_barang),
			'harga_barang'		=>set_value('harga_barang',$brg->harga_barang),
			'id_barang'			=>set_value('id_barang',$brg->id_barang),
			'button'	=>'Edit',
			'action'	=>site_url('Barang/edit_aksi'),
			);
		$this->load->view('Barang/barang_form',$data);
	}

	function edit_aksi(){
		$data=array(
			'nama_barang'=>$this->input->post('nama_barang'),
			'harga_barang'=>$this->input->post('harga_barang'),
			);
		$id_barang=$this->input->post('id_barang');
		$this->Barang_model->edit_data($id_barang,$data);
		redirect(site_url('Barang'));
	}


}
 ?>