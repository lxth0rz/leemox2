<?php /* Smarty version Smarty-3.1.21, created on 2020-12-05 23:44:23
         compiled from "/var/www/html/demo2/design/backend/templates/addons/help_center/hooks/index/content_top.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9393786205fcbf127670171-49436382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80d6c90a75ec7437af19a40cca96ccb67d2c5f0f' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/addons/help_center/hooks/index/content_top.pre.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9393786205fcbf127670171-49436382',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fcbf127687095_86027755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcbf127687095_86027755')) {function content_5fcbf127687095_86027755($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('help_center.help'));
?>
<?php if (@constant('ACCOUNT_TYPE')==="admin") {?>
    <div class="help-center hidden">
        <div class="help-center__header">
            <div class="help-center__title"><?php echo $_smarty_tpl->__("help_center.help");?>
</div>
            <i class="help-center__close icon-remove"></i>
        </div>

        <div class="help-center__content">
        </div>

        <div class="help-center__footer">
        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/template" id="help_center_block" data-no-defer="true" data-no-execute="§">
        <div class="help-center__block ${data.type_block}">
            <div class="help-center__block-header">
                <div class="help-center__block-title">${data.name}</div>
                
                    ${data.all_items_name
                    ? `
                        <a class="help-center__block-all-items" target="_blank" href="${data.all_items_url}">${data.all_items_name}</a>
                        <a class="help-center__block-all-items help-center__block-all-items--short" target="_blank" href="${data.all_items_url}">${data.all_items_name_short}</a>
                    ` : ``}
                
            </div>
            <div class="help-center__block-content">
                <div class="help-center__block-items">

                </div>
                
                    ${data.is_lines_more_limit
                        ? `<a class="help-center__block-link help-center__block-link--show-more" href="#">${data.see_all_n_results}</a>`
                        : ``
                    }
                
            </div>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/template" id="help_center_block_link" data-no-defer="true" data-no-execute="§">
        <div class="help-center__block-link ${data.link_limit_class ? data.link_limit_class : ``}">
            <a class="${data.image_url || data.icon ? `help-center__block-link--with-image` : ``}" href="${data.url}" target="_blank">
                <div class="help-center__block-link-image-container">
                    
                        ${data.image_url ? `<img class="help-center__block-link-image" src="${data.image_url}"/>` : ``}
                    

                    <div class="help-center__block-link-image-container--time-indicator">
                        
                            ${data.time ? data.time : ``}
                        
                    </div>
                </div>

                
                    ${data.icon ? `<i class="help-center__block-link-icon ${data.icon}"></i>` : ``}
                

                ${data.text}
                <div class="help-center__block-link--label">
                    
                        ${data.data ? data.data : ``}
                    
                </div>
            </a>
        </div>
    <?php echo '</script'; ?>
>
<?php }?>
<?php }} ?>
