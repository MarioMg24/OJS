{**
	* lib/pkp/templates/frontend/components/header.tpl
	*
	* Copyright (c) 2014-2024 Simon Fraser University
	* Copyright (c) 2003-2024 John Willinsky
	* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
	*
	* @brief Common frontend site header.
	*
	* @uses $isFullWidth bool Should this page be displayed without sidebars? This
	*       represents a page-level override, and doesn't indicate whether or not
	*       sidebars have been configured for thesite.
	*}
   
   {* Determine whether a logo or title string is being displayed *}
   {assign var="showingLogo" value=true}
   {if $displayPageHeaderTitle && !$displayPageHeaderLogo && is_string($displayPageHeaderTitle)}
	   {assign var="showingLogo" value=false}
   {/if}
   
   <!DOCTYPE html>
   <html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
   {if !$pageTitleTranslated}{capture assign="pageTitleTranslated"}{translate key=$pageTitle}{/capture}{/if}
   {include file="frontend/components/headerHead.tpl"}
   
   <body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}{if $showingLogo} has_site_logo{/if}">
	   <div class="pkp_structure_page">
   
		   <nav id="accessibility-nav" class="sr-only" role="navigation" aria-label="{translate|escape key="plugins.themes.bootstrap3.accessible_menu.label"}">
			   <ul>
				   <li><a href="#main-navigation">{translate|escape key="plugins.themes.bootstrap3.accessible_menu.main_navigation"}</a></li>
				   <li><a href="#main-content">{translate|escape key="plugins.themes.bootstrap3.accessible_menu.main_content"}</a></li>
				   <li><a href="#sidebar">{translate|escape key="plugins.themes.bootstrap3.accessible_menu.sidebar"}</a></li>
			   </ul>
		   </nav>
   
		   {* HEADER CON LOGO Y TÍTULO *}
			<header class="navbar navbar-default" id="headerNavigationContainer" role="banner">
				<div class="container-fluid">
					<div class="row">
						<nav aria-label="{translate|escape key="common.navigation.user"}">
							{load_menu name="user" id="navigationUser" ulClass="nav nav-pills tab-list pull-right"}
						</nav>
					</div>
				</div>

				<div class="container-fluid">
					<div class="navbar-header" style="display: flex; align-items: center; padding: 15px 0;">
						{if $displayPageHeaderLogo}
							<a href="{url page="index"}" class="navbar-brand-logo" style="margin-right: 20px; border: none;">
								<img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}"
									style="max-height: 80px; width: auto;"
									{if $displayPageHeaderLogo.altText != ''}alt="{$displayPageHeaderLogo.altText|escape}"{/if}>
							</a>
						{/if}

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
					padding: 10px;
					border-radius: 8px;
					box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
					font-size: 14px;
					text-decoration: none;
					transition: background-color 0.2s ease, color 0.2s ease;
					white-space: nowrap;
					overflow: hidden;
					text-overflow: ellipsis;
				}
			
				.material-side-nav > li > a:hover {
					background-color: #e0f2f1;
					color: #004d40;
				}
			
				.material-side-nav > li.active > a {
					background-color: #b2dfdb;
					color: #00695c;
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
			

			{* CONTENIDO CON MENÚ VERTICAL Y MAIN *}
			<div class="pkp_structure_content container-fluid" style="padding-top: 20px;">
				<div class="row">

					{* Menú lateral izquierdo *}
					<aside class="col-md-2 col-sm-12" role="navigation">
						{capture assign="primaryMenu"}
							{load_menu name="primary" id="main-navigation" ulClass="material-side-nav"}
						{/capture}
						{if !empty(trim($primaryMenu)) || $currentContext}
							<nav id="nav-menu" aria-label="{translate|escape key="common.navigation.site"}">
								<div class="material-nav-container">
									{$primaryMenu}
								</div>
							</nav>
						{/if}
					</aside>

					{* Contenido principal *}
					<main class="pkp_structure_main col-md-7 col-sm-12" role="main">
