<?php 
$this->load->view('templates/header');
$status = $this->session->userdata('status');
?>
</div>
<!-- End Sidebar scroll-->
</aside>
<div id="page-wrapper" >
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
				<?php echo anchor(site_url("Jual/tambah_data"),'<i class="fa fa-plus"></i> Tambah Data','class= "btn btn-primary"'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Pegawai</th>
										<th>Nama Customer</th>
										<th>Barang Yang Dijual</th>
										<th>Jumlah</th>
										<th>Total Harga</th>
										<th>Tanggal</th>
										<th>Waktu</th>
										<?php if($status == 'admin') { ?>
										<th>Aksi</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($jual as $key => $value) {?>

										<tr>
											<td><?php echo $key+1; ?></td>
											<td><?php echo $value->nama_pegawai; ?></td>
											<td><?php echo $value->nama_customer; ?></td>
											<td><?php echo $value->nama_barang; ?></td>
											<td><?php echo $value->jumlah; ?></td>
											<td><?php echo $value->total; ?></td>
											<td><?php echo $value->tanggal; ?></td>
											<td><?php echo $value->waktu; ?></td>
											<?php if($status == 'admin') { ?>
											<td>
												<?php echo anchor(site_url('Jual/edit/'.$value->id_jual),
													'<i class="fa fa-pencil"></i>',
													'class="btn btn-warning"');
												?>

												<?php echo anchor(site_url('Jual/delete/'.$value->id_jual),
													'<i class="fa fa-trash"></i>',
													'class="btn btn-danger"'); ?>
											</td>
											<?php } ?>
										</tr>
										<?php } ?>

									</tbody>

								</table>
							</div>
							<?php 
							$this->load->view('templates/footer');

							?>

							<script type="text/javascript">
								$(document).ready(function() {
									$('#example').DataTable();
								});
							</script>