<?php 
/**
* 
*/
class Treatment extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Treatment_model');

	}

	function index()
	{
		//print_r($this->Barang_model->ambil_data());
		$data['Treatment']=$this->Treatment_model->ambil_data();
		$this->load->view('Treatment/treatment_list',$data);
	}

	function tambah(){
		$data=array(
			'nama_treatment'=>set_value('nama_treatment'),
			'harga'=>set_value('harga'),
			'id_treatment'=>set_value('id_treatment'),
			'button'=>'Tambah',
			'action'=>site_url('Treatment/tambah_aksi'),
			);
		$this->load->view('Treatment/treatment_form',$data);
	}

	function tambah_aksi(){
		$data=array(
			'nama_treatment'=>$this->input->post('nama_treatment'),
			'harga'=>$this->input->post('harga'),
			);
		$this->Treatment_model->tambah_data($data);
		redirect(site_url('Treatment'));
	}
	function delete($id){
		$this->Treatment_model->hapus_data($id);
		redirect(site_url('Treatment'));
	}
	function edit($id){
		$brg=$this->Treatment_model->ambil_data_id($id);
		$data=array(
			'nama_treatment'		=>set_value('nama_treatment',$brg->nama_treatment),
			'harga'					=>set_value('harga',$brg->harga),
			'id_treatment'			=>set_value('id_treatment',$brg->id_treatment),
			'button'	=>'Edit',
			'action'	=>site_url('Treatment/edit_aksi'),
			);
		$this->load->view('Treatment/treatment_form',$data);
	}

	function edit_aksi(){
		$data=array(
			'nama_treatment'=>$this->input->post('nama_treatment'),
			'harga'=>$this->input->post('harga'),
			);
		$id_treatment=$this->input->post('id_treatment');
		$this->Treatment_model->edit_data($id_treatment,$data);
		redirect(site_url('Treatment'));
	}


}
?>