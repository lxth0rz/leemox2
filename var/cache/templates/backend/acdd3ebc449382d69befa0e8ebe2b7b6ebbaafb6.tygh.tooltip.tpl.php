<?php /* Smarty version Smarty-3.1.21, created on 2020-12-07 20:10:25
         compiled from "/var/www/html/demo2/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13538260325fce62012dbcd8-72907782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acdd3ebc449382d69befa0e8ebe2b7b6ebbaafb6' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/common/tooltip.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13538260325fce62012dbcd8-72907782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fce62012e6d13_32823350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fce62012e6d13_32823350')) {function content_5fce62012e6d13_32823350($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
