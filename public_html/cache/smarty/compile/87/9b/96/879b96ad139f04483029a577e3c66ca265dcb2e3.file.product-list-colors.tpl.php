<?php /* Smarty version Smarty-3.1.19, created on 2016-07-26 21:49:49
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/product-list-colors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1290773665798133d105655-72299209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '879b96ad139f04483029a577e3c66ca265dcb2e3' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/product-list-colors.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1290773665798133d105655-72299209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'colors_list' => 0,
    'color' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5798133d122d92_85477733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5798133d122d92_85477733')) {function content_5798133d122d92_85477733($_smarty_tpl) {?><ul class="color_to_pick_list clearfix">
	<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
		<li>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['color']->value['id_product'],null,null,null,null,null,$_smarty_tpl->tpl_vars['color']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
" id="color_<?php echo intval($_smarty_tpl->tpl_vars['color']->value['id_product_attribute']);?>
" class="color_pick" style="background: <?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
;"></a>
		</li>
	<?php } ?>
</ul><?php }} ?>
