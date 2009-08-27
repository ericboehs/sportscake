<div class="latestRevisions view">
<h2><?php  __('LatestRevision');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $latestRevision['LatestRevision']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Revision Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $latestRevision['LatestRevision']['revision_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Latest Document Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $latestRevision['LatestRevision']['latest_document_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit LatestRevision', true), array('action'=>'edit', $latestRevision['LatestRevision']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete LatestRevision', true), array('action'=>'delete', $latestRevision['LatestRevision']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $latestRevision['LatestRevision']['id'])); ?> </li>
		<li><?php echo $html->link(__('List LatestRevisions', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New LatestRevision', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
