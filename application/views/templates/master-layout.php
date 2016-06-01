<!doctype html>
<meta charset="utf-8">
<html>
	<head>
		<title><?php echo "LTSSMaryland | MyLTSS - {$page}" ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- CSS -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootstrap.css">

<!--		<link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--application/content/css/bootstrap-modal-bs3patch.css">-->
<!--		<link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--application/content/css/bootstrap-modal.css">-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootstrap-theme.css">
<!--        <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--application/content/js/lib/bootsketch/css/bootsketch.css">-->


		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootstrap-multiselect.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/prettify.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/fonts/font-awesome-4.6.2/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootstrap-overrides.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootswatch-paper-theme/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/js/lib/jquery.fullcalendar/fullcalendar.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/jquery-bootstrap-datepicker/jquery-bootstrap-datepicker.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/js/lib/nvd3-js/nv.d3.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/site.css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<!-- Javascript -->
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/jquery-ui-1.11.4/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/dataTables.bootstrap.js"></script>
		<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/bootstrap.js"></script>
<!--        <script type="text/javascript" src="--><?php //echo base_url(); ?><!--application/content/js/lib/bootsketch/js/vendors.min.js"></script>-->
<!--		<script type="text/javascript" src="--><?php //echo base_url(); ?><!--applicatoin/content/js/bootstrap-modalmanager.js"></script>-->
<!--		<script type="text/javascript" src="--><?php //echo base_url(); ?><!--applicatoin/content/js/bootstrap-modal.js"></script>-->
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/bootstrap-multiselect.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery.bootstrap.wizard.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/prettify.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/jquery.fullcalendar/fullcalendar.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/nvd3-js/nv.d3.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/chart.js/Chart.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&"></script>
		
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	</head>	
	<body id="body">
		<!-- Main Header -->
		<?php require 'header.php'; ?>
		<div id="main-body" class="container">
			<!-- Main Content -->
		<?php require "application/areas/{$area}/{$page}.php";?>
		</div>




        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/cleanzone.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/page-calendar.js"></script>
        <!-- Main Scripts -->
		<?php require 'scripts.php'; ?>
	</body>
</html>
