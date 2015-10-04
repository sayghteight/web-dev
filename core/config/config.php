<?php


// Configuración website
	$config['pageTitle'] = 'Jade Core';
	$config['url'] = 'http://jade-ptr.tk'; # Whitout slash in the end

// Configuración emulador

	$config['version_name'] = 'Jade Core';
	$config['emulador'] = 'Jade Core EMU 5.4.8';



/**
* Carpetas y ubicación
* register_TC6x.php # Trinity Core 6.x.x (Emulador)
* register_TC335.php # Trinity Core 3.3.5 (Emulador)
* register_skyfire.php # Skyfire 5.4.8 (Emulador)	
*/


	$config['emu_register'] = 'application/modules/register/functions/';  # Not implemented




// Registro 
	
	$register['signup'] = false; #Show "Create an Account" menu and form. Please take a look at action="" attribute from the FORM at bottom
	$register['expansion']  = true; #This show drop down select menu in sign up form. Please change value attribute in <option>


// Descargas

	$descargas['is_available'] = false; # Muestra los enlaces de descargas o no.
	$descargas['is_offline'] =   true; #  Mostrara el error, esta opción debera de desactivarse si se habilita is_available
	$descargas['download_link'] = '#'; # Enlace al cliente
	$descargas['boton'] = 'Descargar cliente';


// Textos


	$texto['offline'] = "Lamentablemente no podemos ofrecerle ahora mismo la descarga y registro de nuestro ptr 
	 					sin embargo estamos trabajando para traerlo al publico lo mas pronto posible";
	$texto['online'] = "Al descargar nuestro cliente usted podra jugar en nuestro PTR y reportar en nuestro
						 bugtracker los errores que encuentre"; 					

// Social List

	$social['Skype'] = false; #Show skype button
	$social['facebook']  = true; #Show facebook button
	$social['twitter']  = true; #Show twitter button
	$social['youtube']  = false; #Show youtube button
	$social['dribbble'] = false; #Show dribbble button

// Botones de contacto !	

	$web['jadeweb'] = true; #Show ac-web button
	$web['jadelink'] = 'https://github.com/sayghteight/JadeEmu-5.4.8'; #http://ac-web.com/user/blabla
	$web['jadeText'] = 'Jade Core'; #Title of that button
	
	$web['jadeDB'] = true; #Show ac-web button
	$web['jadeDBL'] = ''; #http://ac-web.com/user/blabla
	$web['jadeDBText'] = 'Jade DB'; #Title of that button

	
	$web['sayghtpro'] = true; #Show ac-web button
	$web['sayghtlink'] = ''; #http://ac-web.com/user/blabla
	$web['sayghtText'] = 'Comunidad'; #Title of that button


?>