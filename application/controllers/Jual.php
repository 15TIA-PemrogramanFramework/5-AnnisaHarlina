<?php 
/**
* 
*/
class Jual extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Jual_model');
		$this->load->model('Pegawai_model');
		$this->load->model('Customer_model');
		$this->load->model('Barang_model');
		
		/*if($this->session->userdata('logged_in'))
		{
		}
		else
		{
			redirect('login', 'refresh');
		}*/	
	}
	
	function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$data2['username'] = $session_data['username'];
		$data['jual'] = $this->Jual_model->ambil_data();
		$this->load->view('Jual/jual_list',$data);
	}

	function tambah_data()
	{
		$data = array(
			'pegawai' 	=> $this->Pegawai_model->ambil_data(),
			'id_jual' 	=> set_value('id_jual'),
			'customer' 	=> $this->Customer_model->ambil_data(),
			'barang' 	=> $this->Barang_model->ambil_data(),
			'jumlah' 	=> set_value('jumlah'),
			'total' 	=> set_value('total'),
			'tanggal' 	=> set_value('tanggal'),
			'waktu' 	=> set_value('waktu'),
			'button' 	=> 'Simpan',
			'action' 	=> site_url('Jual/tambah_data_aksi'),
			);
		$this->load->view('Jual/jual_form', $data);
	}

	function tambah_data_aksi()
	{
		$data = array(
			'id' 			=> $this->input->post('id'),
			'id_jual' 		=> $this->input->post('id_jual'),
			'id_customer' 	=> $this->input->post('id_customer'),
			'id_barang' 	=> $this->input->post('id_barang'),
			'jumlah' 		=> $this->input->post('jumlah'),
			'total' 		=> $this->input->post('total'),
			'tanggal' 		=> $this->input->post('tanggal'),
			'waktu' 		=> $this->input->post('waktu'),
			);
		$this->Jual_model->tambah_data($data);
		redirect(site_url('jual'));
	}

	function delete($id)
	{
		$this->Jual_model->hapus_data($id);
		redirect(site_url('jual'));
	}

	function edit($id)
	{
		$jual=($this->Jual_model->ambil_data_id($id));

		//Mencari Indeks Customer
		$customer=($this->Customer_model->ambil_data_id($jual->id_customer));
		$arrCustomer = $this->Customer_model->ambil_data();
		$indexCustomer=0; 
		foreach ($arrCustomer as $key => $value) {
			if($value->nama_customer == $customer->nama_customer){
				break;
			}
			else{
				$indexCustomer++;
			}
		}

		//Mencari Indeks Pegawai
		$Pegawai=($this->Pegawai_model->ambil_data_id($jual->id));
		$arrPegawai = $this->Pegawai_model->ambil_data();
		$indexPegawai=0; 
		foreach ($arrPegawai as $key => $value) {
			if($value->nama_pegawai == $Pegawai->nama_pegawai){
				break;
			}
			else{
				$indexPegawai++;
			}
		} 

		//Mencari Indeks Barang
		$Barang=($this->Barang_model->ambil_data_id($jual->id_barang));
		$arrBarang = $this->Barang_model->ambil_data();
		$indexBarang=0; 
		foreach ($arrBarang as $key => $value) {
			if($value->nama_barang == $Barang->nama_barang){
				break;
			}
			else{
				$indexBarang++;
			}
		}

		$data = array(
			'pegawai' => $this->Pegawai_model->ambil_data(),
			'id_jual' => set_value('id_jual',$jual->id_jual),
			'customer' => $this->Customer_model->ambil_data(),
			'barang' => $this->Barang_model->ambil_data(),
			'jumlah' => set_value('jumlah',$jual->jumlah),
			'total' => set_value('total',$jual->total),
			'tanggal' => set_value('tanggal',$jual->tanggal),
			'waktu' => set_value('waktu',$jual->waktu),
			'button' => 'Edit',
			'action' => site_url('Jual/edit_aksi')
			);
		$this->load->view('Jual/jual_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id' => $this->input->post('id'),
			'id_customer' => $this->input->post('id_customer'),
			'id_barang' => $this->input->post('id_barang'),
			'jumlah' => $this->input->post('jumlah'),
			'total' => $this->input->post('total'),
			'tanggal' => $this->input->post('tanggal'),
			'waktu' => $this->input->post('waktu'),
			'id_jual' => $this->input->post('id_jual'),
			);
		$id_jual = $this->input->post('id_jual');
		$this->Jual_model->edit_data($id_jual,$data);
		redirect(site_url('Jual'));
	}

}
?>