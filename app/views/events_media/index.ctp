<div class="eventsMedia index">
<h2><?php __('EventsMedia');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th><?php echo $paginator->sort('media_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($eventsMedia as $eventsMedium):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $eventsMedium['EventsMedium']['event_id']; ?>
		</td>
		<td>
			<?php echo $eventsMedium['EventsMedium']['media_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $eventsMedium['EventsMedium']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $eventsMedium['EventsMedium']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $eventsMedium['EventsMedium']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventsMedium['EventsMedium']['id'])); ?>
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
		<li><?php echo $html->link(__('New EventsMedium', true), array('action'=>'add')); ?></li>
	</ul>
</div>
