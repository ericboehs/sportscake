<div class="eventsDocuments index">
<h2><?php __('EventsDocuments');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th><?php echo $paginator->sort('document_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($eventsDocuments as $eventsDocument):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $eventsDocument['EventsDocument']['event_id']; ?>
		</td>
		<td>
			<?php echo $eventsDocument['EventsDocument']['document_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $eventsDocument['EventsDocument']['event_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $eventsDocument['EventsDocument']['event_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $eventsDocument['EventsDocument']['event_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventsDocument['EventsDocument']['event_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New EventsDocument', true), array('action'=>'add')); ?></li>
	</ul>
</div>
