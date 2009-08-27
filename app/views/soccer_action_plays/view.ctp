<div class="soccerActionPlays view">
<h2><?php  __('SoccerActionPlay');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPlay['SoccerActionPlay']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Soccer Event State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionPlay['SoccerEventState']['id'], array('controller'=> 'soccer_event_states', 'action'=>'view', $soccerActionPlay['SoccerEventState']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Play Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPlay['SoccerActionPlay']['play_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score Attempt Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPlay['SoccerActionPlay']['score_attempt_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Play Result'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPlay['SoccerActionPlay']['play_result']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPlay['SoccerActionPlay']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SoccerActionPlay', true), array('action'=>'edit', $soccerActionPlay['SoccerActionPlay']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SoccerActionPlay', true), array('action'=>'delete', $soccerActionPlay['SoccerActionPlay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionPlay['SoccerActionPlay']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SoccerActionPlays', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SoccerActionPlay', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Participants', true), array('controller'=> 'soccer_action_participants', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Participant', true), array('controller'=> 'soccer_action_participants', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Participants');?></h3>
	<?php if (!empty($soccerActionPlay['SoccerActionParticipant'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Soccer Action Play Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Participant Role'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($soccerActionPlay['SoccerActionParticipant'] as $soccerActionParticipant):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionParticipant['id'];?></td>
			<td><?php echo $soccerActionParticipant['soccer_action_play_id'];?></td>
			<td><?php echo $soccerActionParticipant['person_id'];?></td>
			<td><?php echo $soccerActionParticipant['participant_role'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_participants', 'action'=>'view', $soccerActionParticipant['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_participants', 'action'=>'edit', $soccerActionParticipant['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_participants', 'action'=>'delete', $soccerActionParticipant['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionParticipant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Participant', true), array('controller'=> 'soccer_action_participants', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
