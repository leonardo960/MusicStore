 <?php
 require "init_smarty.php";
 //TODO completare
 $head = "../templates/artistpage_head.html";
 $content = "../templates/artistpage_content.html";
 
 $smarty->assign("head", $head);
 $smarty->assign("content", $content);
 
 require "include/set_logged_header.inc.php";
 require "include/set_cart_header.inc.php";
 
 $smarty->display("../templates/frame_public.html");
 ?>
 