<?php /* Smarty version Smarty-3.1.7, created on 2014-08-13 08:40:50
         compiled from "/alidata/www/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleManager/ImportUserModuleStep3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197307092953eb2492d5c457-91453009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed4c3c4078f2a8916078d4b72fceec6b89de124e' => 
    array (
      0 => '/alidata/www/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleManager/ImportUserModuleStep3.tpl',
      1 => 1407919025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197307092953eb2492d5c457-91453009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'IMPORT_MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53eb2492d826d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53eb2492d826d')) {function content_53eb2492d826d($_smarty_tpl) {?>
<div class="container-fluid" id="importModules"><div class="widget_header row-fluid"><h3><?php echo vtranslate('LBL_IMPORT_MODULE_FROM_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr><div class="contents"><div class="row-fluid"><div id="vtlib_modulemanager_import_div"><form method="POST" action="index.php"><table class="table table-bordered"><thead><tr class="blockHeader"><th colspan="2"><strong><?php echo vtranslate('LBL__IMPORTING_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><tr valign=top><td class='cellText small'><?php echo $_smarty_tpl->tpl_vars['IMPORT_MODULE_NAME']->value;?>
 <?php echo vtranslate('LBL_IMPORTED_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr></tbody></table><div class="modal-footer"><input type="hidden" name="module" value="ModuleManager"><input type="hidden" name="parent" value="Settings"><input type="hidden" name="view" value="List"><button  class="btn btn-success" type="submit" ><strong><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></form></div></div></div></div><?php }} ?>