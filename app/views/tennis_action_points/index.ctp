<div class="tennisActionPoints index">
<h2><?php __('TennisActionPoints');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('sub_period_id');?></th>
	<th><?php echo $paginator->sort('sequence_number');?></th>
	<th><?php echo $paginator->sort('win_type');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tennisActionPoints as $tennisActionPoint):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tennisActionPoint['TennisActionPoint']['id']; ?>
		</td>
		<td>
			<?php echo $tennisActionPoint['TennisActionPoint']['sub_period_id']; ?>
		</td>
		<td>
			<?php echo $tennisActionPoint['TennisActionPoint']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $tennisActionPoint['TennisActionPoint']['win_type']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $tennisActionPoint['TennisActionPoint']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $tennisActionPoint['TennisActionPoint']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $tennisActionPoint['TennisActionPoint']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisActionPoint['TennisActionPoint']['id'])); ?>
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
		<li><?php echo $html->link(__('New TennisActionPoint', true), array('action'=>'add')); ?></li>
	</ul>
</div>
