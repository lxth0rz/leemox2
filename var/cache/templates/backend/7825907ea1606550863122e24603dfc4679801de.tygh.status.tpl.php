<?php /* Smarty version Smarty-3.1.21, created on 2020-12-07 19:48:20
         compiled from "/var/www/html/demo2/design/backend/templates/views/companies/components/bulk_edit/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10861324905fce5cd4018b57-01220150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7825907ea1606550863122e24603dfc4679801de' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/views/companies/components/bulk_edit/status.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10861324905fce5cd4018b57-01220150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_statuses' => 0,
    'status_name' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fce5cd402cbb5_20140317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fce5cd402cbb5_20140317')) {function content_5fce5cd402cbb5_20140317($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status'));
?>
<?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['c_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("change_to_status",array("[status]"=>((string)$_smarty_tpl->tpl_vars['status_name']->value))),'dispatch'=>"dispatch[companies.m_update_statuses]",'form'=>"companies_form",'class'=>"cm-process-items cm-dialog-opener",'data'=>array("data-ca-target-id"=>"content_selected_make_status_".((string)$_smarty_tpl->tpl_vars['status']->value))));?>

    </li>
<?php } ?><?php }} ?>
