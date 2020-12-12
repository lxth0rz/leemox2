<?php /* Smarty version Smarty-3.1.21, created on 2020-12-05 23:44:20
         compiled from "/var/www/html/demo2/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5828856845fcbf1245b32d6-50258662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab2c52fffdc2e5ccdaabeb1c93be4d667ba35bff' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5828856845fcbf1245b32d6-50258662',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fcbf1245bb8c2_29952531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcbf1245bb8c2_29952531')) {function content_5fcbf1245bb8c2_29952531($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.style.php';
?><?php if (@constant('ACCOUNT_TYPE')==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
