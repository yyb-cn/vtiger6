<?php /* Smarty version Smarty-3.1.7, created on 2014-08-13 08:38:56
         compiled from "/alidata/www/crm/includes/runtime/../../layouts/vlayout/modules/Users/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189920356253eb2420683b77-30197610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb31cbb4f6c43f9a8d981d4d105cee62440336d4' => 
    array (
      0 => '/alidata/www/crm/includes/runtime/../../layouts/vlayout/modules/Users/DetailViewFullContents.tpl',
      1 => 1407919025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189920356253eb2420683b77-30197610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_MODEL' => 0,
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
    'WIDTHTYPE' => 0,
    'MODULE' => 0,
    'RECORD' => 0,
    'TAG_CLOUD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53eb24206dd5e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53eb24206dd5e')) {function content_53eb24206dd5e($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
<table class="table table-bordered equalSplit detailview-table"><thead><tr><th class="blockHeader" colspan="4"><?php echo vtranslate('LBL_TAG_CLOUD_DISPLAY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</th></tr></thead><tbody><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_detailView_fieldLabel_tagCloud"><label class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_TAG_CLOUD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_detailView_fieldValue_tagCloud"><?php $_smarty_tpl->tpl_vars['TAG_CLOUD'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->getTagCloudStatus(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['TAG_CLOUD']->value){?><img src=<?php echo vimage_path("prvPrfSelectedTick.gif");?>
 alt="<?php echo vtranslate('LBL_SHOWN',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" title="<?php echo vtranslate('LBL_SHOWN',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" height="12" width="12">&nbsp;&nbsp;<?php echo vtranslate('LBL_SHOWN',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }else{ ?><img src=<?php echo vimage_path("no.gif");?>
 alt="<?php echo vtranslate('LBL_HIDDEN',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" title="<?php echo vtranslate('LBL_HIDDEN',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" height="12" width="12">&nbsp;&nbsp;<?php echo vtranslate('LBL_HIDDEN',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }?></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td></tr></tbody></table><?php }} ?>