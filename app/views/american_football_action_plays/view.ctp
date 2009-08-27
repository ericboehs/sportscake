<div class="americanFootballActionPlays view">
<h2><?php  __('AmericanFootballActionPlay');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('American Football Event State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($americanFootballActionPlay['AmericanFootballEventState']['id'], array('controller'=> 'american_football_event_states', 'action'=>'view', $americanFootballActionPlay['AmericanFootballEventState']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Play Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['play_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score Attempt Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['score_attempt_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Drive Result'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['drive_result']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['points']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballActionPlay', true), array('action'=>'edit', $americanFootballActionPlay['AmericanFootballActionPlay']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballActionPlay', true), array('action'=>'delete', $americanFootballActionPlay['AmericanFootballActionPlay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballActionPlay['AmericanFootballActionPlay']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballActionPlays', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballActionPlay', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List American Football Event States', true), array('controller'=> 'american_football_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Event State', true), array('controller'=> 'american_football_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List American Football Action Participants', true), array('controller'=> 'american_football_action_participants', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Action Participant', true), array('controller'=> 'american_football_action_participants', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related American Football Action Participants');?></h3>
	<?php if (!empty($americanFootballActionPlay['AmericanFootballActionParticipant'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('American Football Action Play Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Participant Role'); ?></th>
		<th><?php __('Score Type'); ?></th>
		<th><?php __('Field Line'); ?></th>
		<th><?php __('Yardage'); ?></th>
		<th><?php __('Score Credit'); ?></th>
		<th><?php __('Yards Gained'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($americanFootballActionPlay['AmericanFootballActionParticipant'] as $americanFootballActionParticipant):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $americanFootballActionParticipant['id'];?></td>
			<td><?php echo $americanFootballActionParticipant['american_football_action_play_id'];?></td>
			<td><?php echo $americanFootballActionParticipant['person_id'];?></td>
			<td><?php echo $americanFootballActionParticipant['participant_role'];?></td>
			<td><?php echo $americanFootballActionParticipant['score_type'];?></td>
			<td><?php echo $americanFootballActionParticipant['field_line'];?></td>
			<td><?php echo $americanFootballActionParticipant['yardage'];?></td>
			<td><?php echo $americanFootballActionParticipant['score_credit'];?></td>
			<td><?php echo $americanFootballActionParticipant['yards_gained'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'american_football_action_participants', 'action'=>'view', $americanFootballActionParticipant['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'american_football_action_participants', 'action'=>'edit', $americanFootballActionParticipant['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'american_football_action_participants', 'action'=>'delete', $americanFootballActionParticipant['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballActionParticipant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New American Football Action Participant', true), array('controller'=> 'american_football_action_participants', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
