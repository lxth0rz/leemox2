<?php /* Smarty version Smarty-3.1.21, created on 2020-12-05 23:44:23
         compiled from "/var/www/html/demo2/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21089304635fcbf12765c200-98010661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4885d73395aa724e7b99a4d083967c8df9e7d7ac' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21089304635fcbf12765c200-98010661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fcbf127662784_55184386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcbf127662784_55184386')) {function content_5fcbf127662784_55184386($_smarty_tpl) {?><?php if (@constant('ACCOUNT_TYPE')==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <i class="help-center__show-help-center--icon icon-question-sign"></i>
        </a>
    </div>
<?php }?>
<?php }} ?>
