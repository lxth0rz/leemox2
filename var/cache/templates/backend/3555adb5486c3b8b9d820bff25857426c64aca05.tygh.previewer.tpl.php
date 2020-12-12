<?php /* Smarty version Smarty-3.1.21, created on 2020-12-07 19:48:28
         compiled from "/var/www/html/demo2/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12393658755fce5cdcbe1268-39638351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3555adb5486c3b8b9d820bff25857426c64aca05' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/common/previewer.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12393658755fce5cdcbe1268-39638351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fce5cdcbe6916_67358328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fce5cdcbe6916_67358328')) {function content_5fce5cdcbe6916_67358328($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
