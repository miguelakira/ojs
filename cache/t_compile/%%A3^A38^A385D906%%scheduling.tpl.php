<?php /* Smarty version 2.6.26, created on 2011-02-17 06:21:12
         compiled from sectionEditor/submission/scheduling.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/scheduling.tpl', 12, false),array('function', 'url', 'sectionEditor/submission/scheduling.tpl', 15, false),array('function', 'html_options', 'sectionEditor/submission/scheduling.tpl', 25, false),array('modifier', 'truncate', 'sectionEditor/submission/scheduling.tpl', 25, false),)), $this); ?>
<div id="scheduling">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.scheduling"), $this);?>
</h3>

<?php if (! $this->_tpl_vars['publicatonFeeEnabled'] || $this->_tpl_vars['publicationPayment']): ?>
	<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'scheduleForPublication','path' => $this->_tpl_vars['submission']->getId()), $this);?>
" method="post">
	<p>
		<label for="issueId"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.scheduleForPublication"), $this);?>
</label>
		<?php if ($this->_tpl_vars['publishedArticle']): ?>
			<?php $this->assign('issueId', $this->_tpl_vars['publishedArticle']->getIssueId()); ?>
		<?php else: ?>
			<?php $this->assign('issueId', 0); ?>
		<?php endif; ?>
		<select name="issueId" id="issueId" class="selectMenu">
			<option value=""><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.scheduleForPublication.toBeAssigned"), $this);?>
</option>
			<?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['issueOptions'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 40, "...")),'selected' => $this->_tpl_vars['issueId']), $this);?>

		</select>&nbsp;
		<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button defaultButton" />&nbsp;
		<?php if ($this->_tpl_vars['issueId']): ?>
			<?php if ($this->_tpl_vars['isEditor']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueToc','path' => $this->_tpl_vars['issueId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a>
			<?php else: ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issueId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a>
			<?php endif; ?>
		<?php endif; ?>
	</p>
	</form>
<?php else: ?>
	<table class="data">
    <tr>
    	<td width="50%">
    		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.payment.publicationFeeNotPaid"), $this);?>

    	</td>
		<td align="right">
			<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'waivePublicationFee','path' => $this->_tpl_vars['submission']->getId()), $this);?>
" method="post">
			<input type="hidden" name="markAsPaid" value=1 />
			<input type="hidden" name="sendToScheduling" value=1 />
			<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "payment.paymentReceived"), $this);?>
" class="button defaultButton" />&nbsp;
			</form>
		</td>
		<?php if ($this->_tpl_vars['isEditor']): ?>
		<td align="left">
			<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'waivePublicationFee','path' => $this->_tpl_vars['submission']->getId()), $this);?>
" method="post">
			<input type="hidden" name="sendToScheduling" value=1 />
			<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "payment.waive"), $this);?>
" class="button defaultButton" />&nbsp;
			</form>
		</td>	
		<?php endif; ?>
	</tr>
	</table>
<?php endif; ?>
</div>