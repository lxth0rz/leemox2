<?php /* Smarty version Smarty-3.1.21, created on 2020-12-07 19:48:20
         compiled from "/var/www/html/demo2/design/backend/templates/addons/vendor_plans/hooks/companies/search_form_main.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8931508605fce5cd4535029-03629445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2992ef0a9030696e8a2cba609d5026dc478d698b' => 
    array (
      0 => '/var/www/html/demo2/design/backend/templates/addons/vendor_plans/hooks/companies/search_form_main.post.tpl',
      1 => 1606814111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8931508605fce5cd4535029-03629445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_plans' => 0,
    'plan' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fce5cd454cab9_94098391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fce5cd454cab9_94098391')) {function content_5fce5cd454cab9_94098391($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan'));
?>
<div class="sidebar-field">
    <label for="elm_plan"><?php echo $_smarty_tpl->__("vendor_plans.plan");?>
</label>
    <div class="select2-wrapper">
        <select name="plan_id" id="elm_plan" class="cm-object-selector">
            <option value=""> -- </option>
            <?php  $_smarty_tpl->tpl_vars["plan"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["plan"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["plan"]->key => $_smarty_tpl->tpl_vars["plan"]->value) {
$_smarty_tpl->tpl_vars["plan"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['search']->value['plan_id']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value->plan, ENT_QUOTES, 'UTF-8');?>
 (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value->price), 0);?>
)</option>
            <?php } ?>
        </select>
    </div>
</div>
<?php }} ?>
