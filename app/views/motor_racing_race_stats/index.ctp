<div class="motorRacingRaceStats index">
<h2><?php __('MotorRacingRaceStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('time_behind_leader');?></th>
	<th><?php echo $paginator->sort('laps_behind_leader');?></th>
	<th><?php echo $paginator->sort('time_ahead_follower');?></th>
	<th><?php echo $paginator->sort('laps_ahead_follower');?></th>
	<th><?php echo $paginator->sort('time');?></th>
	<th><?php echo $paginator->sort('points');?></th>
	<th><?php echo $paginator->sort('points_rookie');?></th>
	<th><?php echo $paginator->sort('bonus');?></th>
	<th><?php echo $paginator->sort('laps_completed');?></th>
	<th><?php echo $paginator->sort('laps_leading_total');?></th>
	<th><?php echo $paginator->sort('distance_leading');?></th>
	<th><?php echo $paginator->sort('distance_completed');?></th>
	<th><?php echo $paginator->sort('distance_units');?></th>
	<th><?php echo $paginator->sort('speed_average');?></th>
	<th><?php echo $paginator->sort('speed_units');?></th>
	<th><?php echo $paginator->sort('status');?></th>
	<th><?php echo $paginator->sort('finishes_top_5');?></th>
	<th><?php echo $paginator->sort('finishes_top_10');?></th>
	<th><?php echo $paginator->sort('starts');?></th>
	<th><?php echo $paginator->sort('finishes');?></th>
	<th><?php echo $paginator->sort('non_finishes');?></th>
	<th><?php echo $paginator->sort('wins');?></th>
	<th><?php echo $paginator->sort('races_leading');?></th>
	<th><?php echo $paginator->sort('money');?></th>
	<th><?php echo $paginator->sort('money_units');?></th>
	<th><?php echo $paginator->sort('leads_total');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($motorRacingRaceStats as $motorRacingRaceStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['id']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['time_behind_leader']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['laps_behind_leader']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['time_ahead_follower']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['laps_ahead_follower']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['time']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['points']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['points_rookie']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['bonus']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['laps_completed']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['laps_leading_total']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['distance_leading']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['distance_completed']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['distance_units']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['speed_average']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['speed_units']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['status']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['finishes_top_5']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['finishes_top_10']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['starts']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['finishes']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['non_finishes']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['wins']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['races_leading']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['money']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['money_units']; ?>
		</td>
		<td>
			<?php echo $motorRacingRaceStat['MotorRacingRaceStat']['leads_total']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $motorRacingRaceStat['MotorRacingRaceStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $motorRacingRaceStat['MotorRacingRaceStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $motorRacingRaceStat['MotorRacingRaceStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $motorRacingRaceStat['MotorRacingRaceStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New MotorRacingRaceStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
