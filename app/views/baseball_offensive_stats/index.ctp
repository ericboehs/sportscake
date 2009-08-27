<div class="baseballOffensiveStats index">
<h2><?php __('BaseballOffensiveStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('average');?></th>
	<th><?php echo $paginator->sort('runs_scored');?></th>
	<th><?php echo $paginator->sort('at_bats');?></th>
	<th><?php echo $paginator->sort('hits');?></th>
	<th><?php echo $paginator->sort('rbi');?></th>
	<th><?php echo $paginator->sort('total_bases');?></th>
	<th><?php echo $paginator->sort('slugging_percentage');?></th>
	<th><?php echo $paginator->sort('bases_on_balls');?></th>
	<th><?php echo $paginator->sort('strikeouts');?></th>
	<th><?php echo $paginator->sort('left_on_base');?></th>
	<th><?php echo $paginator->sort('left_in_scoring_position');?></th>
	<th><?php echo $paginator->sort('singles');?></th>
	<th><?php echo $paginator->sort('doubles');?></th>
	<th><?php echo $paginator->sort('triples');?></th>
	<th><?php echo $paginator->sort('home_runs');?></th>
	<th><?php echo $paginator->sort('grand_slams');?></th>
	<th><?php echo $paginator->sort('at_bats_per_rbi');?></th>
	<th><?php echo $paginator->sort('plate_appearances_per_rbi');?></th>
	<th><?php echo $paginator->sort('at_bats_per_home_run');?></th>
	<th><?php echo $paginator->sort('plate_appearances_per_home_run');?></th>
	<th><?php echo $paginator->sort('sac_flies');?></th>
	<th><?php echo $paginator->sort('sac_bunts');?></th>
	<th><?php echo $paginator->sort('grounded_into_double_play');?></th>
	<th><?php echo $paginator->sort('moved_up');?></th>
	<th><?php echo $paginator->sort('on_base_percentage');?></th>
	<th><?php echo $paginator->sort('stolen_bases');?></th>
	<th><?php echo $paginator->sort('stolen_bases_caught');?></th>
	<th><?php echo $paginator->sort('stolen_bases_average');?></th>
	<th><?php echo $paginator->sort('hit_by_pitch');?></th>
	<th><?php echo $paginator->sort('defensive_interferance_reaches');?></th>
	<th><?php echo $paginator->sort('on_base_plus_slugging');?></th>
	<th><?php echo $paginator->sort('plate_appearances');?></th>
	<th><?php echo $paginator->sort('hits_extra_base');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($baseballOffensiveStats as $baseballOffensiveStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['id']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['average']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['runs_scored']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['at_bats']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['hits']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['rbi']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['total_bases']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['slugging_percentage']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['bases_on_balls']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['strikeouts']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['left_on_base']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['left_in_scoring_position']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['singles']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['doubles']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['triples']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['home_runs']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['grand_slams']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['at_bats_per_rbi']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['plate_appearances_per_rbi']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['at_bats_per_home_run']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['plate_appearances_per_home_run']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['sac_flies']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['sac_bunts']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['grounded_into_double_play']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['moved_up']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['on_base_percentage']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['stolen_bases']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['stolen_bases_caught']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['stolen_bases_average']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['hit_by_pitch']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['defensive_interferance_reaches']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['on_base_plus_slugging']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['plate_appearances']; ?>
		</td>
		<td>
			<?php echo $baseballOffensiveStat['BaseballOffensiveStat']['hits_extra_base']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $baseballOffensiveStat['BaseballOffensiveStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $baseballOffensiveStat['BaseballOffensiveStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $baseballOffensiveStat['BaseballOffensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballOffensiveStat['BaseballOffensiveStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New BaseballOffensiveStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
