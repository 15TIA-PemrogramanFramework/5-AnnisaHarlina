	<?php $this->load->view('templates/header') ?>

	<div id="page-wrapper" >
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<!-- Form Elements -->
					<div class="panel panel-default">

						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
								<h3>Form Penjualan</h3>
									<form action="<?php echo $action; ?>" method="POST">
										<div class="form-group">
											<label>Nama Pegawai</label>
											<select class="form-control select2" name="id" id="pegawai" style="width: 100%;">
												<?php foreach ($pegawai as $key => $value) { ?>
													<option value="<?php echo $value->id; ?>"><?php echo $value->nama_pegawai;?></option>
													<?php } ?>
												</select>
											</div>
											<!-- /.form-group -->
											<div class="form-group">
												<label>Nama Customer</label>
												<select class="form-control select2" name="id_customer" id="Customer" style="width: 100%;">
													<?php foreach ($customer as $key => $value) { ?>
														<option value="<?php echo $value->id_customer; ?>"><?php echo $value->nama_customer;?></option>
														<?php } ?>
													</select>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label>Barang yang Dijual</label>
													<select class="form-control select2" name="id_barang" id="Barang" style="width: 100%;">
														<?php foreach ($barang as $key => $value) { ?>
															<option value="<?php echo $value->id_barang; ?>"><?php echo $value->nama_barang;?></option>
															<?php } ?>
														</select>
													</div>
													<!-- /.form-group -->
													<div class="form-group">
													<label>Jumlah</label>
														<input type="" name="jumlah" value="<?php echo $jumlah;?>" class="form-control pull-right" placeholder="">
													</div>
													<!-- /.form-group -->
													<div class="form-group">
													<label>Total Harga</label>
														<input type="" name="total" value="<?php echo $total;?>" class="form-control pull-right" placeholder="">
													</div>
													<!-- /.form-group -->
													<div class="form-group">
														<label>Tanggal Pembelian</label>
														<input type="date" name="tanggal" value="<?php echo $tanggal;?>" class="form-control pull-right" placeholder="">
													</div>
													<div class="form-group">
														<label>Waktu Pembelian</label>
														<input type="" name="waktu" value="<?php echo $waktu;?>" class="form-control pull-right" placeholder="">
													</div>
													<!-- /.form-group -->
													<input type="hidden" name="id_jual" value="<?php echo $id_jual; ?>">
													<center>
														<div style="margin-top: 50px;">
															<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
															<a href="<?php echo site_url('Jual'); ?>" class="btn btn-default">Kembali</a>
															<input type="reset" class="btn btn-default">
														</div>
													</center>
												</form>
											</div>
										</div>
										<!-- /.row -->
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box -->
							</section>
							<!-- /.content -->
						</div> 
						<!-- /.content-wrapper -->
						<script>
							function matchIndex() {
								var indexCustomer = <?php echo $id_customer; ?>;
								var indexPegawai = <?php echo $id; ?>;
								var indexJual = <?php echo $id_jual; ?>;
								document.getElementById("Customer").selectedIndex = indexCustomer;
								document.getElementById("Pegawai").selectedIndex = indexPegawai;
								document.getElementById("Jual").selectedIndex = indexJual;
							}
						</script>
						<?php 
	$this->load->view('templates/footer');

	?>

	<script type="text/javascript">
		$(document).ready(function() {
		$('#example').DataTable();
		});
	</script>