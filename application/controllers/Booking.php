<?php 
/**
* 
*/
class Booking extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Booking_Model');
		$this->load->model('Pegawai_model');
		$this->load->model('Customer_model');
		$this->load->model('Treatment_model');
		
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
		$data['booking'] = $this->Booking_Model->ambil_data();
		$this->load->view('booking/booking_list',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah_data()
	{
		$data = array(
			'pegawai' => $this->Pegawai_model->ambil_data(),
			'id_booking' => set_value('id_booking'),
			'customer' => $this->Customer_model->ambil_data(),
			'treatment' => $this->Treatment_model->ambil_data(),
			'tanggal' => set_value('tanggal'),
			'waktu' => set_value('waktu'),
			'harga' => set_value('harga'),
			'button' => 'Simpan',
			'action' => site_url('Booking/tambah_data_aksi'),
			);
		$this->load->view('booking/booking_form', $data);
	}

	function tambah_data_aksi()
	{
		$data = array(
			'id' => $this->input->post('id'),
			'id_booking' => $this->input->post('id_booking'),
			'id_customer' => $this->input->post('id_customer'),
			'id_treatment' => $this->input->post('id_treatment'),
			'tanggal' => $this->input->post('tanggal'),
			'waktu' => $this->input->post('waktu'),
			' harga' => $this->input->post('harga'),
			);
		$this->Booking_Model->tambah_data($data);
		redirect(site_url('booking'));
	}

	function delete($id)
	{
		$this->Booking_Model->hapus_data($id);
		redirect(site_url('booking'));
	}

	function edit($id)
	{
		$booking=$this->Booking_Model->ambil_data_id($id);

		//Mencari Indeks Customer
		$Customer=($this->Customer_model->ambil_data_id($booking->id_customer));
		$arrCustomer = $this->Customer_model->ambil_data();
		$indexCustomer=0; 
		foreach ($arrCustomer as $key => $value) {
			if($value->nama_customer == $Customer->nama_customer){
				break;
			}
			else{
				$indexCustomer++;
			}
		}

		//Mencari Indeks Pegawai
		$Pegawai=($this->Pegawai_model->ambil_data_id($booking->id));
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

		//Mencari Indeks Treatment
		$Treatment=($this->Treatment_model->ambil_data_id($booking->id_treatment));
		$arrTreatment = $this->Treatment_model->ambil_data();
		$indexTreatment=0; 
		foreach ($arrTreatment as $key => $value) {
			if($value->nama_treatment == $Treatment->nama_treatment){
				break;
			}
			else{
				$indexTreatment++;
			}
		}

		$data = array(
			'pegawai' => $this->Pegawai_model->ambil_data(),
			'id_booking' => set_value('id_booking',$booking->id_booking),
			'customer' => $this->Customer_model->ambil_data(),
			'treatment' => $this->Treatment_model->ambil_data(),
			'tanggal' => set_value('tanggal',$booking->tanggal),
			'waktu' => set_value('waktu',$booking->waktu),
			'harga' => set_value('harga',$booking->harga),
			'button' => 'Edit',
			'action' => site_url('booking/edit_aksi')
			);
		$this->load->view('booking/booking_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id' => $this->input->post('id'),
			'id_customer' => $this->input->post('id_customer'),
			'id_treatment' => $this->input->post('id_treatment'),
			'tanggal' => $this->input->post('tanggal'),
			'waktu' => $this->input->post('waktu'),
			'harga' => $this->input->post('harga'),
			);
		$id_booking = $this->input->post('id_booking');
		$this->Booking_Model->edit_data($id_booking,$data);
		redirect(site_url('booking'));
	}

}
?>