<?php /* Smarty version 2.6.26, created on 2011-02-25 09:53:19
         compiled from search/advancedSearch.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'search/advancedSearch.tpl', 32, false),array('function', 'url', 'search/advancedSearch.tpl', 50, false),array('function', 'html_options', 'search/advancedSearch.tpl', 60, false),array('modifier', 'escape', 'search/advancedSearch.tpl', 32, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "navigation.search"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
<?php echo '
<!--
function ensureKeyword() {
	var allBlank = document.search.query.value == \'\';

	if (allBlank) {allBlank = document.search.author.value == \'\';}
	if (allBlank) {allBlank = document.search.title.value == \'\';}
	if (allBlank) {allBlank = document.search.discipline.value == \'\';}
	if (allBlank) {allBlank = document.search.subject.value == \'\';}
	if (allBlank) {allBlank = document.search.type.value == \'\';}
	if (allBlank) {allBlank = document.search.coverage.value == \'\';}
	if (allBlank) {allBlank = document.search.supplementaryFiles.value == \'\';}
	if (allBlank) {allBlank = document.search.fullText.value == \'\';}

	if (allBlank) {
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

<?php if (! $this->_tpl_vars['dateFrom']): ?>
<?php $this->assign('dateFrom', "--"); ?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['dateTo']): ?>
<?php $this->assign('dateTo', "--"); ?>
<?php endif; ?>
<div id="advancedSearch">
<form method="post" name="search" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'advancedResults'), $this);?>
">

<table class="data" width="100%">
<tr valign="top">
	<td width="25%" class="label"><label for="advancedQuery"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.searchAllCategories"), $this);?>
</label></td>
	<td width="75%" class="value"><input type="text" id="advancedQuery" name="query" size="40" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['query'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="textField" /></td>
</tr>
<?php if ($this->_tpl_vars['siteSearch']): ?>
<tr valign="top">
	<td class="label"><label for="searchJournal"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.withinJournal"), $this);?>
</label></td>
	<td class="value"><select name="searchJournal" id="searchJournal" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['journalOptions'],'selected' => $this->_tpl_vars['searchJournal']), $this);?>
</select></td>
</tr>
<?php endif; ?>
</table>

<p><input type="button" onclick="ensureKeyword();" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button defaultButton" /></p>

<script type="text/javascript">
<!--
	document.search.query.focus();
// -->
</script>
</form>
</div>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.syntaxInstructions"), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
