<?php /* Smarty version Smarty-3.1.21, created on 2020-12-05 23:44:34
         compiled from "/var/www/html/demo2/design/backend/templates/addons/vendor_debt_payout/hooks/index/alert_block.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18517548845fcbf132d4bc69-87990330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40a129d3196f35ddce85b5b3a69c52ca02111e45' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/addons/vendor_debt_payout/hooks/index/alert_block.override.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18517548845fcbf132d4bc69-87990330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dashboard_alert' => 0,
    'is_block_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fcbf132d55926_31439942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcbf132d55926_31439942')) {function content_5fcbf132d55926_31439942($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dashboard_alert']->value) {?>
    <div class="alert alert-block <?php if ($_smarty_tpl->tpl_vars['is_block_alert']->value) {?>alert-error debt-notification<?php }?>">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['dashboard_alert']->value;?>

        </div>
    </div>
<?php }?><?php }} ?>
