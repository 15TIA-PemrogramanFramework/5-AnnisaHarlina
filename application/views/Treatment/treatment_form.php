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
                                    <h3>Form Treatment</h3>

	<form action="<?php echo $action; ?>" method="POST">


	<div class="form-group">
		<label>Jenis Treatment</label>
		<input type="text" placeholder="Masukkan Jenis Treatment" value="<?php echo $nama_treatment; ?>" class="form-control" name="nama_treatment">
	</div>
	<div class="form-group">
		<label>Harga Treatment</label>
		<input type="text" placeholder="Masukkan Harga Treatment" value="<?php echo $harga; ?>" class="form-control" name="harga">
	</div>
	<input type="hidden" name="id_treatment" value="<?php echo $id_treatment; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	
	<a href="<?php echo site_url('Treatment')?>" class="btn btn-default">Cancel</a>

	</form>
<?php $this->load->view('templates/footer') ?>