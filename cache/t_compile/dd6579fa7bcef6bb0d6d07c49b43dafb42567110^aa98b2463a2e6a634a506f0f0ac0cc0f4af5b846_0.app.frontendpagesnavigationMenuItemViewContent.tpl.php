<?php
/* Smarty version 4.3.1, created on 2025-06-09 02:13:54
  from 'app:frontendpagesnavigationMenuItemViewContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68464362208884_94592114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa98b2463a2e6a634a506f0f0ac0cc0f4af5b846' => 
    array (
      0 => 'app:frontendpagesnavigationMenuItemViewContent.tpl',
      1 => 1744690272,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_68464362208884_94592114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

<div id="main-content" class="page page_about">

		<div class="page-header">
		<h1><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));?>
</h1>
	</div>
	
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
