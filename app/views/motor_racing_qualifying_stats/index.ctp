<div class="motorRacingQualifyingStats index">
<h2><?php __('MotorRacingQualifyingStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('grid');?></th>
	<th><?php echo $paginator->sort('pole_position');?></th>
	<th><?php echo $paginator->sort('pole_wins');?></th>
	<th><?php echo $paginator->sort('qualifying_speed');?></th>
	<th><?php echo $paginator->sort('qualifying_speed_units');?></th>
	<th><?php echo $paginator->sort('qualifying_time');?></th>
	<th><?php echo $paginator->sort('qualifying_position');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($motorRacingQualifyingStats as $motorRacingQualifyingStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['id']; ?>
		</td>
		<td>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['grid']; ?>
		</td>
		<td>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['pole_position']; ?>
		</td>
		<td>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['pole_wins']; ?>
		</td>
		<td>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['qualifying_speed']; ?>
		</td>
		<td>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['qualifying_speed_units']; ?>
		</td>
		<td>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['qualifying_time']; ?>
		</td>
		<td>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['qualifying_position']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $motorRacingQualifyingStat['MotorRacingQualifyingStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $motorRacingQualifyingStat['MotorRacingQualifyingStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $motorRacingQualifyingStat['MotorRacingQualifyingStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $motorRacingQualifyingStat['MotorRacingQualifyingStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New MotorRacingQualifyingStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
