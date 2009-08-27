<div class="baseballActionPitches index">
<h2><?php __('BaseballActionPitches');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('baseball_action_play_id');?></th>
	<th><?php echo $paginator->sort('sequence_number');?></th>
	<th><?php echo $paginator->sort('baseball_defensive_group_id');?></th>
	<th><?php echo $paginator->sort('umpire_call');?></th>
	<th><?php echo $paginator->sort('pitch_location');?></th>
	<th><?php echo $paginator->sort('pitch_type');?></th>
	<th><?php echo $paginator->sort('pitch_velocity');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th><?php echo $paginator->sort('trajectory_coordinates');?></th>
	<th><?php echo $paginator->sort('trajectory_formula');?></th>
	<th><?php echo $paginator->sort('ball_type');?></th>
	<th><?php echo $paginator->sort('strike_type');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($baseballActionPitches as $baseballActionPitch):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballActionPitch['BaseballActionPlay']['id'], array('controller'=> 'baseball_action_plays', 'action'=>'view', $baseballActionPitch['BaseballActionPlay']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballActionPitch['BaseballDefensiveGroup']['id'], array('controller'=> 'baseball_defensive_groups', 'action'=>'view', $baseballActionPitch['BaseballDefensiveGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['umpire_call']; ?>
		</td>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['pitch_location']; ?>
		</td>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['pitch_type']; ?>
		</td>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['pitch_velocity']; ?>
		</td>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['comment']; ?>
		</td>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['trajectory_coordinates']; ?>
		</td>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['trajectory_formula']; ?>
		</td>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['ball_type']; ?>
		</td>
		<td>
			<?php echo $baseballActionPitch['BaseballActionPitch']['strike_type']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $baseballActionPitch['BaseballActionPitch']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $baseballActionPitch['BaseballActionPitch']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $baseballActionPitch['BaseballActionPitch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionPitch['BaseballActionPitch']['id'])); ?>
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
		<li><?php echo $html->link(__('New BaseballActionPitch', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Baseball Action Plays', true), array('controller'=> 'baseball_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Play', true), array('controller'=> 'baseball_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Groups', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Group', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Contact Details', true), array('controller'=> 'baseball_action_contact_details', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Contact Detail', true), array('controller'=> 'baseball_action_contact_details', 'action'=>'add')); ?> </li>
	</ul>
</div>
