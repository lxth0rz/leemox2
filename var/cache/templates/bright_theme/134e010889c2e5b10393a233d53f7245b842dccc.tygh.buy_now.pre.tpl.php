<?php /* Smarty version Smarty-3.1.21, created on 2020-12-06 08:02:17
         compiled from "/var/www/html/demo2/design/themes/responsive/templates/addons/wishlist/hooks/products/buy_now.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14915801455fcc65d9876be4-81971978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '134e010889c2e5b10393a233d53f7245b842dccc' => 
    array (
      0 => '/var/www/html/demo2/design/themes/responsive/templates/addons/wishlist/hooks/products/buy_now.pre.tpl',
      1 => 1607201056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14915801455fcc65d9876be4-81971978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'hide_wishlist_button' => 0,
    'obj_prefix' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fcc65d98b5160_15901264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcc65d98b5160_15901264')) {function content_5fcc65d98b5160_15901264($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wishlist_but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'wishlist_but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'wishlist_but_role'=>"text"), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/buy_now.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/buy_now.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wishlist_but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'wishlist_but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'wishlist_but_role'=>"text"), 0);?>

<?php }
}?><?php }} ?>
