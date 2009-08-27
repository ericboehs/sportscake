<div class="participantsEvents view">
<h2><?php  __('ParticipantsEvent');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $participantsEvent['ParticipantsEvent']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Participant Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $participantsEvent['ParticipantsEvent']['participant_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Participant Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $participantsEvent['ParticipantsEvent']['participant_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($participantsEvent['Event']['id'], array('controller'=> 'events', 'action'=>'view', $participantsEvent['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alignment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $participantsEvent['ParticipantsEvent']['alignment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $participantsEvent['ParticipantsEvent']['score']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Outcome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $participantsEvent['ParticipantsEvent']['event_outcome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rank'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $participantsEvent['ParticipantsEvent']['rank']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Result Effect'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $participantsEvent['ParticipantsEvent']['result_effect']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score Attempts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $participantsEvent['ParticipantsEvent']['score_attempts']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit ParticipantsEvent', true), array('action'=>'edit', $participantsEvent['ParticipantsEvent']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete ParticipantsEvent', true), array('action'=>'delete', $participantsEvent['ParticipantsEvent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $participantsEvent['ParticipantsEvent']['id'])); ?> </li>
		<li><?php echo $html->link(__('List ParticipantsEvents', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New ParticipantsEvent', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Periods', true), array('controller'=> 'periods', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Period', true), array('controller'=> 'periods', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Periods');?></h3>
	<?php if (!empty($participantsEvent['Period'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Participant Event Id'); ?></th>
		<th><?php __('Period Value'); ?></th>
		<th><?php __('Score'); ?></th>
		<th><?php __('Label'); ?></th>
		<th><?php __('Score Attempts'); ?></th>
		<th><?php __('Rank'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($participantsEvent['Period'] as $period):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $period['id'];?></td>
			<td><?php echo $period['participant_event_id'];?></td>
			<td><?php echo $period['period_value'];?></td>
			<td><?php echo $period['score'];?></td>
			<td><?php echo $period['label'];?></td>
			<td><?php echo $period['score_attempts'];?></td>
			<td><?php echo $period['rank'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'periods', 'action'=>'view', $period['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'periods', 'action'=>'edit', $period['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'periods', 'action'=>'delete', $period['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $period['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Period', true), array('controller'=> 'periods', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
