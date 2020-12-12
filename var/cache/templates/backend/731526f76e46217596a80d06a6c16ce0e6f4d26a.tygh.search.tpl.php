<?php /* Smarty version Smarty-3.1.21, created on 2020-12-07 19:48:20
         compiled from "/var/www/html/demo2/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7851647715fce5cd45f6396-39687050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '731526f76e46217596a80d06a6c16ce0e6f4d26a' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/buttons/search.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7851647715fce5cd45f6396-39687050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fce5cd4600187_01939533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fce5cd4600187_01939533')) {function content_5fce5cd4600187_01939533($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
