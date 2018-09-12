 <?php
 require "init_smarty.php";
 
 $content = "../templates/singlepage_content.html";
 
 $smarty->assign("content", $content);
 
 require "include/set_logged_header.inc.php";
 require "include/set_cart_header.inc.php";
 
 $smarty->display("../templates/frame_public.html");
 ?>
 