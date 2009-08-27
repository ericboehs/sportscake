<div class="records index">
<h2><?php __('Records');?></h2>
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
	<th><?php echo $paginator->sort('record_type');?></th>
	<th><?php echo $paginator->sort('record_label');?></th>
	<th><?php echo $paginator->sort('record_value');?></th>
	<th><?php echo $paginator->sort('previous_value');?></th>
	<th><?php echo $paginator->sort('date_coverage_type');?></th>
	<th><?php echo $paginator->sort('date_coverage_id');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($records as $record):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $record['Record']['id']; ?>
		</td>
		<td>
			<?php echo $record['Record']['participant_type']; ?>
		</td>
		<td>
			<?php echo $record['Record']['participant_id']; ?>
		</td>
		<td>
			<?php echo $record['Record']['record_type']; ?>
		</td>
		<td>
			<?php echo $record['Record']['record_label']; ?>
		</td>
		<td>
			<?php echo $record['Record']['record_value']; ?>
		</td>
		<td>
			<?php echo $record['Record']['previous_value']; ?>
		</td>
		<td>
			<?php echo $record['Record']['date_coverage_type']; ?>
		</td>
		<td>
			<?php echo $record['Record']['date_coverage_id']; ?>
		</td>
		<td>
			<?php echo $record['Record']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $record['Record']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $record['Record']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $record['Record']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $record['Record']['id'])); ?>
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
		<li><?php echo $html->link(__('New Record', true), array('action'=>'add')); ?></li>
	</ul>
</div>
