<?php /* Smarty version Smarty-3.1.19, created on 2016-07-26 17:21:05
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15105909095797d441017308-83452184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ea6a47e2878d2ae56f1b2eb5d503b153b6abd7' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/homefeatured/homefeatured.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15105909095797d441017308-83452184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5797d441038525_58576738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5797d441038525_58576738')) {function content_5797d441038525_58576738($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/testing.4tiempos.cl/public_html/tools/smarty/plugins/function.counter.php';
?><?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

<?php } else { ?>
    <ul id="homefeatured" class="homefeatured tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1) {?> active<?php }?>">
        <li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
    </ul>
<?php }?><?php }} ?>
