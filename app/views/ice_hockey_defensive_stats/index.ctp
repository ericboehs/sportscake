<div class="iceHockeyDefensiveStats index">
<h2><?php __('IceHockeyDefensiveStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('shots_power_play_allowed');?></th>
	<th><?php echo $paginator->sort('shots_penalty_shot_allowed');?></th>
	<th><?php echo $paginator->sort('goals_power_play_allowed');?></th>
	<th><?php echo $paginator->sort('goals_penalty_shot_allowed');?></th>
	<th><?php echo $paginator->sort('goals_against_average');?></th>
	<th><?php echo $paginator->sort('saves');?></th>
	<th><?php echo $paginator->sort('save_percentage');?></th>
	<th><?php echo $paginator->sort('penalty_killing_amount');?></th>
	<th><?php echo $paginator->sort('penalty_killing_percentage');?></th>
	<th><?php echo $paginator->sort('shots_blocked');?></th>
	<th><?php echo $paginator->sort('takeaways');?></th>
	<th><?php echo $paginator->sort('shutouts');?></th>
	<th><?php echo $paginator->sort('minutes_penalty_killing');?></th>
	<th><?php echo $paginator->sort('hits');?></th>
	<th><?php echo $paginator->sort('goals_empty_net_allowed');?></th>
	<th><?php echo $paginator->sort('goals_short_handed_allowed');?></th>
	<th><?php echo $paginator->sort('goals_shootout_allowed');?></th>
	<th><?php echo $paginator->sort('shots_shootout_allowed');?></th>
	<th><?php echo $paginator->sort('goaltender_wins');?></th>
	<th><?php echo $paginator->sort('goaltender_losses');?></th>
	<th><?php echo $paginator->sort('goaltender_ties');?></th>
	<th><?php echo $paginator->sort('goals_allowed');?></th>
	<th><?php echo $paginator->sort('shots_allowed');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($iceHockeyDefensiveStats as $iceHockeyDefensiveStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shots_power_play_allowed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shots_penalty_shot_allowed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_power_play_allowed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_penalty_shot_allowed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_against_average']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['saves']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['save_percentage']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['penalty_killing_amount']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['penalty_killing_percentage']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shots_blocked']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['takeaways']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shutouts']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['minutes_penalty_killing']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['hits']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_empty_net_allowed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_short_handed_allowed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_shootout_allowed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shots_shootout_allowed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goaltender_wins']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goaltender_losses']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goaltender_ties']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_allowed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shots_allowed']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New IceHockeyDefensiveStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
