<?php
/* Smarty version 4.3.1, created on 2025-06-22 21:21:21
  from 'app:controllerstabworkflowsubmission.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_685873d1cee9a9_89630219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9777053048135d4ec61efce7073b9c92eb5a0c73' => 
    array (
      0 => 'app:controllerstabworkflowsubmission.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/tab/workflow/stageParticipants.tpl' => 1,
  ),
),false)) {
function content_685873d1cee9a9_89630219 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"editorial-workflow/submission",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<div class="pkp_workflow_sidebar">
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'submissionEditorDecisionsUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>\PKP\core\PKPApplication::ROUTE_PAGE,'page'=>"workflow",'op'=>"editorDecisionActions",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'contextId'=>"submission",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"submissionEditorDecisionsDiv",'url'=>$_smarty_tpl->tpl_vars['submissionEditorDecisionsUrl']->value,'class'=>"pkp_tab_actions"),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/tab/workflow/stageParticipants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div class="pkp_workflow_content">
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'submissionFilesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>\PKP\core\PKPApplication::ROUTE_COMPONENT,'component'=>"grid.files.submission.EditorSubmissionDetailsFilesGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"submissionFilesGridDiv",'url'=>$_smarty_tpl->tpl_vars['submissionFilesGridUrl']->value),$_smarty_tpl ) );?>


	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'queriesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>\PKP\core\PKPApplication::ROUTE_COMPONENT,'component'=>"grid.queries.QueriesGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"queriesGrid",'url'=>$_smarty_tpl->tpl_vars['queriesGridUrl']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
