<?php
/* Smarty version 3.1.32, created on 2018-09-10 07:51:06
  from 'C:\wamp64\www\MusicStore\templates\favorites_head.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b96226aad5e62_17919316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd729cfcafa7682331bdbf9e814c3fff9cd811cb4' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\favorites_head.html',
      1 => 1536565778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96226aad5e62_17919316 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Music Store - Favorites</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/responsiveslides.css">
		<?php echo '<script'; ?>
 src="../js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../js/responsiveslides.min.js"><?php echo '</script'; ?>
>
		
		  <?php echo '<script'; ?>
>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  <?php echo '</script'; ?>
>
		  
	</head><?php }
}
