{**
 * advancedSearch.tpl
 *
 * Copyright (c) 2003-2010 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Site/journal advanced search form.
 *
 * $Id$
 *}
{strip}
{assign var="pageTitle" value="navigation.search"}
{include file="common/header.tpl"}
{/strip}

<script type="text/javascript">
{literal}
<!--
function ensureKeyword() {
	var allBlank = document.search.query.value == '';

	if (allBlank) {allBlank = document.search.author.value == '';}
	if (allBlank) {allBlank = document.search.title.value == '';}
	if (allBlank) {allBlank = document.search.discipline.value == '';}
	if (allBlank) {allBlank = document.search.subject.value == '';}
	if (allBlank) {allBlank = document.search.type.value == '';}
	if (allBlank) {allBlank = document.search.coverage.value == '';}
	if (allBlank) {allBlank = document.search.supplementaryFiles.value == '';}
	if (allBlank) {allBlank = document.search.fullText.value == '';}

	if (allBlank) {
		alert({/literal}'{translate|escape:"jsparam" key="search.noKeywordError"}'{literal});
		return false;
	}
	document.search.submit();
	return true;
}
// -->
{/literal}
</script>

{if !$dateFrom}
{assign var="dateFrom" value="--"}
{/if}

{if !$dateTo}
{assign var="dateTo" value="--"}
{/if}
<div id="advancedSearch">
<form method="post" name="search" action="{url op="advancedResults"}">

<table class="data" width="100%">
<tr valign="top">
	<td width="25%" class="label"><label for="advancedQuery">{translate key="search.searchAllCategories"}</label></td>
	<td width="75%" class="value"><input type="text" id="advancedQuery" name="query" size="40" maxlength="255" value="{$query|escape}" class="textField" /></td>
</tr>
{if $siteSearch}
<tr valign="top">
	<td class="label"><label for="searchJournal">{translate key="search.withinJournal"}</label></td>
	<td class="value"><select name="searchJournal" id="searchJournal" class="selectMenu">{html_options options=$journalOptions selected=$searchJournal}</select></td>
</tr>
{/if}
</table>

<p><input type="button" onclick="ensureKeyword();" value="{translate key="common.search"}" class="button defaultButton" /></p>

<script type="text/javascript">
<!--
	document.search.query.focus();
// -->
</script>
</form>
</div>
{translate key="search.syntaxInstructions"}

{include file="common/footer.tpl"}

