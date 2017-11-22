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
                                    <h3>Form Pegawai</h3>

	<form action="<?php echo $action; ?>" method="POST">

	<div class="form-group">
		<label>Nama Pegawai</label>
		<input type="text" placeholder="Masukkan Nama Pegawai" value="<?php echo $nama_pegawai; ?>" class="form-control" name="nama_pegawai">
	</div>

	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" placeholder="Masukkan Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" class="form-control" name="jenis_kelamin">
	</div>

	<div class="form-group">
		<label>No HP</label>
		<input type="text" placeholder="Masukkan No HP" value="<?php echo $nohp; ?>" class="form-control" name="nohp">
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<input type="text" placeholder="Masukkan Alamat" value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>

	<div class="form-group">
		<label>Username</label>
		<input type="text" placeholder="Masukkan Username" value="<?php echo $username; ?>" class="form-control" name="username">
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="text" placeholder="Masukkan Password" value="<?php echo $password; ?>" class="form-control" name="password">
	</div>
	

	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	
	<a href="<?php echo site_url('Pegawai')?>" class="btn btn-default">Cancel</a>

	</form>

	<?php $this->load->view('templates/footer') ?>
