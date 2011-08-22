{**
 * sidebar.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu.
 *
 * $Id: sidebar.tpl,v 1.27 2005/12/18 19:28:54 alec Exp $
 *}


<div class="block">
	
	{if $currentJournal}
	<span class="blockTitle">{translate key="navigation.browse"}</span>
	<ul>
		<li><a href="{url page="issue" op="archive"}">{translate key="navigation.browseByIssue"}</a></li>
		<li><a href="{url page="search" op="authors"}">{translate key="navigation.browseByAuthor"}</a></li>
		<li><a href="{url page="search" op="titles"}">{translate key="navigation.browseByTitle"}</a></li>
		{if $hasOtherJournals}
		<li><a href="{url journal="index"}">{translate key="navigation.otherJournals"}</a></li>
		{/if}
	</ul>
	{/if}
</div>

{if $currentJournal}
<div class="block">
	<span class="blockTitle">Informações</span>
	<ul>
		<li><a href="{url page="information" op="readers"}">{translate key="navigation.infoForReaders"}</a></li>
		<li><a href="{url page="information" op="authors"}">{translate key="navigation.infoForAuthors"}</a></li>
		<li><a href="{url page="information" op="librarians"}">{translate key="navigation.infoForLibrarians"}</a></li>		
	</ul>
</div>
{/if}
