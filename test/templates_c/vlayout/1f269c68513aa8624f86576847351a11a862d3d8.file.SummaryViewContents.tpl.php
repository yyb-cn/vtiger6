<?php /* Smarty version Smarty-3.1.7, created on 2014-08-13 08:45:56
         compiled from "/alidata/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/SummaryViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183098852353eb25c465aa77-65184780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f269c68513aa8624f86576847351a11a862d3d8' => 
    array (
      0 => '/alidata/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/SummaryViewContents.tpl',
      1 => 1407919025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183098852353eb25c465aa77-65184780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SUMMARY_RECORD_STRUCTURE' => 0,
    'FIELD_MODEL' => 0,
    'MODULE_NAME' => 0,
    'USER_MODEL' => 0,
    'RECORD' => 0,
    'IS_AJAX_ENABLED' => 0,
    'CURRENT_VIEW' => 0,
    'CURRENT_MODE_LABEL' => 0,
    'FULL_MODE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53eb25c47060c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53eb25c47060c')) {function content_53eb25c47060c($_smarty_tpl) {?>
<table class="summary-table"><tbody><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY_RECORD_STRUCTURE']->value['SUMMARY_FIELDS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')!='modifiedtime'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')!='createdtime'){?><tr class="summaryViewEntries"><td class="fieldLabel" style="width:30%"><label class="muted"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue" style="width:70%"><div class="row-fluid"><span class="value span10" style="word-wrap: break-word;"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDetailViewTemplateName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()=='true'&&($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()!=Vtiger_Field_Model::REFERENCE_TYPE)&&$_smarty_tpl->tpl_vars['IS_AJAX_ENABLED']->value&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isAjaxEditable()=='true'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')!=69){?><span class="summaryViewEdit cursorPointer span2"><i class="icon-pencil" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></i></span><span class="hide edit span10"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='multipicklist'){?><input type="hidden" class="fieldname" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
[]' data-prev-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' /><?php }else{ ?><input type="hidden" class="fieldname" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
' data-prev-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
' /><?php }?></span><?php }?></div></td></tr><?php }?><?php } ?></tbody></table><hr><div class="row-fluid"><div class="span4 toggleViewByMode"><?php $_smarty_tpl->tpl_vars["CURRENT_VIEW"] = new Smarty_variable("full", null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate('LBL_COMPLETE_DETAILS',$_tmp1);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["CURRENT_MODE_LABEL"] = new Smarty_variable($_tmp2, null, 0);?><button type="button" class="btn changeDetailViewMode cursorPointer"><strong><?php echo vtranslate('LBL_SHOW_FULL_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php ob_start();?><?php echo ($_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl()).('&mode=showDetailViewByMode&requestMode=full');?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["FULL_MODE_URL"] = new Smarty_variable($_tmp3, null, 0);?><input type="hidden" name="viewMode" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_VIEW']->value;?>
" data-nextviewname="full" data-currentviewlabel="<?php echo $_smarty_tpl->tpl_vars['CURRENT_MODE_LABEL']->value;?>
"data-full-url="<?php echo $_smarty_tpl->tpl_vars['FULL_MODE_URL']->value;?>
"  /></div><div class="span8"><div class="pull-right"><div><p><small><em><?php echo vtranslate('LBL_CREATED_ON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <b><?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['RECORD']->value->get('createdtime'));?>
</b></em></small></p></div><div><p><small><em><?php echo vtranslate('LBL_MODIFIED_ON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <b><?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['RECORD']->value->get('modifiedtime'));?>
</b></em></small></p></div></div></div></div><?php }} ?>