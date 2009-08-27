<div class="affiliationsEvents index">
<h2><?php __('AffiliationsEvents');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('affiliation_id');?></th>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($affiliationsEvents as $affiliationsEvent):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $affiliationsEvent['AffiliationsEvent']['affiliation_id']; ?>
		</td>
		<td>
			<?php echo $affiliationsEvent['AffiliationsEvent']['event_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $affiliationsEvent['AffiliationsEvent']['affiliation_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $affiliationsEvent['AffiliationsEvent']['affiliation_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $affiliationsEvent['AffiliationsEvent']['affiliation_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliationsEvent['AffiliationsEvent']['affiliation_id'])); ?>
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
		<li><?php echo $html->link(__('New AffiliationsEvent', true), array('action'=>'add')); ?></li>
	</ul>
</div>
