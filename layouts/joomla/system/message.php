<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$msgList = $displayData['msgList'];

?>
<div id="system-message-container">
	<?php if (is_array($msgList) && !empty($msgList)) : ?>
		<div id="system-message">
			<?php foreach ($msgList as $type => $msgs) : ?>
				<?php
				if ($type == "message") $mtype = "info";
				if ($type == "notice") $mtype = "warning";
				if ($type == "warning") $mtype = "danger";
				?>
				<div class="alert alert-<?php echo $mtype; ?> alert-dismissible" role="alert">
					<?php // This requires JS so we should add it trough JS. Progressive enhancement and stuff. ?>
					<a class="close" data-dismiss="alert"><i class="fa fa-times"></i></a>

					<?php if (!empty($msgs)) : ?>
						<h4 class="alert-heading"><?php echo JText::_($type); ?></h4>
						<div>
							<?php foreach ($msgs as $msg) : ?>
								<p><?php echo $msg; ?></p>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>
