<?php /* Smarty version Smarty-3.1.21, created on 2020-12-05 23:49:48
         compiled from "/var/www/html/demo2/design/themes/responsive/templates/addons/hybrid_auth/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14818798725fcbf26c2c10d0-60107364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51390fb849c6bf48b5d739bd70ef09e4c827f7ef' => 
    array (
      0 => '/var/www/html/demo2/design/themes/responsive/templates/addons/hybrid_auth/hooks/index/styles.post.tpl',
      1 => 1607201057,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14818798725fcbf26c2c10d0-60107364',
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
  'unifunc' => 'content_5fcbf26c2e5766_94412569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcbf26c2e5766_94412569')) {function content_5fcbf26c2e5766_94412569($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_style(array('src'=>"addons/hybrid_auth/styles.less"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_style(array('src'=>"addons/hybrid_auth/styles.less"),$_smarty_tpl);
}?><?php }} ?>
