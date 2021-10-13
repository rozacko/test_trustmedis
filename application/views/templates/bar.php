<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TrustMedis</title>

    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/css/select2/select2.min.css" rel="stylesheet" />

	<link href="<?php echo base_url() ?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">

</head>

<body>

	<div id="wrapper">

	    <nav class="navbar-default navbar-static-side" role="navigation">
	        <div class="sidebar-collapse">
	            <ul class="nav metismenu" id="side-menu">
	                <li class="nav-header">
	                    <div class="dropdown profile-element">
	                        <img alt="image" class="rounded-circle" style="width: 100px;" src="<?php echo base_url() ?>assets/img/profile.jpg"/>
	                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
	                            <span class="block m-t-xs font-bold"><?= $this->session->userdata('pegawai_nama') ?></span>
	                            <span class="text-muted text-xs block">Action <b class="caret"></b></span>
	                        </a>
	                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
	                            <li><a class="dropdown-item" href="<?php echo base_url() ?>Logout/">Logout</a></li>
	                        </ul>
	                    </div>
	                    <div class="logo-element">
	                        TrusMedis
	                    </div>
	                </li>
	                <li class="<?= ($this->uri->segment(1) === 'Pegawai') ? 'landing_link' : '' ?>">
	                    <a href="<?php echo base_url() ?>Pegawai/"><i class="fa fa-address-book"></i> <span class="nav-label">Master Pegawai</span></a>
	                </li>
	                <li class="<?= ($this->uri->segment(1) === 'Poli_klinik') ? 'landing_link' : '' ?>">
	                    <a href="<?php echo base_url() ?>Poli_klinik/"><i class="fa fa-home"></i> <span class="nav-label">Master Poli Klinik</span></a>
	                </li>
	                <li class="<?= ($this->uri->segment(1) === 'Jadwal') ? 'landing_link' : '' ?>">
	                    <a href="<?php echo base_url() ?>Jadwal/"><i class="fa fa-list-ol"></i> <span class="nav-label">Master Jadwal</span></a>
	                </li>
	                <li class="<?= ($this->uri->segment(1) === 'Report1') ? 'landing_link' : '' ?>">
	                    <a href="<?php echo base_url() ?>Report1/"><i class="fa fa-sitemap"></i> <span class="nav-label">Report 1</span></a>
	                </li>
	                <li class="<?= ($this->uri->segment(1) === 'Report2') ? 'landing_link' : '' ?>">
	                    <a href="<?php echo base_url() ?>Report2/"><i class="fa fa-sitemap"></i> <span class="nav-label">Report 2</span></a>
	                </li>
	                <li class="<?= ($this->uri->segment(1) === 'Report3') ? 'landing_link' : '' ?>">
	                    <a href="<?php echo base_url() ?>Report3/"><i class="fa fa-sitemap"></i> <span class="nav-label">Report 3</span></a>
	                </li>
	                <!-- <li class="<?= ($this->uri->segment(1) === 'Skor_AO') ? 'landing_link' : '' ?>">
	                    <a href="<?php echo base_url() ?>Skor_AO/"><i class="fa fa-list-ol"></i> <span class="nav-label">AO Score</span></a>
	                </li> -->
	                <!-- <li>
	                    <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
	                    <ul class="nav nav-second-level collapse">
	                        <li>
	                            <a href="#">Third Level <span class="fa arrow"></span></a>
	                            <ul class="nav nav-third-level">
	                                <li>
	                                    <a href="#">Third Level Item</a>
	                                </li>
	                                <li>
	                                    <a href="#">Third Level Item</a>
	                                </li>
	                                <li>
	                                    <a href="#">Third Level Item</a>
	                                </li>

	                            </ul>
	                        </li>
	                        <li><a href="#">Second Level Item</a></li>
	                        <li>
	                            <a href="#">Second Level Item</a></li>
	                        <li>
	                            <a href="#">Second Level Item</a></li>
	                    </ul>
	                </li> -->
	            </ul>

	        </div>
	    </nav>

	    <div id="page-wrapper" class="gray-bg">
	        <div class="row border-bottom">
		        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
			        <div class="navbar-header">
			            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>			
			        </div>		            
		        </nav>
	        </div>