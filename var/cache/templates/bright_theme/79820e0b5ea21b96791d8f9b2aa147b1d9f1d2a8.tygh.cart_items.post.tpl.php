<?php /* Smarty version Smarty-3.1.21, created on 2020-12-06 08:02:57
         compiled from "/var/www/html/demo2/design/themes/responsive/templates/addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3747149055fcc6601bfb622-90778371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79820e0b5ea21b96791d8f9b2aa147b1d9f1d2a8' => 
    array (
      0 => '/var/www/html/demo2/design/themes/responsive/templates/addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl',
      1 => 1607201054,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3747149055fcc6601bfb622-90778371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'config' => 0,
    'gift' => 0,
    'gift_key' => 0,
    'c_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fcc6601c769d8_40314579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcc6601c769d8_40314579')) {function content_5fcc6601c769d8_40314579($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','gift_certificate','gift_certificate','gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['cart']->value['gift_certificates']) {?>

<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
        <li class="ty-order-products__item">
            <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
                <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-order-products__a"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value),'but_meta'=>"ty-order-products__item-delete cm-post delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);?>

            <?php } else { ?>
                <strong><?php echo $_smarty_tpl->__("gift_certificate");?>
</strong>
            <?php }?>
            <div class="ty-order-products__price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);?>
</div>
        </li>
    <?php } ?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['gift_certificates']) {?>

<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
        <li class="ty-order-products__item">
            <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
                <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-order-products__a"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value),'but_meta'=>"ty-order-products__item-delete cm-post delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);?>

            <?php } else { ?>
                <strong><?php echo $_smarty_tpl->__("gift_certificate");?>
</strong>
            <?php }?>
            <div class="ty-order-products__price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);?>
</div>
        </li>
    <?php } ?>
<?php }
}?><?php }} ?>
