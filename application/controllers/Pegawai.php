	<?php 
	/**
	* 
	*/
	class Pegawai extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Pegawai_model');


				if(!$this->session->userdata('logined') && $this->session->userdata('logined') != true)
			{
				redirect('/');
			}
			
		}

		function index()
		{
			//print_r($this->Barang_model->ambil_data());
			$data['Pegawai']=$this->Pegawai_model->ambil_data();
			$this->load->view('Pegawai/pegawai_list',$data);
		}

		function tambah(){
			$data=array(
				'nama_pegawai'=>set_value('nama_pegawai'),
				'jenis_kelamin'=>set_value('jenis_kelamin'),
				'nohp'=>set_value('nohp'),
				'alamat'=>set_value('alamat'),
				'username'=>set_value('username'),
				'password'=>set_value('password'),
				'id'=>set_value('id'),
				'button'=>'Tambah',
				'action'=>site_url('Pegawai/tambah_aksi'),
				);
			$this->load->view('Pegawai/pegawai_form',$data);
		}

		function tambah_aksi(){
			$data=array(
				'nama_pegawai'=>$this->input->post('nama_pegawai'),
				'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
				'nohp'=>$this->input->post('nohp'),
				'alamat'=>$this->input->post('alamat'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				);
			$this->Pegawai_model->tambah_data($data);
			redirect(site_url('Pegawai'));
		}
		function delete($id){
			$this->Pegawai_model->hapus_data($id);
			redirect(site_url('Pegawai'));
		}
		function edit($id){
			$pgw=$this->Pegawai_model->ambil_data_id($id);
			$data=array(
				'nama_pegawai'		=>set_value('nama_pegawai',$pgw->nama_pegawai),
				'jenis_kelamin'		=>set_value('jenis_kelamin',$pgw->jenis_kelamin),
				'nohp'				=>set_value('nohp',$pgw->nohp),
				'alamat'			=>set_value('alamat',$pgw->alamat),
				'username'			=>set_value('username',$pgw->username),
				'password'			=>set_value('password',$pgw->password),
				'id'		=>set_value('id',$pgw->id),
				'button'	=>'Edit',
				'action'	=>site_url('Pegawai/edit_aksi'),
				);
			$this->load->view('Pegawai/pegawai_form',$data);
		}

		function edit_aksi(){
			$data=array(
				'nama_pegawai'=>$this->input->post('nama_pegawai'),
				'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
				'nohp'=>$this->input->post('nohp'),
				'alamat'=>$this->input->post('alamat'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				);
			$id=$this->input->post('id');
			$this->Pegawai_model->edit_data($id,$data);
			redirect(site_url('Pegawai'));
		}


	}
	 ?>