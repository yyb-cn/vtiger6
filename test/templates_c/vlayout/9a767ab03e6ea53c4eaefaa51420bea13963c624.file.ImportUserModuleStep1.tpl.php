<?php /* Smarty version Smarty-3.1.7, created on 2014-08-13 08:40:35
         compiled from "/alidata/www/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleManager/ImportUserModuleStep1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112973074953eb24832ab420-89020711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a767ab03e6ea53c4eaefaa51420bea13963c624' => 
    array (
      0 => '/alidata/www/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleManager/ImportUserModuleStep1.tpl',
      1 => 1407919025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112973074953eb24832ab420-89020711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53eb24832d1cb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53eb24832d1cb')) {function content_53eb24832d1cb($_smarty_tpl) {?>
<div class="container-fluid" id="importModules"><div class="widget_header row-fluid"><h3><?php echo vtranslate('LBL_IMPORT_MODULE_FROM_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr><div class="contents"><div class="row-fluid"><form class="form-horizontal contentsBackground" id="importUserModule" name="importUserModule" action='index.php' method=POST enctype="multipart/form-data"><input type="hidden" name="module" value="ModuleManager" /><input type="hidden" name="moduleAction" value="Import"/><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="view" value="ModuleImport" /><input type="hidden" name="mode" value="importUserModuleStep2" /><div name='uploadUserModule'><div class="modal-body tabbable"><div class="tab-content massEditContent"><table class="massEditTable table table-bordered"><tr><td class="fieldLabel alignMiddle"><?php echo vtranslate('LBL_IMPORT_MODULE_FROM_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td class="fieldValue"><input type="file" name="moduleZip" id="moduleZip" size="80px"data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-validator=<?php echo Zend_Json::encode(array(array('name'=>'UploadModuleZip')));?>
/></td></tr></table></div></div></div><div class="modal-footer"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" href="index.php?module=ModuleManager&parent=Settings&view=List"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></form></div></div></div><?php }} ?>