<?php
/*------------------------------------------*\
|  Language System V 1.0.1 By JorGe          |
|   Elab Share                               |
|   [url=http://www.enlinealab.com]www.enlinealab.com[/url]                       |
\*------------------------------------------*/
session_start();
header('Cache-control: private'); // IE 6 FIX
 
if(isSet($_GET['lang'])){
    $lang = $_GET['lang'];
 
    //registra sesion
    $_SESSION['lang'] = $lang;
   
    //define cookie
    setcookie('lang', $lang, time() + (3600 * 24 * 30));
   
    //busca en variables cookie y session
}else 
if(isSet($_SESSION['lang'])){
    $lang = $_SESSION['lang'];
}else 
if(isSet($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];
}else{
    $lang = 'es';
}
 
switch ($lang) {
  case 'en': 
  $lang_file = 'english.php'; 
  break;
 
/*------------------------------------------*\
| Lenguages:                                 |
|                                            |
|  case 'es':                                |
|  $lang_file = 'spanishx.php';              |
|  break;                                    |
\*------------------------------------------*/
 
  case 'en': 
  $lang_file = 'english.php'; 
  break;
/*------------------------------------------*\
|  Language Default                          |
\*------------------------------------------*/
  default:
  $lang_file = 'spanish.php';
 
}
/*------------------------------------------*\
|  Carpeta Lenguages                         |
\*------------------------------------------*/
include_once 'application/modules/language/'.$lang_file;
?>