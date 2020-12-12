<?php /* Smarty version Smarty-3.1.21, created on 2020-12-07 19:49:33
         compiled from "/var/www/html/demo2/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12589636755fce5d1d6dfb70-18024663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20106ea613c3b34614d7beae5e43f16329b29fbb' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12589636755fce5d1d6dfb70-18024663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fce5d1d6eb8c6_45942329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fce5d1d6eb8c6_45942329')) {function content_5fce5d1d6eb8c6_45942329($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>
    <!--hide vendor plan field in admin area-->
<?php }?>
<?php }} ?>
