<div class="tennisActionVolleys index">
<h2><?php __('TennisActionVolleys');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('sequence_number');?></th>
	<th><?php echo $paginator->sort('tennis_action_points_id');?></th>
	<th><?php echo $paginator->sort('landing_location');?></th>
	<th><?php echo $paginator->sort('swing_type');?></th>
	<th><?php echo $paginator->sort('result');?></th>
	<th><?php echo $paginator->sort('spin_type');?></th>
	<th><?php echo $paginator->sort('trajectory_details');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tennisActionVolleys as $tennisActionVolley):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tennisActionVolley['TennisActionVolley']['id']; ?>
		</td>
		<td>
			<?php echo $tennisActionVolley['TennisActionVolley']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $tennisActionVolley['TennisActionVolley']['tennis_action_points_id']; ?>
		</td>
		<td>
			<?php echo $tennisActionVolley['TennisActionVolley']['landing_location']; ?>
		</td>
		<td>
			<?php echo $tennisActionVolley['TennisActionVolley']['swing_type']; ?>
		</td>
		<td>
			<?php echo $tennisActionVolley['TennisActionVolley']['result']; ?>
		</td>
		<td>
			<?php echo $tennisActionVolley['TennisActionVolley']['spin_type']; ?>
		</td>
		<td>
			<?php echo $tennisActionVolley['TennisActionVolley']['trajectory_details']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $tennisActionVolley['TennisActionVolley']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $tennisActionVolley['TennisActionVolley']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $tennisActionVolley['TennisActionVolley']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisActionVolley['TennisActionVolley']['id'])); ?>
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
		<li><?php echo $html->link(__('New TennisActionVolley', true), array('action'=>'add')); ?></li>
	</ul>
</div>
