<?php /* Smarty version Smarty-3.1.21, created on 2020-12-06 08:02:57
         compiled from "/var/www/html/demo2/design/themes/responsive/templates/blocks/lite_checkout/payment_methods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3659321605fcc66012ded22-63632863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb4ce9d1998b10e780147e93c6abd20479c888e6' => 
    array (
      0 => '/var/www/html/demo2/design/themes/responsive/templates/blocks/lite_checkout/payment_methods.tpl',
      1 => 1607201049,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3659321605fcc66012ded22-63632863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fcc6601304f43_08850117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcc6601304f43_08850117')) {function content_5fcc6601304f43_08850117($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_title'=>false), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/payment_methods.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/payment_methods.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_title'=>false), 0);?>

<?php }?><?php }} ?>
