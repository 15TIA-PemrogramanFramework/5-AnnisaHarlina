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
                                    <h3>Form Data Barang</h3>
	<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" placeholder="Masukkan Nama Barang" value="<?php echo $nama_barang; ?>" class="form-control" name="nama_barang">
	</div>
	<div class="form-group">
		<label>Harga Barang</label>
		<input type="text" placeholder="Masukkan Harga Barang" value="<?php echo $harga_barang; ?>" class="form-control" name="harga_barang">
	</div>
	<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	
	<a href="<?php echo site_url('Barang')?>" class="btn btn-default">Cancel</a>

	</form>

	<?php $this->load->view('templates/footer') ?>