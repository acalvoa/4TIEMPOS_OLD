<?php /* Smarty version Smarty-3.1.19, created on 2016-07-26 18:12:57
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/sendtoafriend/sendtoafriend-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3981129215797e0694a49f8-40807356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69e3fe681085d9a89c2c87e18b2f79a83fe93e7d' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/sendtoafriend/sendtoafriend-extra.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3981129215797e0694a49f8-40807356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stf_product' => 0,
    'stf_product_cover' => 0,
    'link' => 0,
    'stf_secure_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5797e0694efd23_85891977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5797e0694efd23_85891977')) {function content_5797e0694efd23_85891977($_smarty_tpl) {?><li class="sendtofriend">
	<a id="send_friend_button" href="#send_friend_form" title="<?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>

	</a>
	<div style="display: none;">
		<div id="send_friend_form">
			<h2  class="page-subheading">
				<?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>

			</h2>
			<div class="row">
				<div class="product clearfix col-xs-12 col-sm-6">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['stf_product']->value->link_rewrite,$_smarty_tpl->tpl_vars['stf_product_cover']->value,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stf_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
					<div class="product_desc">
						<p class="product_name">
							<strong><?php echo $_smarty_tpl->tpl_vars['stf_product']->value->name;?>
</strong>
						</p>
						<?php echo $_smarty_tpl->tpl_vars['stf_product']->value->description_short;?>

					</div>
				</div><!-- .product -->
				<div class="send_friend_form_content col-xs-12 col-sm-6" id="send_friend_form_content">
					<div id="send_friend_form_error"></div>
					<div id="send_friend_form_success"></div>
					<div class="form_container">
						<p class="intro_form">
							<?php echo smartyTranslate(array('s'=>'Recipient','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 :
						</p>
						<p class="text">
							<label for="friend_name">
								<?php echo smartyTranslate(array('s'=>'Name of your friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 <sup class="required">*</sup> :
							</label>
							<input id="friend_name" name="friend_name" type="text" value=""/>
						</p>
						<p class="text">
							<label for="friend_email">
								<?php echo smartyTranslate(array('s'=>'E-mail address of your friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 <sup class="required">*</sup> :
							</label>
							<input id="friend_email" name="friend_email" type="text" value=""/>
						</p>
						<p class="txt_required">
							<sup class="required">*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'sendtoafriend'),$_smarty_tpl);?>

						</p>
					</div>
					<p class="submit">
						<button id="sendEmail" class="btn button button-small" name="sendEmail" type="submit">
							<span><?php echo smartyTranslate(array('s'=>'Send','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</span>
						</button>&nbsp;
						<?php echo smartyTranslate(array('s'=>'or','mod'=>'sendtoafriend'),$_smarty_tpl);?>
&nbsp;
						<a class="closefb" href="#" title="<?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'sendtoafriend'),$_smarty_tpl);?>
">
							<?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'sendtoafriend'),$_smarty_tpl);?>

						</a>
					</p>
				</div> <!-- .send_friend_form_content -->
			</div>
		</div>
	</div>
</li>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('stf_secure_key'=>$_smarty_tpl->tpl_vars['stf_secure_key']->value),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'stf_msg_success')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_success'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your e-mail has been sent successfully','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_success'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'stf_msg_error')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_error'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your e-mail could not be sent. Please check the e-mail address and try again.','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_error'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'stf_msg_title')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_title'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'stf_msg_required')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_required'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You did not fill required fields','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_required'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
