<?php
/* Smarty version 4.3.1, created on 2025-06-05 16:18:55
  from 'app:linkActionlinkAction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6841c36f87bb59_40692126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b8f66ab0f5039a54501d7fe6f596adb63e091ff' => 
    array (
      0 => 'app:linkActionlinkAction.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkActionButton.tpl' => 1,
    'app:linkAction/linkActionOptions.tpl' => 1,
  ),
),false)) {
function content_6841c36f87bb59_40692126 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['contextId']->value) {?>
	<?php $_smarty_tpl->_assignInScope('staticId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['contextId']->value,"-",$_smarty_tpl->tpl_vars['action']->value->getId(),"-button" )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('staticId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value->getId(),"-button" )));
}?>

<?php $_smarty_tpl->_assignInScope('buttonId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'uniqid' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['staticId']->value,"-" )) )));
$_smarty_tpl->_subTemplateRender("app:linkAction/linkActionButton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['action']->value,'buttonId'=>$_smarty_tpl->tpl_vars['buttonId']->value,'anyhtml'=>$_smarty_tpl->tpl_vars['anyhtml']->value,'html'=>$_smarty_tpl->tpl_vars['html']->value), 0, false);
?>

<?php echo '<script'; ?>
>
		$(function() {
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonId']->value,'jqselector' ));?>
').pkpHandler(
			'$.pkp.controllers.linkAction.LinkActionHandler',
				<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkActionOptions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['action']->value,'selfActivate'=>$_smarty_tpl->tpl_vars['selfActivate']->value,'staticId'=>$_smarty_tpl->tpl_vars['staticId']->value), 0, false);
?>
			);
	});
<?php echo '</script'; ?>
>
<?php }
}
