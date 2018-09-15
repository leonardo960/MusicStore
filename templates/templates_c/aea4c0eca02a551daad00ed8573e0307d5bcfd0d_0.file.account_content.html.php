<?php
/* Smarty version 3.1.32, created on 2018-09-15 15:53:13
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\account_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9d2ae9894323_76750937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aea4c0eca02a551daad00ed8573e0307d5bcfd0d' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\account_content.html',
      1 => 1537026792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9d2ae9894323_76750937 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}
.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 600px;
	position: relative;
	margin: 10% auto;
	padding: 25px;
	background: #2b5849;
}
.close {
	background: #162b22;
	color: #1EA180;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-family: 'Quicksand', sans-serif !important;
	font-weight: bold;
	border: 2px solid #48C9A9;
	-webkit-border-radius: 16px;
	-moz-border-radius: 16px;
	border-radius: 16px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { 
	background: #2b5849; 
	color: #b8ffed;
	border: 2px solid #b8ffed;
}

.addressEditModalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}
.addressEditModalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.addressEditModalDialog > div {
	width: 400px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}
.addressEditClose {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.addressEditClose:hover { background: #00d9ff; }


.lds-hourglass {
  display: inline-block;
  position: absolute;
  width: 64px;
  height: 64px;
  top: 25%;
  left: 45%;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 6px;
  box-sizing: border-box;
  border: 26px solid #cef;
  border-color: #cef transparent #cef transparent;
  animation: lds-hourglass 1.2s infinite;
}
@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}
.address-added-modal {
    position: fixed;
    left: 0;
    top: 50px;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);	
}
.address-added-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.address-added-close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.address-added-close-button:hover {
    background-color: darkgray;
}
.address-added-show-modal {
	position: fixed;
    left: 0;
    top: 0px;
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
	transition: 0.5s;
}
.address-edit-modal {
    position: fixed;
    left: 0;
    top: 50px;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);	
}
.address-edit-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.address-edit-close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.address-edit-close-button:hover {
    background-color: darkgray;
}
.address-edit-show-modal {
	position: fixed;
    left: 0;
    top: 0px;
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
	transition: 0.5s;
}
</style>
<body>
	<div class="your-account-container">
		<div class="account-box">
			
				<div class="account-title-box">
				<ul>
					<li>Profile Info</li>
				</ul>
				</div>
			
			<?php if (isset($_smarty_tpl->tpl_vars['change_confirm']->value)) {?>
			<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['change_confirm']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php }?>
			
			<form id="change_info_form" action="change_info.php" method="POST">
			
				<div class="account-static-info account-info-profile">
					<ul>
						<li id="username_li"><input id="username_input" name="username_input" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" pattern="[A-Za-z0-9]{4,20}" title="The username must contain only letters or digits with a minimum of 4 and maximum 20." disabled><label for="username_input">Username</label></input></li>
						<li id="email_li"><input id="email_input" name="email_input" type="email"  value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" disabled><label for="email_input">E-mail</label></input></li>
						</ul>
					<ul>
						<li id="name_li"><input id="name_input" name="name_input" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" pattern="[A-Za-z]{1,20}" title="The name field must contain only letters up to 20." disabled><label for="name_input">Name</label></input></li>
						<li id="surname_li"><input id="surname_input" name="surname_input" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
" pattern="[A-Za-z]{1,20}" title="The surname field must contain only letters up to 20." disabled><label for="surname_input">Surname</label></input></li>
					</ul>
				</div>
				
				<div class="account-button-box" >
					<ul class="account-button-box-inner" id="edit-button-box">
						<li id="edit_btn" onclick="edit_click()"><a>Edit</a></li>
					</ul>
					<ul class="account-button-box-inner" id="save-button-box">
						<li id="save_btn" onclick="save_click()" ><a>Save</a></li>
						<li id="cancel_btn" onclick="cancel_click()"><a>Cancel</a></li>
					</ul>
				</div>
				
			</form>
			
			
				<div class="account-title-box">
					<ul>
						<li>Your Addresses</li>
					</ul>
				</div>
				
				
				<?php if (isset($_smarty_tpl->tpl_vars['addresses']->value)) {?>
				<div class="account-static-info">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
					<div class="address-card">
						<ul>
							<li><h1>Customer Name: </h1><h6 id="address-<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
-name"><?php echo $_smarty_tpl->tpl_vars['address']->value['nome'];?>
</h6></li>
							<li><h1>Customer Surname: </h1><h6 id="address-<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
-surname"><?php echo $_smarty_tpl->tpl_vars['address']->value['cognome'];?>
</h6></li>
							<li><h1>City: </h1><h6 id="address-<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
-city"><?php echo $_smarty_tpl->tpl_vars['address']->value['citta'];?>
</h6></li>
							<li><h1>Province: </h1><h6 id="address-<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
-province"><?php echo $_smarty_tpl->tpl_vars['address']->value['provincia'];?>
</h6></li>
							<li><h1>Postal Code: </h1><h6 id="address-<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
-postal-code"><?php echo $_smarty_tpl->tpl_vars['address']->value['cap'];?>
</h6></li>
							<li><h1>Country: </h1><h6 id="address-<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
-country"><?php echo $_smarty_tpl->tpl_vars['address']->value['paese'];?>
</h6></li>
						</ul>
						<ul>
							<li><h1>Address: </h1><h6 id="address-<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
-address"><?php echo $_smarty_tpl->tpl_vars['address']->value['indirizzo'];?>
</h6></li>
							<li><h1>Telephone: </h1><h6 id="address-<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
-telephone"><?php echo $_smarty_tpl->tpl_vars['address']->value['recapito'];?>
</h6></li>
						</ul>
						
						<ul class="address-buttons-container">
							<li class="address-box-button"><a style="cursor:pointer;" href="#addressEditOpenModal" onclick="populate_address_edit_form(<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
)">Edit</a></li>
							<li class="address-box-button"><a style="cursor: pointer;" onclick="delete_address(<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
)">Delete</a></li>
						</ul>
						
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
				</div>
				<?php } else { ?>
					<div class="no-addresses-card">
						<h1>No address has been added.</h1>
					</div>
				<?php }?>
				
			
			<div class="add-address-box">
				<ul>
					<li class="new-address-button"><a href="#openModal">New Address</a></li>
				</ul>
			</div>

			<div id="openModal" class="modalDialog" style="display: inline-block;">
			<div class="new-address-popup">
				<a href="#close" title="Close" class="close">X</a>
				<form id="address-form" action="account.php" method="POST">
					<label>New Address</label>
					
					<ul>
						<li><h1>Customer Name<h1><input type="text" name="customer_name" required /></li>
						<li><h1>Customer Surname<h1><input type="text" name="customer_surname" required /></li>
						<li><h1>Country<h1><input type="text" name="customer_country" required /></li>
						<li><h1>Province<h1><input type="text" name="customer_province" required /></li>
						<li><h1>City<h1><input type="text" name="customer_city" required /></li>
						<li><h1>Postal Code<h1><input type="text" pattern="[0-9]+" name="customer_postal_code" required /></li>
						<li><h1>Address<h1><input type="text" name="customer_address" required /></li>
						<li><h1>Telephone<h1><input type="text" pattern="[0-9]+" name="customer_telephone" required /></li>
					</ul>
					<button type="button" onclick="send_address()" >Confirm</button>
				</form>
			</div>
			</div>
			<div id="addressEditOpenModal" class="addressEditModalDialog" style="display: inline-block;">
			<div>
				<a href="#addressEditClose" title="Close" class="addressEditClose">X</a>
				<form id="edit-address-form" action="account.php" method="POST">
					Modify address information:
					<br>
					<br>
					Customer Name: <input id="edit-customer-name" type="text" name="customer_name" required /><br>
					Customer Surname: <input id="edit-customer-surname" type="text" name="customer_surname" required /><br>
					Country: <input id="edit-customer-country" type="text" name="customer_country" required /><br>
					Province: <input id="edit-customer-province" type="text" name="customer_province" required /><br>
					City: <input id="edit-customer-city" type="text" name="customer_city" required /><br>
					Postal Code: <input id="edit-customer-postal-code" type="text" pattern="[0-9]+" name="customer_postal_code" required /><br>
					Address: <input id="edit-customer-address" type="text" name="customer_address" required /><br>
					Telephone: <input id="edit-customer-telephone" type="text" pattern="[0-9]+" name="customer_telephone" required /><br><br>
					<input type="hidden" id="edit-address-id" name="address_id" value="" />
					<button type="button" onclick="modify_address()" >Confirm changes</button>
				</form>
			</div>
			</div>
			<div id="spinner" class="lds-hourglass" style="display: none;"></div>
			<div class="address-added-modal">
				<div class="address-added-modal-content">
					<span class="address-added-close-button">×</span>
					<h1>Address added to the list.</h1>
				</div>
			</div>
			<div class="address-edit-modal">
				<div class="address-edit-modal-content">
					<span class="address-edit-close-button">×</span>
					<h1>Address modified.</h1>
				</div>
			</div>
		</div>
	</div>
</body>
<?php echo '<script'; ?>
 src="../js/account.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://malsup.github.com/jquery.form.js"><?php echo '</script'; ?>
> 


<?php }
}
