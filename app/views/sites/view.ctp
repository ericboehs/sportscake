<div class="sites view">
<h2><?php  __('Site');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $site['Site']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Site Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $site['Site']['site_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($site['Publisher']['id'], array('controller'=> 'publishers', 'action'=>'view', $site['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($site['Location']['id'], array('controller'=> 'locations', 'action'=>'view', $site['Location']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Site', true), array('action'=>'edit', $site['Site']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Site', true), array('action'=>'delete', $site['Site']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $site['Site']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Sites', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Site', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller'=> 'publishers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller'=> 'publishers', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('controller'=> 'locations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller'=> 'locations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Home Site', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Teams');?></h3>
	<?php if (!empty($site['HomeSite'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Team Key'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Home Site Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($site['HomeSite'] as $homeSite):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $homeSite['id'];?></td>
			<td><?php echo $homeSite['team_key'];?></td>
			<td><?php echo $homeSite['publisher_id'];?></td>
			<td><?php echo $homeSite['home_site_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'teams', 'action'=>'view', $homeSite['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'teams', 'action'=>'edit', $homeSite['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'teams', 'action'=>'delete', $homeSite['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $homeSite['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Home Site', true), array('controller'=> 'teams', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Events');?></h3>
	<?php if (!empty($site['Event'])):?>
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
		foreach ($site['Event'] as $event):
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
