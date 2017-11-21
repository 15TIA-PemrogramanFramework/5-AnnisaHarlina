	<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('home').'">
		<i class="fa fa-home"></i> Home</a>
	</li>
	<li>
		<a href="'.site_url('Barang').'">
		<i class="fa fa-table"></i> Data Barang</a>
	</li>
	<li>
		<a href="'.site_url('Pegawai').'">
		<i class="fa fa-user"></i> Data Pegawai</a>
	</li>
	<li>
		<a href="'.site_url('Treatment').'">
		<i class="fa fa-table"></i> Daftar Treatment</a>
	</li>
	<li>
		<a href="'.site_url('Customer').'">
		<i class="fa fa-table"></i> Daftar Customer</a>
	</li>';

	}
