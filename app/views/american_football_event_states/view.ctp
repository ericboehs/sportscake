<div class="americanFootballEventStates view">
<h2><?php  __('AmericanFootballEventState');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($americanFootballEventState['Event']['id'], array('controller'=> 'events', 'action'=>'view', $americanFootballEventState['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Current State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['current_state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sequence Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['sequence_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['period_value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Time Elapsed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['period_time_elapsed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Time Remaining'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['period_time_remaining']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clock State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['clock_state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Down'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['down']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($americanFootballEventState['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $americanFootballEventState['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Distance For 1st Down'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['distance_for_1st_down']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Side'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['field_side']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Line'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['field_line']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Context'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['context']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballEventState', true), array('action'=>'edit', $americanFootballEventState['AmericanFootballEventState']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballEventState', true), array('action'=>'delete', $americanFootballEventState['AmericanFootballEventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballEventState['AmericanFootballEventState']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballEventStates', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballEventState', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List American Football Action Plays', true), array('controller'=> 'american_football_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Action Play', true), array('controller'=> 'american_football_action_plays', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related American Football Action Plays');?></h3>
	<?php if (!empty($americanFootballEventState['AmericanFootballActionPlay'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('American Football Event State Id'); ?></th>
		<th><?php __('Play Type'); ?></th>
		<th><?php __('Score Attempt Type'); ?></th>
		<th><?php __('Drive Result'); ?></th>
		<th><?php __('Points'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($americanFootballEventState['AmericanFootballActionPlay'] as $americanFootballActionPlay):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $americanFootballActionPlay['id'];?></td>
			<td><?php echo $americanFootballActionPlay['american_football_event_state_id'];?></td>
			<td><?php echo $americanFootballActionPlay['play_type'];?></td>
			<td><?php echo $americanFootballActionPlay['score_attempt_type'];?></td>
			<td><?php echo $americanFootballActionPlay['drive_result'];?></td>
			<td><?php echo $americanFootballActionPlay['points'];?></td>
			<td><?php echo $americanFootballActionPlay['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'american_football_action_plays', 'action'=>'view', $americanFootballActionPlay['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'american_football_action_plays', 'action'=>'edit', $americanFootballActionPlay['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'american_football_action_plays', 'action'=>'delete', $americanFootballActionPlay['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballActionPlay['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New American Football Action Play', true), array('controller'=> 'american_football_action_plays', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
