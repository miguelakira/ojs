<?php /* Smarty version 2.6.26, created on 2011-02-17 06:22:54
         compiled from article/article.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'article/article.tpl', 17, false),array('function', 'translate', 'article/article.tpl', 18, false),array('function', 'call_hook', 'article/article.tpl', 74, false),array('modifier', 'to_array', 'article/article.tpl', 17, false),array('modifier', 'assign', 'article/article.tpl', 17, false),array('modifier', 'escape', 'article/article.tpl', 22, false),array('modifier', 'strip_unsafe_html', 'article/article.tpl', 75, false),array('modifier', 'nl2br', 'article/article.tpl', 82, false),array('block', 'iterate', 'article/article.tpl', 91, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "article/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['galley']): ?>
	<?php if ($this->_tpl_vars['galley']->isHTMLGalley()): ?>
		<?php echo $this->_tpl_vars['galley']->getHTMLContents(); ?>

	<?php elseif ($this->_tpl_vars['galley']->isPdfGalley()): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pdfUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pdfUrl'));?>

		<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'article.pdf.pluginMissing'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'noPluginText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'noPluginText'));?>

		<script type="text/javascript"><!--<?php echo '
			$(document).ready(function(){
				if ($.browser.webkit) { // PDFObject does not correctly work with safari\'s built-in PDF viewer
					var embedCode = "<object id=\'pdfObject\' type=\'application/pdf\' data=\''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pdfUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '\' width=\'99%\' height=\'99%\'><div id=\'pluginMissing\'>'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['noPluginText'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '</div></object>";
					$("#articlePdf").html(embedCode);
					if($("#pluginMissing").is(":hidden")) {
						$(\'#fullscreenShow\').show();
						$("#articlePdf").resizable({ containment: \'parent\', handles: \'se\' });
					} else { // Chrome Mac hides the embed object, obscuring the text.  Reinsert.
						$("#articlePdf").html(\''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['noPluginText'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '\');
					}
				} else {
					var success = new PDFObject({ url: "'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pdfUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '" }).embed("articlePdf");
					if (success) {
						// PDF was embedded; enbale fullscreen mode and the resizable widget
						$(\'#fullscreenShow\').show();
						$("#articlePdfResizer").resizable({ containment: \'parent\', handles: \'se\' });
					}
				}
			});
		'; ?>

		// -->
		</script>
		<div id="articlePdfResizer">
			<div id="articlePdf" class="ui-widget-content">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pdf.pluginMissing"), $this);?>

			</div>
		</div>
		<p>
						<a class="action" target="_parent" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pdf.download"), $this);?>
</a>
			<a class="action" href="#" id="fullscreenShow"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fullscreen"), $this);?>
</a>
			<a class="action" href="#" id="fullscreenHide"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fullscreenOff"), $this);?>
</a>
		</p>
	<?php endif; ?>
<?php else: ?>
	<div id="topBar">
		<?php $this->assign('galleys', $this->_tpl_vars['article']->getLocalizedGalleys()); ?>
		<?php if ($this->_tpl_vars['galleys'] && $this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks']): ?>
			<div id="accessKey">
				<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.openAccess"), $this);?>
&nbsp;
				<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
				<?php if ($this->_tpl_vars['purchaseArticleEnabled']): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionOrFeeAccess"), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionAccess"), $this);?>

				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
	<?php if ($this->_tpl_vars['coverPagePath']): ?>
		<div id="articleCoverImage"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPageFileName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['coverPageAltText'] != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPageAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?> alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.coverPage.altText"), $this);?>
"<?php endif; ?><?php if ($this->_tpl_vars['width']): ?> width="<?php echo ((is_array($_tmp=$this->_tpl_vars['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['height']): ?> height="<?php echo ((is_array($_tmp=$this->_tpl_vars['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>/>
		</div>
	<?php endif; ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Article::Article::ArticleCoverImage"), $this);?>

	<div id="articleTitle"><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</h3></div>
	<div id="authorString"><em><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</em></div>
	<br />
	<?php if ($this->_tpl_vars['article']->getLocalizedAbstract()): ?>
		<div id="articleAbstract">
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</h4>
		<br />
		<div><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
		<br />
		</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['citationFactory']): ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations"), $this);?>
</h4>
		<br />
		<div>
			<?php $this->_tag_stack[] = array('iterate', array('from' => 'citationFactory','item' => 'citation')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<p><?php echo ((is_array($_tmp=$this->_tpl_vars['citation']->getRawCitation())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</p>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</div>
		<br />
	<?php endif; ?>

	<?php if (( ! $this->_tpl_vars['subscriptionRequired'] || $this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN || $this->_tpl_vars['subscribedUser'] || $this->_tpl_vars['subscribedDomain'] )): ?>
		<?php $this->assign('hasAccess', 1); ?>
	<?php else: ?>
		<?php $this->assign('hasAccess', 0); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['galleys']): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.fullText"), $this);?>

		<?php if ($this->_tpl_vars['hasAccess'] || ( $this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] )): ?>
			<?php $_from = $this->_tpl_vars['article']->getLocalizedGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" class="file" target="_parent"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
				<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && $this->_tpl_vars['restrictOnlyPdf']): ?>
					<?php if ($this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN || ! $this->_tpl_vars['galley']->isPdfGalley()): ?>
						<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
					<?php else: ?>
						<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && ! $this->_tpl_vars['restrictOnlyPdf']): ?>
				<?php if ($this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN): ?>
					<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
				<?php else: ?>
					<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
				<?php endif; ?>
			<?php endif; ?>
		<?php else: ?>
			&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'subscriptions'), $this);?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscribersOnly"), $this);?>
</a>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "article/comments.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "article/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
