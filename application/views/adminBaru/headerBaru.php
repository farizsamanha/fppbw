<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  if(!$this->session->has_userdata('nama','status')) {
        redirect(base_url().'index.php/login');
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dr. Barbershop Admin</title>

<link href="<?php echo base_url()."assetsAdminBaru/css/bootstrap.min.css";?>" rel="stylesheet">
<link href="<?php echo base_url()."assetsAdminBaru/css/datepicker3.css";?>" rel="stylesheet">
<link href="<?php echo base_url()."assetsAdminBaru/css/bootstrap-table.css";?>" rel="stylesheet">
<link href="<?php echo base_url()."assetsAdminBaru/css/styles.css";?>" rel="stylesheet">
<!--Icons-->
<script src="<?php echo base_url()."assetsAdminBaru/js/lumino.glyphs.js";?>"> </script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Doctor Barbershop</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $this->session->nama; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<!--<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li> -->
							<li><a href="<?php echo base_url()."index.php/login/logout";?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
</body>