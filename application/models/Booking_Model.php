<?php
/**
 * 
 */
 class Booking_Model extends CI_Model
 {
 	public $nama_table = 'booking';
	public $id = 'id_booking';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	
 	function ambil_data()
 	{
 		$this->db->distinct();
 		$this->db->select('b.id_booking, p.id, p.nama_pegawai, c.id_customer, c.nama_customer, t.id_treatment, t.nama_treatment, b.tanggal, b.waktu, b.harga');
 		$this->db->from('booking b');
 		$this->db->join('customer c', 'c.id_customer = b.id_customer');
 		$this->db->join('pegawai p', 'p.id = b.id');
 		$this->db->join('treatment t', 't.id_treatment = b.id_treatment');
 		return $this->db->get($this->nama_table)->result();


 	}

 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($id_booking,$data)
 	{
 		$this->db->where($this->id, $id_booking);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>