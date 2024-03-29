<?php /* Smarty version 2.6.26, created on 2011-02-08 23:22:56
         compiled from search/searchResults.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'search/searchResults.tpl', 21, false),array('function', 'url', 'search/searchResults.tpl', 34, false),array('function', 'call_hook', 'search/searchResults.tpl', 62, false),array('function', 'page_info', 'search/searchResults.tpl', 121, false),array('function', 'page_links', 'search/searchResults.tpl', 123, false),array('modifier', 'escape', 'search/searchResults.tpl', 21, false),array('modifier', 'strip_unsafe_html', 'search/searchResults.tpl', 90, false),array('modifier', 'to_array', 'search/searchResults.tpl', 102, false),array('block', 'iterate', 'search/searchResults.tpl', 80, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "search.searchResults"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
<?php echo '
<!--
function ensureKeyword() {
	if (document.search.query.value == \'\') {
		alert('; ?>
'<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.noKeywordError"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
'<?php echo ');
		return false;
	}
	document.search.submit();
	return true;
}
// -->
'; ?>

</script>

<br/>

<?php if ($this->_tpl_vars['basicQuery']): ?>
	<form method="post" name="search" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'results'), $this);?>
">
		<input type="text" size="40" maxlength="255" class="textField" name="query" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['basicQuery'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>&nbsp;&nbsp;
		<input type="hidden" name="searchField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchField'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="submit" class="button defaultButton" onclick="ensureKeyword();" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
"/>
	</form>
	<br />
<?php else: ?>
	<form name="revise" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'advanced'), $this);?>
" method="post">
		<input type="hidden" name="query" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['query'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="searchJournal" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchJournal'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="author" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="fullText" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['fullText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="supplementaryFiles" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supplementaryFiles'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="discipline" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['discipline'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="type" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="coverage" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="dateFromMonth" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateFromMonth'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="dateFromDay" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateFromDay'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="dateFromYear" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateFromYear'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="dateToMonth" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateToMonth'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="dateToDay" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateToDay'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<input type="hidden" name="dateToYear" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateToYear'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
	</form>
	<a href="javascript:document.revise.submit()" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.reviseSearch"), $this);?>
</a><br />
<?php endif; ?>

<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Search::SearchResults::PreResults"), $this);?>


<?php if ($this->_tpl_vars['currentJournal']): ?>
	<?php $this->assign('numCols', 3); ?>
<?php else: ?>
	<?php $this->assign('numCols', 4); ?>
<?php endif; ?>

<div id="results">
<table width="100%" class="listing">
<tr><td colspan="<?php echo ((is_array($_tmp=$this->_tpl_vars['numCols'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<?php if (! $this->_tpl_vars['currentJournal']): ?><td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.journal"), $this);?>
</td><?php endif; ?>
	<td width="<?php if (! $this->_tpl_vars['currentJournal']): ?>20%<?php else: ?>40%<?php endif; ?>"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
</td>
	<td width="60%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
</tr>
<tr><td colspan="<?php echo ((is_array($_tmp=$this->_tpl_vars['numCols'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'results','item' => 'result')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->assign('publishedArticle', $this->_tpl_vars['result']['publishedArticle']); ?>
<?php $this->assign('article', $this->_tpl_vars['result']['article']); ?>
<?php $this->assign('issue', $this->_tpl_vars['result']['issue']); ?>
<?php $this->assign('issueAvailable', $this->_tpl_vars['result']['issueAvailable']); ?>
<?php $this->assign('journal', $this->_tpl_vars['result']['journal']); ?>
<?php $this->assign('section', $this->_tpl_vars['result']['section']); ?>
<tr valign="top">
	<?php if (! $this->_tpl_vars['currentJournal']): ?><td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath()), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></td><?php endif; ?>
	<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['journal'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></td>
	<td width="30%"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</td>
	<td width="30%" align="right">
		<?php if ($this->_tpl_vars['publishedArticle']->getAccessStatus() == @ARTICLE_ACCESS_OPEN || $this->_tpl_vars['issueAvailable']): ?>
			<?php $this->assign('hasAccess', 1); ?>
		<?php else: ?>
			<?php $this->assign('hasAccess', 0); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['publishedArticle']->getLocalizedAbstract() != ""): ?>
			<?php $this->assign('hasAbstract', 1); ?>
		<?php else: ?>
			<?php $this->assign('hasAbstract', 0); ?>
		<?php endif; ?>
		<?php if (! $this->_tpl_vars['hasAccess'] || $this->_tpl_vars['hasAbstract']): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => $this->_tpl_vars['publishedArticle']->getBestArticleId($this->_tpl_vars['journal'])), $this);?>
" class="file"><?php if (! $this->_tpl_vars['hasAbstract']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.details"), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
<?php endif; ?><?php endif; ?></a><?php if ($this->_tpl_vars['hasAccess']): ?><?php $_from = $this->_tpl_vars['publishedArticle']->getLocalizedGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['publishedArticle']->getBestArticleId($this->_tpl_vars['journal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['journal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['journal'])))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php endforeach; endif; unset($_from); ?><?php endif; ?>
	</td>
</tr>
<tr>
	<td colspan="<?php echo ((is_array($_tmp=$this->_tpl_vars['numCols'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" style="padding-left: 30px;font-style: italic;">
		<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['authorItem']):
        $this->_foreach['authorList']['iteration']++;
?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['authorItem']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</td>
</tr>
<tr><td colspan="<?php echo ((is_array($_tmp=$this->_tpl_vars['numCols'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="<?php if ($this->_tpl_vars['results']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['results']->wasEmpty()): ?>
<tr>
<td colspan="<?php echo ((is_array($_tmp=$this->_tpl_vars['numCols'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.noResults"), $this);?>
</td>
</tr>
<tr><td colspan="<?php echo ((is_array($_tmp=$this->_tpl_vars['numCols'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="endseparator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td <?php if (! $this->_tpl_vars['currentJournal']): ?>colspan="2" <?php endif; ?>align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['results']), $this);?>
</td>
		<?php if ($this->_tpl_vars['basicQuery']): ?>
			<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'results','iterator' => $this->_tpl_vars['results'],'name' => 'search','query' => $this->_tpl_vars['basicQuery'],'searchField' => $this->_tpl_vars['searchField']), $this);?>
</td>
		<?php else: ?>
			<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'results','iterator' => $this->_tpl_vars['results'],'name' => 'search','query' => $this->_tpl_vars['query'],'searchJournal' => $this->_tpl_vars['searchJournal'],'author' => $this->_tpl_vars['author'],'title' => $this->_tpl_vars['title'],'fullText' => $this->_tpl_vars['fullText'],'supplementaryFiles' => $this->_tpl_vars['supplementaryFiles'],'discipline' => $this->_tpl_vars['discipline'],'subject' => $this->_tpl_vars['subject'],'type' => $this->_tpl_vars['type'],'coverage' => $this->_tpl_vars['coverage'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear']), $this);?>
</td>
		<?php endif; ?>
	</tr>
<?php endif; ?>
</table>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.syntaxInstructions"), $this);?>
</p>
</div>	

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
