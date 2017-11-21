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
                                    <h3>Form Customer</h3>

	<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama Customer</label>
		<input type="text" placeholder="Masukkan Nama Pelanggan" value="<?php echo $nama_customer; ?>" class="form-control" name="nama_customer">
		<label>No HP</label>
		<input type="text" placeholder="Masukkan Nomor HP Pelanggan" value="<?php echo $no_hp; ?>" class="form-control" name="no_hp">
		<label>Alamat</label>
		<input type="text" placeholder="Masukkan Alamat Pelanggan" value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>
	<input type="hidden" name="id_customer" value="<?php echo $id_customer; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	
	<a href="<?php echo site_url('Customer')?>" class="btn btn-default">Cancel</a>

	</form>



	<?php $this->load->view('templates/footer') ?>