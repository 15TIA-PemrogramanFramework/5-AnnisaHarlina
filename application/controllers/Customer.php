<?php 
/**
* 
*/
class Customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
		
	}

	function index()
	{
		//print_r($this->Barang_model->ambil_data());
		$data['Customer']=$this->Customer_model->ambil_data();
		$this->load->view('Customer/customer_list',$data);
	}

	function tambah(){
		$data=array(
			'nama_customer'=>set_value('nama_customer'),
			'no_hp'=>set_value('no_hp'),
			'alamat'=>set_value('alamat'),
			'id_customer'=>set_value('id_customer'),
			'button'=>'Tambah',
			'action'=>site_url('Customer/tambah_aksi'),
			);
		$this->load->view('Customer/customer_form',$data);
	}

	function tambah_aksi(){
		$data=array(
			'nama_customer'	=>$this->input->post('nama_customer'),
			'no_hp'			=>$this->input->post('no_hp'),
			'alamat'		=>$this->input->post('alamat'),
			);
		$this->Customer_model->tambah_data($data);
		redirect(site_url('Customer'));
	}
	function delete($id){
		$this->Customer_model->hapus_data($id);
		redirect(site_url('customer'));
	}
	function edit($id_customer){
		$cus=$this->Customer_model->ambil_data_id($id_customer);
		$data=array(
			
			'id_customer'		=>set_value('id_customer',$cus->id_customer),
			'nama_customer'		=>set_value('nama_customer',$cus->nama_customer),
			'no_hp'				=>set_value('no_hp',$cus->no_hp),
			'alamat'			=>set_value('alamat',$cus->alamat),
			'button'	=>'Edit',
			'action'	=>site_url('Customer/edit_aksi'),
			);
		$this->load->view('Customer/customer_form',$data);
	}

	function edit_aksi(){
		$data=array(
			'id_customer'	=>$this->input->post('id_customer'),
			'nama_customer'	=>$this->input->post('nama_customer'),
			'no_hp'			=>$this->input->post('no_hp'),
			'alamat'		=>$this->input->post('alamat'),
			);
		$id_customer=$this->input->post('id_customer');
		$this->Customer_model->edit_data($id_customer,$data);
		redirect(site_url('Customer'));
	}


}
?>