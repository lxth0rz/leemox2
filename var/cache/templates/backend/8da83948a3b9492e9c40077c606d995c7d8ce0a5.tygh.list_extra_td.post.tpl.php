<?php /* Smarty version Smarty-3.1.21, created on 2020-12-07 19:48:20
         compiled from "/var/www/html/demo2/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14680647725fce5cd40b2f20-46236488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8da83948a3b9492e9c40077c606d995c7d8ce0a5' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14680647725fce5cd40b2f20-46236488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fce5cd40b6632_73405507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fce5cd40b6632_73405507')) {function content_5fce5cd40b6632_73405507($_smarty_tpl) {?><td width="7%" class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</td><?php }} ?>
