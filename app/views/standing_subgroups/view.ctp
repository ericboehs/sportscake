<div class="standingSubgroups view">
<h2><?php  __('StandingSubgroup');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standingSubgroup['StandingSubgroup']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Standing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($standingSubgroup['Standing']['id'], array('controller'=> 'standings', 'action'=>'view', $standingSubgroup['Standing']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Affiliation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($standingSubgroup['Affiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $standingSubgroup['Affiliation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alignment Scope'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standingSubgroup['StandingSubgroup']['alignment_scope']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Competition Scope'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standingSubgroup['StandingSubgroup']['competition_scope']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Competition Scope Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standingSubgroup['StandingSubgroup']['competition_scope_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Duration Scope'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standingSubgroup['StandingSubgroup']['duration_scope']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Scoping Label'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standingSubgroup['StandingSubgroup']['scoping_label']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Site Scope'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standingSubgroup['StandingSubgroup']['site_scope']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit StandingSubgroup', true), array('action'=>'edit', $standingSubgroup['StandingSubgroup']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete StandingSubgroup', true), array('action'=>'delete', $standingSubgroup['StandingSubgroup']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $standingSubgroup['StandingSubgroup']['id'])); ?> </li>
		<li><?php echo $html->link(__('List StandingSubgroups', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New StandingSubgroup', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Standings', true), array('controller'=> 'standings', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing', true), array('controller'=> 'standings', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Outcome Totals', true), array('controller'=> 'outcome_totals', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Outcome Total', true), array('controller'=> 'outcome_totals', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Outcome Totals');?></h3>
	<?php if (!empty($standingSubgroup['OutcomeTotal'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Standing Subgroup Id'); ?></th>
		<th><?php __('Outcome Holder Type'); ?></th>
		<th><?php __('Outcome Holder Id'); ?></th>
		<th><?php __('Rank'); ?></th>
		<th><?php __('Wins'); ?></th>
		<th><?php __('Losses'); ?></th>
		<th><?php __('Ties'); ?></th>
		<th><?php __('Undecideds'); ?></th>
		<th><?php __('Winning Percentage'); ?></th>
		<th><?php __('Points Scored For'); ?></th>
		<th><?php __('Points Scored Against'); ?></th>
		<th><?php __('Points Difference'); ?></th>
		<th><?php __('Standing Points'); ?></th>
		<th><?php __('Streak Type'); ?></th>
		<th><?php __('Streak Duration'); ?></th>
		<th><?php __('Streak Total'); ?></th>
		<th><?php __('Streak Start'); ?></th>
		<th><?php __('Streak End'); ?></th>
		<th><?php __('Events Played'); ?></th>
		<th><?php __('Games Back'); ?></th>
		<th><?php __('Result Effect'); ?></th>
		<th><?php __('Sets Against'); ?></th>
		<th><?php __('Sets For'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($standingSubgroup['OutcomeTotal'] as $outcomeTotal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $outcomeTotal['id'];?></td>
			<td><?php echo $outcomeTotal['standing_subgroup_id'];?></td>
			<td><?php echo $outcomeTotal['outcome_holder_type'];?></td>
			<td><?php echo $outcomeTotal['outcome_holder_id'];?></td>
			<td><?php echo $outcomeTotal['rank'];?></td>
			<td><?php echo $outcomeTotal['wins'];?></td>
			<td><?php echo $outcomeTotal['losses'];?></td>
			<td><?php echo $outcomeTotal['ties'];?></td>
			<td><?php echo $outcomeTotal['undecideds'];?></td>
			<td><?php echo $outcomeTotal['winning_percentage'];?></td>
			<td><?php echo $outcomeTotal['points_scored_for'];?></td>
			<td><?php echo $outcomeTotal['points_scored_against'];?></td>
			<td><?php echo $outcomeTotal['points_difference'];?></td>
			<td><?php echo $outcomeTotal['standing_points'];?></td>
			<td><?php echo $outcomeTotal['streak_type'];?></td>
			<td><?php echo $outcomeTotal['streak_duration'];?></td>
			<td><?php echo $outcomeTotal['streak_total'];?></td>
			<td><?php echo $outcomeTotal['streak_start'];?></td>
			<td><?php echo $outcomeTotal['streak_end'];?></td>
			<td><?php echo $outcomeTotal['events_played'];?></td>
			<td><?php echo $outcomeTotal['games_back'];?></td>
			<td><?php echo $outcomeTotal['result_effect'];?></td>
			<td><?php echo $outcomeTotal['sets_against'];?></td>
			<td><?php echo $outcomeTotal['sets_for'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'outcome_totals', 'action'=>'view', $outcomeTotal['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'outcome_totals', 'action'=>'edit', $outcomeTotal['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'outcome_totals', 'action'=>'delete', $outcomeTotal['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $outcomeTotal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Outcome Total', true), array('controller'=> 'outcome_totals', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
