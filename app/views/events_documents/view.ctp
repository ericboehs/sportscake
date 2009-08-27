<div class="eventsDocuments view">
<h2><?php  __('EventsDocument');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventsDocument['EventsDocument']['event_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Document Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventsDocument['EventsDocument']['document_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit EventsDocument', true), array('action'=>'edit', $eventsDocument['EventsDocument']['event_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete EventsDocument', true), array('action'=>'delete', $eventsDocument['EventsDocument']['event_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventsDocument['EventsDocument']['event_id'])); ?> </li>
		<li><?php echo $html->link(__('List EventsDocuments', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New EventsDocument', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
