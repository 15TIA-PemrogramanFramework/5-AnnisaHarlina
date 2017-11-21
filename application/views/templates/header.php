<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Salon</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url ('assets/') ?>css/bootstrap.css" rel="stylesheet")/>
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url ('assets/') ?>css/font-awesome.css" rel="stylesheet"')/>
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url ('assets/') ?>js/morris/morris-0.4.3.min.css" rel="stylesheet"')/>
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url ('assets/') ?>css/custom.css" rel="stylesheet"')/>
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">Daniico Salon</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="login" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
               
                <nav class="navbar-default navbar-side" role="navigation">

            <div class="sidebar-collapse">

                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url ('assets/img/22.png" class="user-image img-responsive"'); ?>"/>
					</li>
				
					
                    

		<li>
	                        <a  href="home"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
	                    </li>
	                     <li>  
	                        <a  href="<?php echo site_url('Customer') ?>"><i class="fa fa-female fa-2x"></i>Data Customer</a>
	                    </li>
	                    <li>
	                        <a  href="<?php echo site_url('Treatment') ?>"><i class="fa fa-scissors fa-2x"></i>Data Treatment</a>
	                    </li>
							   <li  >
	                        <a   href="<?php echo site_url('Barang') ?>"><i class="fa fa-bar-chart-o fa-2x"></i>Data Barang</a>
	                    </li>	
	                      <li  >
	                        <a  href="<?php echo site_url('Jual') ?>"><i class="fa fa-shopping-cart fa-2x"></i>Data Penjualan</a>
	                    </li>	
	                     <li  >
	                        <a  href="<?php echo site_url('booking') ?>"><i class="fa fa-calendar-o fa-2x"></i>Data Bookingan</a>
	                    </li>

	                    <?php 
	                    $status = $this->session->userdata('status');
	                    if($status=='admin'){
	                     ?>

	                     <li  >
	                        <a  href="<?php echo site_url('Pegawai') ?>"><i class="fa fa-users fa-2x"></i>Data Pegawai</a>
	                    </li>  <?php } ?>             
	                    
                </ul>
               
            </div>
            
        </nav>  

        