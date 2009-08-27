<div class="subPeriods view">
<h2><?php  __('SubPeriod');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subPeriod['SubPeriod']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Participants Event'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($subPeriod['ParticipantsEvent']['id'], array('controller'=> 'participants_events', 'action'=>'view', $subPeriod['ParticipantsEvent']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subPeriod['SubPeriod']['period_value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subPeriod['SubPeriod']['score']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Label'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subPeriod['SubPeriod']['label']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score Attempts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subPeriod['SubPeriod']['score_attempts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rank'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subPeriod['SubPeriod']['rank']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SubPeriod', true), array('action'=>'edit', $subPeriod['SubPeriod']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SubPeriod', true), array('action'=>'delete', $subPeriod['SubPeriod']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subPeriod['SubPeriod']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SubPeriods', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SubPeriod', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Participants Events', true), array('controller'=> 'participants_events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Participants Event', true), array('controller'=> 'participants_events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Periods', true), array('controller'=> 'periods', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Sub Period', true), array('controller'=> 'periods', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Periods');?></h3>
	<?php if (!empty($subPeriod['SubPeriod'])):?>
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
		foreach ($subPeriod['SubPeriod'] as $subPeriod):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subPeriod['id'];?></td>
			<td><?php echo $subPeriod['participant_event_id'];?></td>
			<td><?php echo $subPeriod['period_value'];?></td>
			<td><?php echo $subPeriod['score'];?></td>
			<td><?php echo $subPeriod['label'];?></td>
			<td><?php echo $subPeriod['score_attempts'];?></td>
			<td><?php echo $subPeriod['rank'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'periods', 'action'=>'view', $subPeriod['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'periods', 'action'=>'edit', $subPeriod['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'periods', 'action'=>'delete', $subPeriod['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subPeriod['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Sub Period', true), array('controller'=> 'periods', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
