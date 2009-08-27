<div class="seasons view">
<h2><?php  __('Season');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $season['Season']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Season Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $season['Season']['season_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($season['Publisher']['id'], array('controller'=> 'publishers', 'action'=>'view', $season['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('League'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($season['League']['id'], array('controller'=> 'affiliations', 'action'=>'view', $season['League']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $season['Season']['start_date_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $season['Season']['end_date_time']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Season', true), array('action'=>'edit', $season['Season']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Season', true), array('action'=>'delete', $season['Season']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $season['Season']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Season', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller'=> 'publishers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller'=> 'publishers', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Injury Phases', true), array('controller'=> 'injury_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Injury Phase', true), array('controller'=> 'injury_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Team Phases', true), array('controller'=> 'team_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Start Team Phase', true), array('controller'=> 'team_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliation Phases', true), array('controller'=> 'affiliation_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation Phase Start', true), array('controller'=> 'affiliation_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events Sub Seasons', true), array('controller'=> 'events_sub_seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Events Sub Season', true), array('controller'=> 'events_sub_seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Sub Seasons', true), array('controller'=> 'sub_seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Sub Season', true), array('controller'=> 'sub_seasons', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Injury Phases');?></h3>
	<?php if (!empty($season['InjuryPhase'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Injury Status'); ?></th>
		<th><?php __('Injury Type'); ?></th>
		<th><?php __('Injury Comment'); ?></th>
		<th><?php __('Disabled List'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th><?php __('Season Id'); ?></th>
		<th><?php __('Phase Type'); ?></th>
		<th><?php __('Injury Side'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($season['InjuryPhase'] as $injuryPhase):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $injuryPhase['id'];?></td>
			<td><?php echo $injuryPhase['person_id'];?></td>
			<td><?php echo $injuryPhase['injury_status'];?></td>
			<td><?php echo $injuryPhase['injury_type'];?></td>
			<td><?php echo $injuryPhase['injury_comment'];?></td>
			<td><?php echo $injuryPhase['disabled_list'];?></td>
			<td><?php echo $injuryPhase['start_date_time'];?></td>
			<td><?php echo $injuryPhase['end_date_time'];?></td>
			<td><?php echo $injuryPhase['season_id'];?></td>
			<td><?php echo $injuryPhase['phase_type'];?></td>
			<td><?php echo $injuryPhase['injury_side'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'injury_phases', 'action'=>'view', $injuryPhase['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'injury_phases', 'action'=>'edit', $injuryPhase['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'injury_phases', 'action'=>'delete', $injuryPhase['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $injuryPhase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Injury Phase', true), array('controller'=> 'injury_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Team Phases');?></h3>
	<?php if (!empty($season['StartTeamPhase'])):?>
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
		foreach ($season['StartTeamPhase'] as $startTeamPhase):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $startTeamPhase['id'];?></td>
			<td><?php echo $startTeamPhase['team_id'];?></td>
			<td><?php echo $startTeamPhase['start_season_id'];?></td>
			<td><?php echo $startTeamPhase['end_season_id'];?></td>
			<td><?php echo $startTeamPhase['affiliation_id'];?></td>
			<td><?php echo $startTeamPhase['start_date_time'];?></td>
			<td><?php echo $startTeamPhase['end_date_time'];?></td>
			<td><?php echo $startTeamPhase['phase_status'];?></td>
			<td><?php echo $startTeamPhase['role_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'team_phases', 'action'=>'view', $startTeamPhase['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'team_phases', 'action'=>'edit', $startTeamPhase['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'team_phases', 'action'=>'delete', $startTeamPhase['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $startTeamPhase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Start Team Phase', true), array('controller'=> 'team_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Team Phases');?></h3>
	<?php if (!empty($season['EndTeamPhase'])):?>
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
		foreach ($season['EndTeamPhase'] as $endTeamPhase):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $endTeamPhase['id'];?></td>
			<td><?php echo $endTeamPhase['team_id'];?></td>
			<td><?php echo $endTeamPhase['start_season_id'];?></td>
			<td><?php echo $endTeamPhase['end_season_id'];?></td>
			<td><?php echo $endTeamPhase['affiliation_id'];?></td>
			<td><?php echo $endTeamPhase['start_date_time'];?></td>
			<td><?php echo $endTeamPhase['end_date_time'];?></td>
			<td><?php echo $endTeamPhase['phase_status'];?></td>
			<td><?php echo $endTeamPhase['role_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'team_phases', 'action'=>'view', $endTeamPhase['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'team_phases', 'action'=>'edit', $endTeamPhase['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'team_phases', 'action'=>'delete', $endTeamPhase['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $endTeamPhase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New End Team Phase', true), array('controller'=> 'team_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Affiliation Phases');?></h3>
	<?php if (!empty($season['AffiliationPhaseStart'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Affiliation Id'); ?></th>
		<th><?php __('Root Id'); ?></th>
		<th><?php __('Ancestor Affiliation Id'); ?></th>
		<th><?php __('Start Season Id'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('End Season Id'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($season['AffiliationPhaseStart'] as $affiliationPhaseStart):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $affiliationPhaseStart['id'];?></td>
			<td><?php echo $affiliationPhaseStart['affiliation_id'];?></td>
			<td><?php echo $affiliationPhaseStart['root_id'];?></td>
			<td><?php echo $affiliationPhaseStart['ancestor_affiliation_id'];?></td>
			<td><?php echo $affiliationPhaseStart['start_season_id'];?></td>
			<td><?php echo $affiliationPhaseStart['start_date_time'];?></td>
			<td><?php echo $affiliationPhaseStart['end_season_id'];?></td>
			<td><?php echo $affiliationPhaseStart['end_date_time'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'affiliation_phases', 'action'=>'view', $affiliationPhaseStart['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'affiliation_phases', 'action'=>'edit', $affiliationPhaseStart['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'affiliation_phases', 'action'=>'delete', $affiliationPhaseStart['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliationPhaseStart['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Affiliation Phase Start', true), array('controller'=> 'affiliation_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Affiliation Phases');?></h3>
	<?php if (!empty($season['AffiliationPhaseEnd'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Affiliation Id'); ?></th>
		<th><?php __('Root Id'); ?></th>
		<th><?php __('Ancestor Affiliation Id'); ?></th>
		<th><?php __('Start Season Id'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('End Season Id'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($season['AffiliationPhaseEnd'] as $affiliationPhaseEnd):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $affiliationPhaseEnd['id'];?></td>
			<td><?php echo $affiliationPhaseEnd['affiliation_id'];?></td>
			<td><?php echo $affiliationPhaseEnd['root_id'];?></td>
			<td><?php echo $affiliationPhaseEnd['ancestor_affiliation_id'];?></td>
			<td><?php echo $affiliationPhaseEnd['start_season_id'];?></td>
			<td><?php echo $affiliationPhaseEnd['start_date_time'];?></td>
			<td><?php echo $affiliationPhaseEnd['end_season_id'];?></td>
			<td><?php echo $affiliationPhaseEnd['end_date_time'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'affiliation_phases', 'action'=>'view', $affiliationPhaseEnd['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'affiliation_phases', 'action'=>'edit', $affiliationPhaseEnd['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'affiliation_phases', 'action'=>'delete', $affiliationPhaseEnd['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliationPhaseEnd['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Affiliation Phase End', true), array('controller'=> 'affiliation_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Events Sub Seasons');?></h3>
	<?php if (!empty($season['EventsSubSeason'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Sub Season Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($season['EventsSubSeason'] as $eventsSubSeason):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventsSubSeason['event_id'];?></td>
			<td><?php echo $eventsSubSeason['sub_season_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'events_sub_seasons', 'action'=>'view', $eventsSubSeason['event_id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'events_sub_seasons', 'action'=>'edit', $eventsSubSeason['event_id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'events_sub_seasons', 'action'=>'delete', $eventsSubSeason['event_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventsSubSeason['event_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Events Sub Season', true), array('controller'=> 'events_sub_seasons', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Sub Seasons');?></h3>
	<?php if (!empty($season['SubSeason'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sub Season Key'); ?></th>
		<th><?php __('Season Id'); ?></th>
		<th><?php __('Sub Season Type'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($season['SubSeason'] as $subSeason):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subSeason['id'];?></td>
			<td><?php echo $subSeason['sub_season_key'];?></td>
			<td><?php echo $subSeason['season_id'];?></td>
			<td><?php echo $subSeason['sub_season_type'];?></td>
			<td><?php echo $subSeason['start_date_time'];?></td>
			<td><?php echo $subSeason['end_date_time'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'sub_seasons', 'action'=>'view', $subSeason['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'sub_seasons', 'action'=>'edit', $subSeason['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'sub_seasons', 'action'=>'delete', $subSeason['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subSeason['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Sub Season', true), array('controller'=> 'sub_seasons', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
