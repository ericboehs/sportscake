<div class="awards index">
<h2><?php __('Awards');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('participant_type');?></th>
	<th><?php echo $paginator->sort('participant_id');?></th>
	<th><?php echo $paginator->sort('award_type');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('total');?></th>
	<th><?php echo $paginator->sort('rank');?></th>
	<th><?php echo $paginator->sort('award_value');?></th>
	<th><?php echo $paginator->sort('currency');?></th>
	<th><?php echo $paginator->sort('date_coverage_type');?></th>
	<th><?php echo $paginator->sort('date_coverage_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($awards as $award):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $award['Award']['id']; ?>
		</td>
		<td>
			<?php echo $award['Award']['participant_type']; ?>
		</td>
		<td>
			<?php echo $award['Award']['participant_id']; ?>
		</td>
		<td>
			<?php echo $award['Award']['award_type']; ?>
		</td>
		<td>
			<?php echo $award['Award']['name']; ?>
		</td>
		<td>
			<?php echo $award['Award']['total']; ?>
		</td>
		<td>
			<?php echo $award['Award']['rank']; ?>
		</td>
		<td>
			<?php echo $award['Award']['award_value']; ?>
		</td>
		<td>
			<?php echo $award['Award']['currency']; ?>
		</td>
		<td>
			<?php echo $award['Award']['date_coverage_type']; ?>
		</td>
		<td>
			<?php echo $award['Award']['date_coverage_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $award['Award']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $award['Award']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $award['Award']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $award['Award']['id'])); ?>
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
		<li><?php echo $html->link(__('New Award', true), array('action'=>'add')); ?></li>
	</ul>
</div>
