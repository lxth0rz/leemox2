<?php /* Smarty version Smarty-3.1.21, created on 2020-12-07 19:48:20
         compiled from "/var/www/html/demo2/design/backend/templates/views/companies/components/bulk_edit/actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20970656215fce5cd40311f3-11679415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c367af5476d23f19f26ef70c2ae7aae2e7bd5622' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/views/companies/components/bulk_edit/actions.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20970656215fce5cd40311f3-11679415',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fce5cd40726d3_84575989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fce5cd40726d3_84575989')) {function content_5fce5cd40726d3_84575989($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view_vendor_products','view_vendor_admins','view_vendor_orders','export_selected'));
?>
<?php if (fn_check_view_permissions("products.manage","GET")) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_vendor_products"),'dispatch'=>"dispatch[products.manage]",'form'=>"companies_form",'data'=>array("data-ca-pass-selected-object-ids-as"=>"company_ids")));?>

    </li>
<?php }?>

<?php if (fn_check_view_permissions("profiles.manage","GET")) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_vendor_admins"),'dispatch'=>"dispatch[profiles.manage]",'form'=>"companies_form",'data'=>array("data-ca-pass-selected-object-ids-as"=>"company_ids")));?>

    </li>
<?php }?>

<?php if (fn_check_view_permissions("orders.manage","GET")) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_vendor_orders"),'dispatch'=>"dispatch[orders.manage]",'form'=>"companies_form",'data'=>array("data-ca-pass-selected-object-ids-as"=>"company_ids")));?>

    </li>
<?php }?>

<?php if (fn_check_view_permissions("companies.update","POST")&&fn_check_view_permissions("companies.export_range","POST")) {?>
    <li class="divider"></li>
<?php }?>

<?php if (fn_check_view_permissions("companies.update","POST")) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[companies.m_delete]",'form'=>"companies_form"));?>

    </li>
<?php }?>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[companies.export_range]",'form'=>"companies_form"));?>

</li>
<?php }} ?>
