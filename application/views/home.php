<?php $this->load->view('templates/header');?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                <div class="col-md-12">
                <h3><?php echo tanggal(); ?></h3>
                </div>
                    <div class="col-md-12">
                     <h2>Home Admin</h2>
                     <center>
                <p><h1> Selamat datang, <?php echo $this->session->userdata('username'); ?>
                </h1></p></center>
                    </div>
                </div>
<?php $this->load->view('templates/footer'); ?>