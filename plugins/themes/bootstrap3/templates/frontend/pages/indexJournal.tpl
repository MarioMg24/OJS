{**
 * templates/frontend/pages/indexJournal.tpl
 *
 * UPDATED/CHANGED/MODIFIED: Marc Behiels - marc@elemental.ca - 250416
 *
 * Copyright (c) 2014-2024 Simon Fraser University
 * Copyright (c) 2003-2024 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the index page for a journal
 *
 * @uses $currentJournal Journal This journal
 * @uses $journalDescription string Journal description from HTML text editor
 * @uses $homepageImage object Image to be displayed on the homepage
 * @uses $additionalHomeContent string Arbitrary input from HTML text editor
 * @uses $announcements array List of announcements
 * @uses $numAnnouncementsHomepage int Number of announcements to display on the
 *       homepage
 * @uses $issue Issue Current issue
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$currentJournal->getLocalizedName()}

<div id="main-content" class="page_index_journal">

	{call_hook name="Templates::Index::journal"}

	{if $homepageImage}
		<div class="homepage-image">
			<img class="img-responsive" src="{$publicFilesDir}/{$homepageImage.uploadName|escape:"url"}" alt="{$homepageImageAltText|escape}">
		</div>
	{/if}

	{* Buscador estilizado debajo de la imagen *}
	<div class="homepage-search" style="margin: 30px auto; text-align: center;">
		<form method="get" action="{url router=$smarty.const.ROUTE_PAGE page="search"}" role="search" class="custom-search-form" style="display: inline-flex; align-items: center; max-width: 600px; width: 100%;">
			<input name="query" type="text" aria-label="{translate key="common.search"}" placeholder="Buscar artículos..." class="custom-search-input" />
			<button type="submit" class="custom-search-button" aria-label="Buscar">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zm-5.242.656a5 5 0 1 1 0-10 5 5 0 0 1 0 10z"/>
				</svg>
			</button>
		</form>
	</div>

	<style>
		.custom-search-input {
			padding: 12px 18px;
			border: 1.5px solid #c4c4c4;
			border-radius: 40px 0 0 40px;
			font-size: 16px;
			width: 100%;
			max-width: 500px;
			background-color: #fdfdfd;
			transition: all 0.3s ease;
			box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05);
		}

		.custom-search-input:focus {
			border-color: #2e6a45;
			box-shadow: 0 0 6px rgba(46,106,69,0.2);
		}

		.custom-search-button {
			padding: 12px 20px;
			border: 1.5px solid #2e6a45;
			border-left: none;
			background-color: #2e6a45;
			color: white;
			border-radius: 0 40px 40px 0;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		.custom-search-button:hover {
			background-color: #1c4a34;
		}
	</style>


	{if $journalDescription}
		<div class="journal-description">
			{$journalDescription}
		</div>
	{/if}

	{* Announcements *}
	{if $numAnnouncementsHomepage && $announcements|count}
		<section class="cmp_announcements media">
			<header class="page-header">
				<h2>
					{translate key="announcement.announcements"}
				</h2>
			</header>
			<div class="media-list">
				{foreach name=announcements from=$announcements item=announcement}
					{if $smarty.foreach.announcements.iteration > $numAnnouncementsHomepage}
						{break}
					{/if}
					{include file="frontend/objects/announcement_summary.tpl" heading="h3"}
				{/foreach}
			</div>
		</section>
	{/if}


	{* Latest issue *}
	{if $issue}
		<section class="current_issue">
			<header class="page-header">
				<h2>
					{translate key="journal.currentIssue"}
				</h2>
			</header>
			<p class="current_issue_title lead">
				{$issue->getIssueIdentification()|strip_unsafe_html}
			</p>
			{include file="frontend/objects/issue_toc.tpl"}
			<a href="{url router=\PKP\core\PKPApplication::ROUTE_PAGE page="issue" op="archive"}" class="btn btn-primary read-more">
				{translate key="journal.viewAllIssues"}
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</section>
	{/if}

	{* Additional Homepage Content *}
	{if $additionalHomeContent}
		<section class="additional_content">
			{$additionalHomeContent}
		</section>
	{/if}

	
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
