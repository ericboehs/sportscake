<div class="outcomeTotals index">
<h2><?php __('OutcomeTotals');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('standing_subgroup_id');?></th>
	<th><?php echo $paginator->sort('outcome_holder_type');?></th>
	<th><?php echo $paginator->sort('outcome_holder_id');?></th>
	<th><?php echo $paginator->sort('rank');?></th>
	<th><?php echo $paginator->sort('wins');?></th>
	<th><?php echo $paginator->sort('losses');?></th>
	<th><?php echo $paginator->sort('ties');?></th>
	<th><?php echo $paginator->sort('undecideds');?></th>
	<th><?php echo $paginator->sort('winning_percentage');?></th>
	<th><?php echo $paginator->sort('points_scored_for');?></th>
	<th><?php echo $paginator->sort('points_scored_against');?></th>
	<th><?php echo $paginator->sort('points_difference');?></th>
	<th><?php echo $paginator->sort('standing_points');?></th>
	<th><?php echo $paginator->sort('streak_type');?></th>
	<th><?php echo $paginator->sort('streak_duration');?></th>
	<th><?php echo $paginator->sort('streak_total');?></th>
	<th><?php echo $paginator->sort('streak_start');?></th>
	<th><?php echo $paginator->sort('streak_end');?></th>
	<th><?php echo $paginator->sort('events_played');?></th>
	<th><?php echo $paginator->sort('games_back');?></th>
	<th><?php echo $paginator->sort('result_effect');?></th>
	<th><?php echo $paginator->sort('sets_against');?></th>
	<th><?php echo $paginator->sort('sets_for');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($outcomeTotals as $outcomeTotal):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($outcomeTotal['StandingSubgroup']['id'], array('controller'=> 'standing_subgroups', 'action'=>'view', $outcomeTotal['StandingSubgroup']['id'])); ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['outcome_holder_type']; ?>
		</td>
		<td>
			<?php echo $html->link($outcomeTotal['OutcomeHolder']['id'], array('controller'=> 'teams', 'action'=>'view', $outcomeTotal['OutcomeHolder']['id'])); ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['rank']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['wins']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['losses']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['ties']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['undecideds']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['winning_percentage']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['points_scored_for']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['points_scored_against']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['points_difference']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['standing_points']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['streak_type']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['streak_duration']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['streak_total']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['streak_start']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['streak_end']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['events_played']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['games_back']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['result_effect']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['sets_against']; ?>
		</td>
		<td>
			<?php echo $outcomeTotal['OutcomeTotal']['sets_for']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $outcomeTotal['OutcomeTotal']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $outcomeTotal['OutcomeTotal']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $outcomeTotal['OutcomeTotal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $outcomeTotal['OutcomeTotal']['id'])); ?>
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
		<li><?php echo $html->link(__('New OutcomeTotal', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Standing Subgroups', true), array('controller'=> 'standing_subgroups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing Subgroup', true), array('controller'=> 'standing_subgroups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Outcome Holder', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
	</ul>
</div>
