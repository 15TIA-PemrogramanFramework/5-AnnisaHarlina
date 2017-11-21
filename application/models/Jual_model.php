<?php
/**
 * 
 */
 class Jual_model extends CI_Model
 {
 	public $nama_table = 'jual';
	public $id = 'id_jual';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function ambil_data()
 	{
 		$this->db->distinct();
 		$this->db->select('j.id_jual, pg.id, pg.nama_pegawai, c.id_customer, c.nama_customer, ba.id_barang, ba.nama_barang, j.jumlah, j.total, j.tanggal, j.waktu');
 		$this->db->from('jual j');
 		$this->db->join('customer c', 'c.id_customer = j.id_customer');
 		$this->db->join('pegawai pg', 'pg.id = j.id');
 		$this->db->join('barang ba', 'ba.id_barang = j.id_barang');
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

 	function edit_data($id,$data)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>