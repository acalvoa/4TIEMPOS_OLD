<?php /* Smarty version Smarty-3.1.19, created on 2016-07-26 17:21:05
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19575843225797d441699846-29780485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14b66cbb4200b2ab5aa1de8ffaebd47551cb4165' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/footer.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19575843225797d441699846-29780485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_HOME' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5797d4416c5474_46346276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5797d4416c5474_46346276')) {function content_5797d4416c5474_46346276($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<div class="footer-container">
				<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
					<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
				<?php }?>
				<div class="footer-insert-container">
					<footer id="footer">
						<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
					</footer>
				</div>
			</div><!-- #footer -->
		</div>
	<!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
