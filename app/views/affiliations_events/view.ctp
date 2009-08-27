<div class="affiliationsEvents view">
<h2><?php  __('AffiliationsEvent');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Affiliation Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliationsEvent['AffiliationsEvent']['affiliation_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliationsEvent['AffiliationsEvent']['event_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AffiliationsEvent', true), array('action'=>'edit', $affiliationsEvent['AffiliationsEvent']['affiliation_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AffiliationsEvent', true), array('action'=>'delete', $affiliationsEvent['AffiliationsEvent']['affiliation_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliationsEvent['AffiliationsEvent']['affiliation_id'])); ?> </li>
		<li><?php echo $html->link(__('List AffiliationsEvents', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AffiliationsEvent', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
