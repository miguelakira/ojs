{**
 * index.tpl
 *
 * Copyright (c) 2003-2010 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Journal index page.
 *
 * $Id$
 *}
{strip}
{assign var="pageTitleTranslated" value=$siteTitle}
{include file="common/header.tpl"}
{/strip}

<div>{$journalDescription}</div>

{call_hook name="Templates::Index::journal"}

{if $homepageImage}
<br />
<div id="homepageImage"><img src="{$publicFilesDir}/{$homepageImage.uploadName|escape:"url"}" width="{$homepageImage.width|escape}" height="{$homepageImage.height|escape}" {if $homepageImageAltText != ''}alt="{$homepageImageAltText|escape}"{else}alt="{translate key="common.journalHomepageImage.altText"}"{/if} /></div>
{/if}

{if $additionalHomeContent}
<br />
{$additionalHomeContent}
{/if}

{if $enableAnnouncementsHomepage}
	{* Display announcements *}
	<div id="announcementsHome">
		<h3>{translate key="announcement.announcementsHome"}</h3>
		{include file="announcement/list.tpl"}	
		<table class="announcementsMore">
			<tr>
				<td><a href="{url page="announcement"}">{translate key="announcement.moreAnnouncements"}</a></td>
			</tr>
		</table>
	</div>
{/if}
<br />  

<h2> Notícias </h2>
<p></p>

	{* Display the table of contents or cover page of the current issue. *}

<br />





{include file="common/footer.tpl"}

