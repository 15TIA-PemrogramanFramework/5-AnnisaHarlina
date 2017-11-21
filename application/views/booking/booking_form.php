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
								<h3>Form Booking</h3>
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
													<label>Jenis Treatment</label>
													<select class="form-control select2" name="id_treatment" id="Treatment" style="width: 100%;">
														<?php foreach ($treatment as $key => $value) { ?>
															<option value="<?php echo $value->id_treatment; ?>"><?php echo $value->nama_treatment;?></option>
															<?php } ?>
														</select>
													</div>
													<!-- /.form-group -->
													<div class="form-group">
														<label>Tanggal Yang Dibooking</label>
														<input type="date" name="tanggal" value="<?php echo $tanggal;?>" class="form-control pull-right" placeholder="">
													</div>
													<div class="form-group">
														<label>Jam Yang Dibooking</label>
														<input type="" name="waktu" value="<?php echo $waktu;?>" class="form-control pull-right" placeholder="">
													</div>
													<div class="form-group">
														<label>Harga</label>
														<input type="text" name="harga" value="<?php echo $harga;?>" class="form-control pull-right" placeholder="">
													</div>
													<!-- /.form-group -->
													<input type="hidden" name="id_booking" value="<?php echo $id_booking; ?>">
													<center>
														<div style="margin-top: 50px;">
															<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
															<a href="<?php echo site_url('Booking'); ?>" class="btn btn-default">Kembali</a>
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
								var indexTreatment = <?php echo $id_treatment; ?>;
								document.getElementById("Customer").selectedIndex = indexCustomer;
								document.getElementById("Pegawai").selectedIndex = indexPegawai;
								document.getElementById("Treatment").selectedIndex = indexTreatment;
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