<?php /* Smarty version Smarty-3.1.21, created on 2020-12-05 23:50:00
         compiled from "/var/www/html/demo2/design/themes/responsive/templates/addons/recaptcha/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2064302085fcbf278e25290-35315412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dba783ec65d8ad318faed139f7e9865014b85912' => 
    array (
      0 => '/var/www/html/demo2/design/themes/responsive/templates/addons/recaptcha/hooks/index/scripts.post.tpl',
      1 => 1607201054,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2064302085fcbf278e25290-35315412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'app' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fcbf278ea8b34_56119080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcbf278ea8b34_56119080')) {function content_5fcbf278ea8b34_56119080($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('error_validator_recaptcha','error_validator_recaptcha'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (get_class($_smarty_tpl->tpl_vars['app']->value['antibot']->getDriver())=="Tygh\Addons\Recaptcha\RecaptchaDriver") {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function (_, $) {
            _.tr({
                error_validator_recaptcha: '<?php echo strtr($_smarty_tpl->__("error_validator_recaptcha"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            });

            $.extend(_, {
                recaptcha_settings: {
                    site_key: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_site_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    theme: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_theme'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    type: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_type'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    size: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_size'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
                },
                google_recaptcha_v3_site_key: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_v3_site_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                google_recaptcha_v2_token_param: '<?php echo strtr(constant("\Tygh\Addons\Recaptcha\RecaptchaDriver::RECAPTCHA_TOKEN_PARAM_NAME"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                google_recaptcha_v3_token_param: '<?php echo strtr(constant("\Tygh\Addons\Recaptcha\RecaptchaDriver::RECAPTCHA_V3_TOKEN_PARAM_NAME"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
    <?php echo smarty_function_script(array('src'=>"js/addons/recaptcha/recaptcha.js"),$_smarty_tpl);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/recaptcha/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/recaptcha/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (get_class($_smarty_tpl->tpl_vars['app']->value['antibot']->getDriver())=="Tygh\Addons\Recaptcha\RecaptchaDriver") {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function (_, $) {
            _.tr({
                error_validator_recaptcha: '<?php echo strtr($_smarty_tpl->__("error_validator_recaptcha"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            });

            $.extend(_, {
                recaptcha_settings: {
                    site_key: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_site_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    theme: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_theme'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    type: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_type'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    size: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_size'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
                },
                google_recaptcha_v3_site_key: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_v3_site_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                google_recaptcha_v2_token_param: '<?php echo strtr(constant("\Tygh\Addons\Recaptcha\RecaptchaDriver::RECAPTCHA_TOKEN_PARAM_NAME"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                google_recaptcha_v3_token_param: '<?php echo strtr(constant("\Tygh\Addons\Recaptcha\RecaptchaDriver::RECAPTCHA_V3_TOKEN_PARAM_NAME"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
    <?php echo smarty_function_script(array('src'=>"js/addons/recaptcha/recaptcha.js"),$_smarty_tpl);?>

<?php }?>
<?php }?><?php }} ?>
