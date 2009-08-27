<div class="subSeasons view">
<h2><?php  __('SubSeason');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subSeason['SubSeason']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sub Season Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subSeason['SubSeason']['sub_season_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Season'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($subSeason['Season']['id'], array('controller'=> 'seasons', 'action'=>'view', $subSeason['Season']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sub Season Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subSeason['SubSeason']['sub_season_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subSeason['SubSeason']['start_date_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subSeason['SubSeason']['end_date_time']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SubSeason', true), array('action'=>'edit', $subSeason['SubSeason']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SubSeason', true), array('action'=>'delete', $subSeason['SubSeason']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subSeason['SubSeason']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SubSeasons', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SubSeason', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Standings', true), array('controller'=> 'standings', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing', true), array('controller'=> 'standings', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Standings');?></h3>
	<?php if (!empty($subSeason['Standing'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Affiliation Id'); ?></th>
		<th><?php __('Standing Type'); ?></th>
		<th><?php __('Sub Season Id'); ?></th>
		<th><?php __('Last Updated'); ?></th>
		<th><?php __('Source'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subSeason['Standing'] as $standing):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $standing['id'];?></td>
			<td><?php echo $standing['affiliation_id'];?></td>
			<td><?php echo $standing['standing_type'];?></td>
			<td><?php echo $standing['sub_season_id'];?></td>
			<td><?php echo $standing['last_updated'];?></td>
			<td><?php echo $standing['source'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'standings', 'action'=>'view', $standing['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'standings', 'action'=>'edit', $standing['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'standings', 'action'=>'delete', $standing['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $standing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Standing', true), array('controller'=> 'standings', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Events');?></h3>
	<?php if (!empty($subSeason['Event'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Key'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('Site Id'); ?></th>
		<th><?php __('Site Alignment'); ?></th>
		<th><?php __('Event Status'); ?></th>
		<th><?php __('Duration'); ?></th>
		<th><?php __('Attendance'); ?></th>
		<th><?php __('Last Update'); ?></th>
		<th><?php __('Event Number'); ?></th>
		<th><?php __('Round Number'); ?></th>
		<th><?php __('Time Certainty'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subSeason['Event'] as $event):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $event['id'];?></td>
			<td><?php echo $event['event_key'];?></td>
			<td><?php echo $event['publisher_id'];?></td>
			<td><?php echo $event['start_date_time'];?></td>
			<td><?php echo $event['site_id'];?></td>
			<td><?php echo $event['site_alignment'];?></td>
			<td><?php echo $event['event_status'];?></td>
			<td><?php echo $event['duration'];?></td>
			<td><?php echo $event['attendance'];?></td>
			<td><?php echo $event['last_update'];?></td>
			<td><?php echo $event['event_number'];?></td>
			<td><?php echo $event['round_number'];?></td>
			<td><?php echo $event['time_certainty'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'events', 'action'=>'view', $event['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'events', 'action'=>'edit', $event['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'events', 'action'=>'delete', $event['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
