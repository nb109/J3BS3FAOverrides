<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>
<div class="remind<?php echo $this->pageclass_sfx?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	</div>
	<?php endif; ?>

	<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=remind.remind'); ?>" method="post" class="form-validate">
		<p><?php echo JText::_('COM_USERS_REMIND_DEFAULT_LABEL'); ?></p>

		<div class="input-group col-xs-3">
			<div class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></div>
			<input type="email" name="jform[email]" class="form-control validate-email required" id="jform_email" value="" size="30" required aria-required="true" placeholder="<?php echo str_replace(":", "", JText::_('COM_USERS_REGISTER_EMAIL1_LABEL')); ?>" />
		</div>

		<br /><button type="submit" class="btn btn-primary validate"><?php echo JText::_('JSUBMIT'); ?></button>
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>
