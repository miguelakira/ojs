{**
 * header.tpl
 *
 * Copyright (c) 2000-2010 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site header.
 *}
{strip}
{if !$pageTitleTranslated}{translate|assign:"pageTitleTranslated" key=$pageTitle}{/if}
{if $pageCrumbTitle}
	{translate|assign:"pageCrumbTitleTranslated" key=$pageCrumbTitle}
{elseif !$pageCrumbTitleTranslated}
	{assign var="pageCrumbTitleTranslated" value=$pageTitleTranslated}
{/if}
{/strip}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset={$defaultCharset|escape}" />
	<title>{$pageTitleTranslated}</title>
	<meta name="description" content="{$metaSearchDescription|escape}" />
	<meta name="keywords" content="{$metaSearchKeywords|escape}" />
	<meta name="generator" content="{$applicationName} {$currentVersionString|escape}" />
	{$metaCustomHeaders}
	{if $displayFavicon}<link rel="icon" href="{$faviconDir}/{$displayFavicon.uploadName|escape:"url"}" />{/if}
	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/pkp.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/styles/common.css" type="text/css" />

	<!-- Base Jquery -->
	{if $allowCDN}<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">{literal}
		// Provide a local fallback if the CDN cannot be reached
		if (typeof google == 'undefined') {
			document.write(unescape("%3Cscript src='{/literal}{$baseUrl}{literal}/lib/pkp/js/lib/jquery/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
			document.write(unescape("%3Cscript src='{/literal}{$baseUrl}{literal}/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js' type='text/javascript'%3E%3C/script%3E"));
		} else {
			google.load("jquery", "{/literal}{$smarty.const.CDN_JQUERY_VERSION}{literal}");
			google.load("jqueryui", "{/literal}{$smarty.const.CDN_JQUERY_UI_VERSION}{literal}");
		}
	{/literal}</script>
	{else}
	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/lib/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js"></script>
	{/if}

	{call_hook|assign:"leftSidebarCode" name="Templates::Common::LeftSidebar"}
	{call_hook|assign:"rightSidebarCode" name="Templates::Common::RightSidebar"}
	{if $leftSidebarCode || $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/sidebar.css" type="text/css" />{/if}
	{if $leftSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/leftSidebar.css" type="text/css" />{/if}
	{if $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/rightSidebar.css" type="text/css" />{/if}
	{if $leftSidebarCode && $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/bothSidebars.css" type="text/css" />{/if}

	{foreach from=$stylesheets item=cssUrl}
		<link rel="stylesheet" href="{$cssUrl}" type="text/css" />
	{/foreach}

	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/general.js"></script>
	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/tag-it.js"></script>
	<!-- Add javascript required for font sizer -->
	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/fontController.js" ></script>
	<script type="text/javascript">{literal}
		$(function(){
			fontSize("#sizer", "body", 9, 16, 32, "{/literal}{$basePath|escape:"javascript"}{literal}"); // Initialize the font sizer
		});
	{/literal}</script>

	<script type="text/javascript">
        // initialise plugins
		{literal}
        $(function(){
        	{/literal}{if $validateId}{literal}
			jqueryValidatorI18n("{/literal}{$baseUrl}{literal}", "{/literal}{$currentLocale}{literal}"); // include the appropriate validation localization
			$("form[name={/literal}{$validateId}{literal}]").validate({
				errorClass: "error",
				highlight: function(element, errorClass) {
					$(element).parent().parent().addClass(errorClass);
				},
				unhighlight: function(element, errorClass) {
					$(element).parent().parent().removeClass(errorClass);
				}
			});
			{/literal}{/if}{literal}
		});
		{/literal}
	</script>

	{$additionalHeadData}
</head>
<body>
<div id="container">

<div id="header" class = "rounded-corners">
<div id="headerTitle">
<img class = "displayed" src="{$baseUrl}/lib/pkp/styles/images/logo2.png" border="0" >
<h1>
{if $displayPageHeaderLogo && is_array($displayPageHeaderLogo)}
	<img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" width="{$displayPageHeaderLogo.width|escape}" height="{$displayPageHeaderLogo.height|escape}" {if $displayPageHeaderLogoAltText != ''}alt="{$displayPageHeaderLogoAltText|escape}"{else}alt="{translate key="common.pageHeaderLogo.altText"}"{/if} />
{/if}

</h1>

</div> <!-- headerTitle -->
</div> <!-- header -->


<div id="content-container" class = "rounded-corners"d>


<div id="navbar">
<ul class="menu">

		<li><a href="{url page="index"}"><img src="{$baseUrl}/lib/pkp/styles/images/inicio.png"  border="0" ></a></li><br />
		<li><a href="{url page="login"}"><img src="{$baseUrl}/lib/pkp/styles/images/acesso.png" border="0" ></a></li><br />
		<li><a href="{url page="about"}"><img src="{$baseUrl}/lib/pkp/styles/images/sobre.png" border="0" ></a></li><br />
		<li><a href="{url page="search"}"><img src="{$baseUrl}/lib/pkp/styles/images/busca.png" border="0" ></a></li><br />
		<li><a href="{url page="issue" op="archive"}"><img src="{$baseUrl}/lib/pkp/styles/images/edicoes.png" border="0" ></a></li>
</ul>
</div> <!-- navbar -->
<div id = "breadcrumb">
{include file="common/breadcrumbs.tpl"}
<h2>{$pageTitleTranslated}</h2>

{if $pageSubtitle && !$pageSubtitleTranslated}{translate|assign:"pageSubtitleTranslated" key=$pageSubtitle}{/if}
{if $pageSubtitleTranslated}
	<h3>{$pageSubtitleTranslated}</h3>
{/if}

</div> <!-- breadcrumb -->

<div id="content">


