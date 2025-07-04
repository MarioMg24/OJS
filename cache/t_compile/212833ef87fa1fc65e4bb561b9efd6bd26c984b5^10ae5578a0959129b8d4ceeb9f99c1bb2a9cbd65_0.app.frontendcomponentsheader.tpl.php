<?php
/* Smarty version 4.3.1, created on 2025-06-22 21:23:23
  from 'app:frontendcomponentsheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6858744b75e066_70219063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ae5578a0959129b8d4ceeb9f99c1bb2a9cbd65' => 
    array (
      0 => 'app:frontendcomponentsheader.tpl',
      1 => 1749441565,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
  ),
),false)) {
function content_6858744b75e066_70219063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs2\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
   
      <?php $_smarty_tpl->_assignInScope('showingLogo', true);?>
   <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
	   <?php $_smarty_tpl->_assignInScope('showingLogo', false);?>
   <?php }?>
   
   <!DOCTYPE html>
	<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
	<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body class="pkp_page_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);?>
 pkp_op_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);
if ($_smarty_tpl->tpl_vars['showingLogo']->value) {?> has_site_logo<?php }?>">
	<div class="pkp_structure_page">

		<nav id="accessibility-nav" class="sr-only" role="navigation" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.accessible_menu.label"),$_smarty_tpl ) ) ));?>
">
			<ul>
				<li><a href="#main-navigation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.accessible_menu.main_navigation"),$_smarty_tpl ) ) ));?>
</a></li>
				<li><a href="#main-content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.accessible_menu.main_content"),$_smarty_tpl ) ) ));?>
</a></li>
				<li><a href="#sidebar"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.accessible_menu.sidebar"),$_smarty_tpl ) ) ));?>
</a></li>
			</ul>
		</nav>

				<header class="navbar navbar-default" id="headerNavigationContainer" role="banner">
			<div class="container-fluid">
				<div class="row">
					<nav aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.user"),$_smarty_tpl ) ) ));?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"user",'id'=>"navigationUser",'ulClass'=>"nav nav-pills tab-list pull-right"),$_smarty_tpl ) );?>

					</nav>
				</div>
			</div>

			<div class="container-fluid">
				<div class="navbar-header" style="display: flex; align-items: center;">
					<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value) {?>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index"),$_smarty_tpl ) );?>
" class="navbar-brand-logo" style="margin-right: 20px; border: none;">
							<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['uploadName'],"url" ));?>
"
								style="max-height: 130px; width: auto;"
								<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] != '') {?>alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] ));?>
"<?php }?>>
						</a>
					<?php }?>

					<div style="font-family: 'Georgia', serif; font-size: 45px; color: #2e6a45; line-height: 1.2;">
						<strong>Green World Journal</strong>
						<div style="font-size: 16px; color: #555; margin-top: 5px;">e-ISSN 2737-6109</div>
					</div>
				</div>
			</div>
		</header>

		<style>
			.material-nav-container {
				background: #ffffff;
				padding: 12px;
				border-radius: 8px;
				box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
			}

			.material-side-nav {
				list-style: none;
				padding: 0;
				margin: 0;
			}

			.material-side-nav > li {
				margin-bottom: 6px;
			}

			.material-side-nav > li > a {
				display: block;
				padding: 8px 12px;
				border-radius: 6px;
				color: #2e6a45;
				font-size: 13px;
				text-decoration: none;
				transition: background-color 0.2s ease, color 0.2s ease;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
			}

			.material-side-nav > li > a:hover {
				background-color: #e7f3ec;
				color: #1a3c2c;
			}

			.material-side-nav > li.active > a {
				background-color: #c8e6c9;
				color: #1b5e20;
				font-weight: bold;
			}
			/* RESPONSIVE: ocultar menú lateral y mostrarlo arriba en pantallas pequeñas */
			@media (max-width: 767px) {
				aside[role="navigation"] {
					width: 100%;
					margin-bottom: 1rem;
				}

				.material-nav-container {
					display: flex;
					flex-wrap: wrap;
					justify-content: center;
					box-shadow: none;
					border-radius: 0;
					background: transparent;
				}

				.material-side-nav {
					display: flex;
					flex-wrap: wrap;
					justify-content: center;
					gap: 10px;
				}

				.material-side-nav > li {
					margin: 0;
				}

				.material-side-nav > li > a {
					font-size: 13px;
					padding: 6px 10px;
					background-color: #f4f4f4;
					border-radius: 20px;
				}
			}
		</style>

		<div class="container-fluid" style="display: flex; margin-top: 20px; ">
			<!-- Menú lateral izquierdo -->
			<aside class="col-md-2 col-sm-12" role="navigation">
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "primaryMenu", null);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"primary",'id'=>"main-navigation",'ulClass'=>"material-side-nav"),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php if (!empty(trim($_smarty_tpl->tpl_vars['primaryMenu']->value)) || $_smarty_tpl->tpl_vars['currentContext']->value) {?>
					<nav id="nav-menu" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.site"),$_smarty_tpl ) ) ));?>
">
						<div class="material-nav-container">
							<?php echo $_smarty_tpl->tpl_vars['primaryMenu']->value;?>

						</div>
					</nav>
				<?php }?>
			</aside>

			<!-- Contenido principal -->
			<main class="pkp_structure_main col-xs-12 col-sm-10 col-md-8" role="main">

<?php }
}
