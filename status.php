<?php
include('core/config/config.php');
include('application/modules/language/config/language.php'); 
// include('application/modules/status/config/config.php'); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<title><?php echo $config['pageTitle']; ?></title>
	<!-- All available icons here -> http://fortawesome.github.io/Font-Awesome/cheatsheet/ -->
	<link rel="stylesheet" href="source/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="source/popup.css" type="text/css" />
	<link rel="stylesheet" href="source/style.css" type="text/css" />
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="source/jquery.magnific-popup.min.js"></script>
	<script src="source/jquery.selectbox-0.2.min.js"></script>
	<script src="source/unslider.min.js"></script>
	<script src="source/jquery.custom.js"></script>
</head>
<body id="home">
	<div class="header">
		<div class="w1">
			<!-- You can change your logo with replacing the file "source\wow_logo_v2.png" The file name should be same. -->
			<div class="logo"><a href="javascript:void(0);" class="toTop"></a></div>
			<ul>
				<li><a href="javascript:void(0);" class="active toTop"><?php echo text_menu_home; ?></a></li>
				<li><a href="javascript:void(0);" class="features"><?php echo text_menu_features; ?></a></li>
				<?php if($register['signup']) : ?>
				<li><a href="javascript:void(0);" class="open-popup-link" data-mfp-src="#signup"><?php echo text_menu_registro; ?></a></li>
				<?php endif; ?>
				<li><a href="javascript:void(0);" class="open-popup-link" data-mfp-src="#download"><?php echo text_menu_descargar; ?></a></li>
				<li><a href="javascript:void(0);" class="reviews"><?php echo text_menu_reviews; ?></a></li>
				<li><a href="javascript:void(0);" class="contact"><?php echo text_menu_contact; ?></a></li>
			</ul>
		</div>
	</div>
	
	<div id="features">
		<div class="w1">
			<h1>Estado de arreglos</h1>
			<div class="small-description">Nos importas tu, cada día vamos haciendo progresos en las reparaciones y eso es gracias a ti.</div>
			<div class="col-md-4">
				<span class="fa fa-cloud-download"></span>
				<h3>General</h3>
				<p>El estado del contenido general de misiones es : <font color=red> Requiere una revision </font> </p>
			</div>
			<div class="col-md-4">
				<span class="fa fa-comments"></span>
				<h3>Bosses del mundo</h3>
				<p>El estado del contenido de bosses  : <font color=red> Requiere una revision </font.</p>
			</div>
			<div class="col-md-4">
				<span class="fa fa-check-square-o"></span>
				<h3>PvE</h3>
				<p>El estado del contenido general del PvE : <font color=red> Requiere una revision </font</p>
			</div>
		</div>
	</div>
	
	<div id="contact">
		<h1>Contacto</h1>
		<div class="small-description">Reportanos errores:</div>
		<div>
			<?php if($web['jadeweb']) : ?>
			<a href="<?php echo ($web['jadelink']); ?>" class="button button-red" target="_blank"><?php echo ($web['jadeText']); ?></a>
			<?php endif; if($web['jadeDB']) : ?>
			<a href="<?php echo ($web['jadeDBL']); ?>" class="button button-red" target="_blank"><?php echo ($web['jadeDBText']); ?></a>
			<?php endif; if($web['sayghtpro']) : ?>
			<a href="<?php echo ($web['sayghtlink']); ?>" class="button button-pink" target="_blank"><?php echo ($web['sayghtText']); ?></a></div>
			<?php endif; ?>
		<!-- Please respect my work and time since i making this for free and do not remove my creadits. -->
		<div class="copyrights">&copy; All Rights Reserved <?php echo date('Y'); ?><br /><span class="anteia">Codificación Sayghteight</span></div>
	</div>