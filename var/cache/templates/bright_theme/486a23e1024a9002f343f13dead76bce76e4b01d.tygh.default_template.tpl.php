<?php /* Smarty version Smarty-3.1.21, created on 2020-12-06 08:02:16
         compiled from "/var/www/html/demo2/design/themes/responsive/templates/blocks/product_templates/default_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18661452935fcc65d8e05570-59427965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486a23e1024a9002f343f13dead76bce76e4b01d' => 
    array (
      0 => '/var/www/html/demo2/design/themes/responsive/templates/blocks/product_templates/default_template.tpl',
      1 => 1607201049,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18661452935fcc65d8e05570-59427965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'settings' => 0,
    'no_images' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'product_labels' => 0,
    'form_open' => 0,
    'hide_title' => 0,
    'old_price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'price' => 0,
    'capture_options_vs_qty' => 0,
    'product_options' => 0,
    'advanced_options' => 0,
    'sku' => 0,
    'product_amount' => 0,
    'qty' => 0,
    'min_qty' => 0,
    'product_edp' => 0,
    'show_descr' => 0,
    'prod_descr' => 0,
    'capture_buttons' => 0,
    'show_details_button' => 0,
    'add_to_cart' => 0,
    'list_buttons' => 0,
    'form_close' => 0,
    'show_product_tabs' => 0,
    'tabs_block_id' => 0,
    'blocks' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fcc65d945cc07_21035833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcc65d945cc07_21035833')) {function content_5fcc65d945cc07_21035833($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/demo2/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_live_edit')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/demo2/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','description','view_details','add_to_cart','description','view_details'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<div class="ty-product-block ty-product-detail">
    <div class="ty-product-block__wrapper clearfix">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:view_main_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart")), 0);?>

            <div class="ty-product-block__img-wrapper" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'], ENT_QUOTES, 'UTF-8');?>
px">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:image_wrap")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:image_wrap"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                        <div class="ty-product-block__img cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update">

                            <?php $_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>


                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>"Y",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height']), 0);?>

                        <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update--></div>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:image_wrap"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="ty-product-block__left">
                <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:main_info_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:main_info_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                        <h1 class="ty-product-block-title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></h1>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand_default")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand_default"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <div class="brand">
                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0);?>

                            </div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand_default"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:main_info_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:promo_text")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['promo_text']) {?>
                <div class="ty-product-block__note-wrapper">
                    <div class="ty-product-block__note ty-product-block__note-inner">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                    </div>
                </div>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:promo_text"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap">
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                        <div class="ty-product-prices">
                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}?>
                    <?php }?>

                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value])) {?>
                        <div class="ty-product-block__price-actual">
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                        </div>
                    <?php }?>

                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                        </div>
                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                <div class="ty-product-block__option">
                    <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                <div class="ty-product-block__advanced-option clearfix">
                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                    <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                </div>

                <div class="ty-product-block__sku">
                    <?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                <div class="ty-product-block__field-group">
                    <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                    <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>


                    <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>


                <?php if ($_smarty_tpl->tpl_vars['show_descr']->value) {?>
                <?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <h3 class="ty-product-block__description-title"><?php echo $_smarty_tpl->__("description");?>
</h3>
                    <div class="ty-product-block__description"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start();
}?>
                <div class="ty-product-block__button">
                    <?php if ($_smarty_tpl->tpl_vars['show_details_button']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>$_smarty_tpl->__("view_details"),'but_role'=>"submit"), 0);?>

                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


                    <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_bottom")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo Smarty::$_smarty_vars['capture']['popupsbox_content'];?>

                <?php }?>
            </div>
        <?php }?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:view_main_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <?php if (Smarty::$_smarty_vars['capture']['hide_form_changed']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["hide_form"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['orig_val_hide_form'], null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox_content'],'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0);?>

            <?php } else { ?>
                <?php echo Smarty::$_smarty_vars['capture']['tabsbox_content'];?>

            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
</div>

<div class="product-details">
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
$_smarty_tpl->tpl_vars["details_page"] = new Smarty_variable(true, null, 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/default_template.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_templates/default_template.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<div class="ty-product-block ty-product-detail">
    <div class="ty-product-block__wrapper clearfix">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:view_main_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart")), 0);?>

            <div class="ty-product-block__img-wrapper" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'], ENT_QUOTES, 'UTF-8');?>
px">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:image_wrap")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:image_wrap"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                        <div class="ty-product-block__img cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update">

                            <?php $_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>


                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>"Y",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height']), 0);?>

                        <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update--></div>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:image_wrap"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="ty-product-block__left">
                <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:main_info_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:main_info_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                        <h1 class="ty-product-block-title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></h1>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand_default")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand_default"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <div class="brand">
                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0);?>

                            </div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand_default"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:main_info_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:promo_text")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['promo_text']) {?>
                <div class="ty-product-block__note-wrapper">
                    <div class="ty-product-block__note ty-product-block__note-inner">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                    </div>
                </div>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:promo_text"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap">
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                        <div class="ty-product-prices">
                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}?>
                    <?php }?>

                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value])) {?>
                        <div class="ty-product-block__price-actual">
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                        </div>
                    <?php }?>

                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                        </div>
                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                <div class="ty-product-block__option">
                    <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                <div class="ty-product-block__advanced-option clearfix">
                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                    <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                </div>

                <div class="ty-product-block__sku">
                    <?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                <div class="ty-product-block__field-group">
                    <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                    <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>


                    <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>


                <?php if ($_smarty_tpl->tpl_vars['show_descr']->value) {?>
                <?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <h3 class="ty-product-block__description-title"><?php echo $_smarty_tpl->__("description");?>
</h3>
                    <div class="ty-product-block__description"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start();
}?>
                <div class="ty-product-block__button">
                    <?php if ($_smarty_tpl->tpl_vars['show_details_button']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>$_smarty_tpl->__("view_details"),'but_role'=>"submit"), 0);?>

                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


                    <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_bottom")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo Smarty::$_smarty_vars['capture']['popupsbox_content'];?>

                <?php }?>
            </div>
        <?php }?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:view_main_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <?php if (Smarty::$_smarty_vars['capture']['hide_form_changed']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["hide_form"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['orig_val_hide_form'], null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox_content'],'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0);?>

            <?php } else { ?>
                <?php echo Smarty::$_smarty_vars['capture']['tabsbox_content'];?>

            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
</div>

<div class="product-details">
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
$_smarty_tpl->tpl_vars["details_page"] = new Smarty_variable(true, null, 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>