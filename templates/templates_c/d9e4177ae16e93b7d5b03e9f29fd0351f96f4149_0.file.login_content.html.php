<?php
/* Smarty version 3.1.32, created on 2018-09-07 15:26:36
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\login_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9298ac4b7d66_86256510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9e4177ae16e93b7d5b03e9f29fd0351f96f4149' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\login_content.html',
      1 => 1534150888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9298ac4b7d66_86256510 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['error']->value)) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['error']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<div class="login-page">
  <div class="form">
    <form class="register-form" action="signup.php" method=POST>
	
      <input type="text" name="name" placeholder="name" pattern="[A-Za-z]{1,20}" title="The name field must contain only letters up to 20." required />
	  <input type="text" name="surname" placeholder="surname" pattern="[A-za-z]{1,20}" title="The surname field must contain only letters up to 20." required />
	  <input type="text" name="username" placeholder="username" pattern="[A-Za-z0-9]{4,20}" title="The username must contain only letters or digits with a minimum of 4 and maximum 20." required />
      <input type="password" name="password" placeholder="password" pattern="{8,20}" title="The password must contain at least 8 characters and a maximum of 20. No restrictions are applied." required />
      <input type="email" name="email" placeholder="email" required />
	
      <button>Create</button>
      <p class="message">Already registered? <a href="javascript:void(0)">Sign In</a></p>
    </form>
    <form class="login-form" action="login.php" method=POST>
	
      <input type="text" name="username" placeholder="username" pattern="[A-Za-z0-9]{4,20}" required />
      <input type="password" name="password" placeholder="password" required />
	
      <button>Login</button>
      <p class="message">Not registered? <a href="javascript:void(0)">Create an account</a></p>
    </form>
  </div>
</div>
  <?php echo '<script'; ?>
 src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
>

  

    <?php echo '<script'; ?>
  src="../js/login.js"><?php echo '</script'; ?>
>
<?php }
}
