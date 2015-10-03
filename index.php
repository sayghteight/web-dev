<?php
include('core/config/config.php');
require("application/modules/language/config/language.php"); 
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
	<div class="main">
		<div class="w1">
			<div class="main-desc-inner">
				<div class="main-intro">
					<h1 class="repack-title"><?php echo $config['version_name']; ?> </h1>
					<div class="intro-box">
						<div class="sprite battlegrounds"></div>
						<h2>Gran contenido de arenas & campos de batalla trabajando</h2>
					</div>
					<div class="intro-box">
						<div class="sprite box"></div>
						<h2>Gran parte del contenido PvE de pandaría</h2>
					</div>
					<div class="intro-box">
						<div class="sprite talents"></div>
						<h2>Muchas habilidades & talentos funcionando</h2>
					</div>
					<div class="clear"></div>
					<a href="javascript:void(0);" class="open-popup-link download" data-mfp-src="#download"><span>Descargar cliente</span></a>
				</div>
				<div class="main-bg"></div>
			</div>
		</div>
	</div>
	<div id="features">
		<div class="w1">
			<h1>Trabajo excelente y Blizzlike</h1>
			<div class="small-description">No hay palabras para describir el trabajo que hay detras de este emulador y esta nueva etapa de Jade PTR.
			Hemos juntado nuestro sello con nuestra profesionalidad dejando todo el contenido habilitado a lo mas estilo blizzlike</div>
			<div class="col-md-4">
				<span class="fa fa-cloud-download"></span>
				<h3>Updates semanales</h3>
				<p>El 70% del codigo de este emulador es 100% nuestro por lo que nos permite realizar muchos mas updates y semanalmente</p>
			</div>
			<div class="col-md-4">
				<span class="fa fa-comments"></span>
				<h3>El camino del PvP</h3>
				<p>Siendo conscientes que hay numerosos problemas con el PvP hemos querido arreglar muchas habilidades/talentos para vuestro
				disfrute.</p>
			</div>
			<div class="col-md-4">
				<span class="fa fa-check-square-o"></span>
				<h3>El Camino del PvE</h3>
				<p>Incorporando desde Siege of Orgrimmar en una fase temprana hasta terminando los bosses del mundo es uno de nuestros cambios
				iniciales en PvE</p>
			</div>
		</div>
	</div>
	<div id="reviews">
		<div class="w1">
			<div class="rotation">
				<ul>
					<li>Absolutamente un gran trabajo por parte del equipo de desarrollo.<span>Relaxx <small>Tester - Jade PTR</small></span></li>
					<li>Sin palabras, unos cambios geniales por parte del staff...<span>Hefesto <small>Tester - MJ</small></span></li>
					<li>El camino a la perfeción..<span>Wisk <small>Tester - User</small></span></li>
					<li>Deja en el post de cambios del PTR en el foro tu comentarío..<span>Usuario <small>Deja tu comentarío</small></span></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="contact">
		<h1>Contacto</h1>
		<div class="small-description">Quieres contactar con el desarrollo, puedes hacerlo ahora desde los siguientes enlaces:</div>
		<?php if($social['Skype']) : ?>
		<a href="skype:user?chat" class="skype" title="Anteia Skype" target="_blank"><i class="fa fa-skype"></i></a>
		<?php endif; if($social['facebook']) : ?>
		<a href="https://www.facebook.com/???" class="facebook" title="Anteia Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
		<?php endif; if($social['twitter']) : ?>
		<a href="https://twitter.com/???" class="twitter" title="Anteia Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
		<?php endif; if($social['youtube']) : ?>
		<a href="https://www.youtube.com/user/???" class="youtube" title="Anteia YouTube" target="_blank"><i class="fa fa-youtube"></i></a>
		<?php endif; if($social['dribbble']) : ?>
		<a href="https://www.dribbble.com/???" class="dribbble" title="Anteia Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
		<?php endif; ?>
		<br /><br />
		<div>
			<?php if($acweb) : ?>
			<a href="<?php echo $acLink; ?>" class="button button-red" target="_blank"><?php echo $acText; ?></a>
			<?php endif; if($ownedcore) : ?>
			<a href="<?php echo $owLink; ?>" class="button button-blue" target="_blank"><?php echo $owText; ?></a>
			<?php endif; if($otherforum) : ?>
			<a href="<?php echo $ofLink; ?>" class="button button-pink" target="_blank"><?php echo $ofText; ?></a></div>
			<?php endif; ?>
		<!-- Please respect my work and time since i making this for free and do not remove my creadits. -->
		<div class="copyrights">&copy; All Rights Reserved <?php echo date('Y'); ?><br /><span class="anteia">Codificación Sayghteight</span></div>
	</div>
	<div id="download" class="dark-popup mfp-hide">
		<h2 class="rules-title">Descargar nuestro cliente</h2>
		<div class="overflow">

	<?php if($descargas['is_available']) : ?>
			<div class="pop-left">
				<?php echo $texto['online']; ?>
				</div>	
				<div class="pop-right">
				<a href="<?php echo $download_link; ?>" class="download"><span><?php echo $descargas['boton']; ?></span></a>
			</div>
    <?php endif; ?>
    <?php if($descargas['is_offline']) : ?>
			<div class="pop-left">
				<?php echo $texto['offline']; ?>
				</div>
    <?php endif; ?>

	</div>

				<?php if($register['signup']) : ?>
	<div id="signup" class="dark-signup mfp-hide">
		<h2 class="signup-title">Crear cuenta</h2>
		<div class="overflow">
			<div class="error">
    </div>
			<form  method="POST">
				<input type="text" name="username" placeholder="Username" />
				<input type="password" name="password" placeholder="Password" />
				<input type="password" name="repass" placeholder="Password" />
				<input type="email" name="email" placeholder="E-mail" />
				<button type="submit" name="submit"></button>
			</form>
		</div>
	</div>
	<?php endif; ?>
</body>
</html>