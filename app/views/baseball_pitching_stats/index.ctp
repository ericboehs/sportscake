<div class="baseballPitchingStats index">
<h2><?php __('BaseballPitchingStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('runs_allowed');?></th>
	<th><?php echo $paginator->sort('singles_allowed');?></th>
	<th><?php echo $paginator->sort('doubles_allowed');?></th>
	<th><?php echo $paginator->sort('triples_allowed');?></th>
	<th><?php echo $paginator->sort('home_runs_allowed');?></th>
	<th><?php echo $paginator->sort('innings_pitched');?></th>
	<th><?php echo $paginator->sort('hits');?></th>
	<th><?php echo $paginator->sort('earned_runs');?></th>
	<th><?php echo $paginator->sort('unearned_runs');?></th>
	<th><?php echo $paginator->sort('bases_on_balls');?></th>
	<th><?php echo $paginator->sort('bases_on_balls_intentional');?></th>
	<th><?php echo $paginator->sort('strikeouts');?></th>
	<th><?php echo $paginator->sort('strikeout_to_bb_ratio');?></th>
	<th><?php echo $paginator->sort('number_of_pitches');?></th>
	<th><?php echo $paginator->sort('era');?></th>
	<th><?php echo $paginator->sort('inherited_runners_scored');?></th>
	<th><?php echo $paginator->sort('pick_offs');?></th>
	<th><?php echo $paginator->sort('errors_hit_with_pitch');?></th>
	<th><?php echo $paginator->sort('errors_wild_pitch');?></th>
	<th><?php echo $paginator->sort('balks');?></th>
	<th><?php echo $paginator->sort('wins');?></th>
	<th><?php echo $paginator->sort('losses');?></th>
	<th><?php echo $paginator->sort('saves');?></th>
	<th><?php echo $paginator->sort('shutouts');?></th>
	<th><?php echo $paginator->sort('games_complete');?></th>
	<th><?php echo $paginator->sort('games_finished');?></th>
	<th><?php echo $paginator->sort('winning_percentage');?></th>
	<th><?php echo $paginator->sort('event_credit');?></th>
	<th><?php echo $paginator->sort('save_credit');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($baseballPitchingStats as $baseballPitchingStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['id']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['runs_allowed']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['singles_allowed']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['doubles_allowed']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['triples_allowed']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['home_runs_allowed']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['innings_pitched']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['hits']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['earned_runs']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['unearned_runs']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['bases_on_balls']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['bases_on_balls_intentional']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['strikeouts']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['strikeout_to_bb_ratio']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['number_of_pitches']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['era']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['inherited_runners_scored']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['pick_offs']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['errors_hit_with_pitch']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['errors_wild_pitch']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['balks']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['wins']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['losses']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['saves']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['shutouts']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['games_complete']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['games_finished']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['winning_percentage']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['event_credit']; ?>
		</td>
		<td>
			<?php echo $baseballPitchingStat['BaseballPitchingStat']['save_credit']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $baseballPitchingStat['BaseballPitchingStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $baseballPitchingStat['BaseballPitchingStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $baseballPitchingStat['BaseballPitchingStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballPitchingStat['BaseballPitchingStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New BaseballPitchingStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
