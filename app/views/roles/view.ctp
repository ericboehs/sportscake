<div class="roles view">
<h2><?php  __('Role');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $role['Role']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $role['Role']['role_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $role['Role']['role_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $role['Role']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Role', true), array('action'=>'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Role', true), array('action'=>'delete', $role['Role']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $role['Role']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Roles', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Role', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Event Metadata', true), array('controller'=> 'person_event_metadata', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Event Metadatum', true), array('controller'=> 'person_event_metadata', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Phases', true), array('controller'=> 'person_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Phase', true), array('controller'=> 'person_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Team Phases', true), array('controller'=> 'team_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team Phase', true), array('controller'=> 'team_phases', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Person Event Metadata');?></h3>
	<?php if (!empty($role['PersonEventMetadatum'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Health'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th><?php __('Position Id'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Lineup Slot'); ?></th>
		<th><?php __('Lineup Slot Sequence'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($role['PersonEventMetadatum'] as $personEventMetadatum):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $personEventMetadatum['id'];?></td>
			<td><?php echo $personEventMetadatum['person_id'];?></td>
			<td><?php echo $personEventMetadatum['event_id'];?></td>
			<td><?php echo $personEventMetadatum['status'];?></td>
			<td><?php echo $personEventMetadatum['health'];?></td>
			<td><?php echo $personEventMetadatum['weight'];?></td>
			<td><?php echo $personEventMetadatum['role_id'];?></td>
			<td><?php echo $personEventMetadatum['position_id'];?></td>
			<td><?php echo $personEventMetadatum['team_id'];?></td>
			<td><?php echo $personEventMetadatum['lineup_slot'];?></td>
			<td><?php echo $personEventMetadatum['lineup_slot_sequence'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'person_event_metadata', 'action'=>'view', $personEventMetadatum['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'person_event_metadata', 'action'=>'edit', $personEventMetadatum['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'person_event_metadata', 'action'=>'delete', $personEventMetadatum['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personEventMetadatum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Person Event Metadatum', true), array('controller'=> 'person_event_metadata', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Person Phases');?></h3>
	<?php if (!empty($role['PersonPhase'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Membership Type'); ?></th>
		<th><?php __('Membership Id'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th><?php __('Role Status'); ?></th>
		<th><?php __('Phase Status'); ?></th>
		<th><?php __('Uniform Number'); ?></th>
		<th><?php __('Regular Position Id'); ?></th>
		<th><?php __('Regular Position Depth'); ?></th>
		<th><?php __('Height'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('Start Season Id'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th><?php __('End Season Id'); ?></th>
		<th><?php __('Entry Reason'); ?></th>
		<th><?php __('Exit Reason'); ?></th>
		<th><?php __('Selection Level'); ?></th>
		<th><?php __('Selection Sublevel'); ?></th>
		<th><?php __('Selection Overall'); ?></th>
		<th><?php __('Duration'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($role['PersonPhase'] as $personPhase):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $personPhase['id'];?></td>
			<td><?php echo $personPhase['person_id'];?></td>
			<td><?php echo $personPhase['membership_type'];?></td>
			<td><?php echo $personPhase['membership_id'];?></td>
			<td><?php echo $personPhase['role_id'];?></td>
			<td><?php echo $personPhase['role_status'];?></td>
			<td><?php echo $personPhase['phase_status'];?></td>
			<td><?php echo $personPhase['uniform_number'];?></td>
			<td><?php echo $personPhase['regular_position_id'];?></td>
			<td><?php echo $personPhase['regular_position_depth'];?></td>
			<td><?php echo $personPhase['height'];?></td>
			<td><?php echo $personPhase['weight'];?></td>
			<td><?php echo $personPhase['start_date_time'];?></td>
			<td><?php echo $personPhase['start_season_id'];?></td>
			<td><?php echo $personPhase['end_date_time'];?></td>
			<td><?php echo $personPhase['end_season_id'];?></td>
			<td><?php echo $personPhase['entry_reason'];?></td>
			<td><?php echo $personPhase['exit_reason'];?></td>
			<td><?php echo $personPhase['selection_level'];?></td>
			<td><?php echo $personPhase['selection_sublevel'];?></td>
			<td><?php echo $personPhase['selection_overall'];?></td>
			<td><?php echo $personPhase['duration'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'person_phases', 'action'=>'view', $personPhase['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'person_phases', 'action'=>'edit', $personPhase['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'person_phases', 'action'=>'delete', $personPhase['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personPhase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Person Phase', true), array('controller'=> 'person_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Team Phases');?></h3>
	<?php if (!empty($role['TeamPhase'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Start Season Id'); ?></th>
		<th><?php __('End Season Id'); ?></th>
		<th><?php __('Affiliation Id'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th><?php __('Phase Status'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($role['TeamPhase'] as $teamPhase):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $teamPhase['id'];?></td>
			<td><?php echo $teamPhase['team_id'];?></td>
			<td><?php echo $teamPhase['start_season_id'];?></td>
			<td><?php echo $teamPhase['end_season_id'];?></td>
			<td><?php echo $teamPhase['affiliation_id'];?></td>
			<td><?php echo $teamPhase['start_date_time'];?></td>
			<td><?php echo $teamPhase['end_date_time'];?></td>
			<td><?php echo $teamPhase['phase_status'];?></td>
			<td><?php echo $teamPhase['role_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'team_phases', 'action'=>'view', $teamPhase['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'team_phases', 'action'=>'edit', $teamPhase['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'team_phases', 'action'=>'delete', $teamPhase['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teamPhase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Team Phase', true), array('controller'=> 'team_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
