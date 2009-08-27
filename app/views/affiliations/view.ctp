<div class="affiliations view">
<h2><?php  __('Affiliation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliation['Affiliation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Affiliation Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliation['Affiliation']['affiliation_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Affiliation Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliation['Affiliation']['affiliation_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($affiliation['Publisher']['id'], array('controller'=> 'publishers', 'action'=>'view', $affiliation['Publisher']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Affiliation', true), array('action'=>'edit', $affiliation['Affiliation']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Affiliation', true), array('action'=>'delete', $affiliation['Affiliation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliation['Affiliation']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller'=> 'publishers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller'=> 'publishers', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliation Phases', true), array('controller'=> 'affiliation_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation Phase', true), array('controller'=> 'affiliation_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Standing Subgroups', true), array('controller'=> 'standing_subgroups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing Subgroup', true), array('controller'=> 'standing_subgroups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Standings', true), array('controller'=> 'standings', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing', true), array('controller'=> 'standings', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Team Phases', true), array('controller'=> 'team_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team Phase', true), array('controller'=> 'team_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Documents', true), array('controller'=> 'documents', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Document', true), array('controller'=> 'documents', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Affiliation Phases');?></h3>
	<?php if (!empty($affiliation['AffiliationPhase'])):?>
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
		foreach ($affiliation['AffiliationPhase'] as $affiliationPhase):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $affiliationPhase['id'];?></td>
			<td><?php echo $affiliationPhase['affiliation_id'];?></td>
			<td><?php echo $affiliationPhase['root_id'];?></td>
			<td><?php echo $affiliationPhase['ancestor_affiliation_id'];?></td>
			<td><?php echo $affiliationPhase['start_season_id'];?></td>
			<td><?php echo $affiliationPhase['start_date_time'];?></td>
			<td><?php echo $affiliationPhase['end_season_id'];?></td>
			<td><?php echo $affiliationPhase['end_date_time'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'affiliation_phases', 'action'=>'view', $affiliationPhase['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'affiliation_phases', 'action'=>'edit', $affiliationPhase['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'affiliation_phases', 'action'=>'delete', $affiliationPhase['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliationPhase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Affiliation Phase', true), array('controller'=> 'affiliation_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Affiliation Phases');?></h3>
	<?php if (!empty($affiliation['AncestorAffiliation'])):?>
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
		foreach ($affiliation['AncestorAffiliation'] as $ancestorAffiliation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ancestorAffiliation['id'];?></td>
			<td><?php echo $ancestorAffiliation['affiliation_id'];?></td>
			<td><?php echo $ancestorAffiliation['root_id'];?></td>
			<td><?php echo $ancestorAffiliation['ancestor_affiliation_id'];?></td>
			<td><?php echo $ancestorAffiliation['start_season_id'];?></td>
			<td><?php echo $ancestorAffiliation['start_date_time'];?></td>
			<td><?php echo $ancestorAffiliation['end_season_id'];?></td>
			<td><?php echo $ancestorAffiliation['end_date_time'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'affiliation_phases', 'action'=>'view', $ancestorAffiliation['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'affiliation_phases', 'action'=>'edit', $ancestorAffiliation['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'affiliation_phases', 'action'=>'delete', $ancestorAffiliation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ancestorAffiliation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Ancestor Affiliation', true), array('controller'=> 'affiliation_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Positions');?></h3>
	<?php if (!empty($affiliation['Position'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Affiliation Id'); ?></th>
		<th><?php __('Abbreviation'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($affiliation['Position'] as $position):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $position['id'];?></td>
			<td><?php echo $position['affiliation_id'];?></td>
			<td><?php echo $position['abbreviation'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'positions', 'action'=>'view', $position['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'positions', 'action'=>'edit', $position['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'positions', 'action'=>'delete', $position['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $position['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Position', true), array('controller'=> 'positions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Seasons');?></h3>
	<?php if (!empty($affiliation['Season'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Season Key'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('League Id'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($affiliation['Season'] as $season):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $season['id'];?></td>
			<td><?php echo $season['season_key'];?></td>
			<td><?php echo $season['publisher_id'];?></td>
			<td><?php echo $season['league_id'];?></td>
			<td><?php echo $season['start_date_time'];?></td>
			<td><?php echo $season['end_date_time'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'seasons', 'action'=>'view', $season['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'seasons', 'action'=>'edit', $season['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'seasons', 'action'=>'delete', $season['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $season['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Season', true), array('controller'=> 'seasons', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Standing Subgroups');?></h3>
	<?php if (!empty($affiliation['StandingSubgroup'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Standing Id'); ?></th>
		<th><?php __('Affiliation Id'); ?></th>
		<th><?php __('Alignment Scope'); ?></th>
		<th><?php __('Competition Scope'); ?></th>
		<th><?php __('Competition Scope Id'); ?></th>
		<th><?php __('Duration Scope'); ?></th>
		<th><?php __('Scoping Label'); ?></th>
		<th><?php __('Site Scope'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($affiliation['StandingSubgroup'] as $standingSubgroup):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $standingSubgroup['id'];?></td>
			<td><?php echo $standingSubgroup['standing_id'];?></td>
			<td><?php echo $standingSubgroup['affiliation_id'];?></td>
			<td><?php echo $standingSubgroup['alignment_scope'];?></td>
			<td><?php echo $standingSubgroup['competition_scope'];?></td>
			<td><?php echo $standingSubgroup['competition_scope_id'];?></td>
			<td><?php echo $standingSubgroup['duration_scope'];?></td>
			<td><?php echo $standingSubgroup['scoping_label'];?></td>
			<td><?php echo $standingSubgroup['site_scope'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'standing_subgroups', 'action'=>'view', $standingSubgroup['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'standing_subgroups', 'action'=>'edit', $standingSubgroup['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'standing_subgroups', 'action'=>'delete', $standingSubgroup['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $standingSubgroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Standing Subgroup', true), array('controller'=> 'standing_subgroups', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Standings');?></h3>
	<?php if (!empty($affiliation['Standing'])):?>
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
		foreach ($affiliation['Standing'] as $standing):
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
	<h3><?php __('Related Team Phases');?></h3>
	<?php if (!empty($affiliation['TeamPhase'])):?>
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
		foreach ($affiliation['TeamPhase'] as $teamPhase):
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
<div class="related">
	<h3><?php __('Related Documents');?></h3>
	<?php if (!empty($affiliation['Document'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Doc Id'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Language'); ?></th>
		<th><?php __('Priority'); ?></th>
		<th><?php __('Revision Id'); ?></th>
		<th><?php __('Stats Coverage'); ?></th>
		<th><?php __('Document Fixture Id'); ?></th>
		<th><?php __('Source Id'); ?></th>
		<th><?php __('Db Loading Date Time'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($affiliation['Document'] as $document):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $document['id'];?></td>
			<td><?php echo $document['doc_id'];?></td>
			<td><?php echo $document['publisher_id'];?></td>
			<td><?php echo $document['date_time'];?></td>
			<td><?php echo $document['title'];?></td>
			<td><?php echo $document['language'];?></td>
			<td><?php echo $document['priority'];?></td>
			<td><?php echo $document['revision_id'];?></td>
			<td><?php echo $document['stats_coverage'];?></td>
			<td><?php echo $document['document_fixture_id'];?></td>
			<td><?php echo $document['source_id'];?></td>
			<td><?php echo $document['db_loading_date_time'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'documents', 'action'=>'view', $document['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'documents', 'action'=>'edit', $document['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'documents', 'action'=>'delete', $document['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Document', true), array('controller'=> 'documents', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Events');?></h3>
	<?php if (!empty($affiliation['Event'])):?>
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
		foreach ($affiliation['Event'] as $event):
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
<div class="related">
	<h3><?php __('Related Media');?></h3>
	<?php if (!empty($affiliation['Media'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Object Id'); ?></th>
		<th><?php __('Source Id'); ?></th>
		<th><?php __('Revision Id'); ?></th>
		<th><?php __('Media Type'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Credit Id'); ?></th>
		<th><?php __('Db Loading Date Time'); ?></th>
		<th><?php __('Creation Location Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($affiliation['Media'] as $media):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $media['id'];?></td>
			<td><?php echo $media['object_id'];?></td>
			<td><?php echo $media['source_id'];?></td>
			<td><?php echo $media['revision_id'];?></td>
			<td><?php echo $media['media_type'];?></td>
			<td><?php echo $media['publisher_id'];?></td>
			<td><?php echo $media['date_time'];?></td>
			<td><?php echo $media['credit_id'];?></td>
			<td><?php echo $media['db_loading_date_time'];?></td>
			<td><?php echo $media['creation_location_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'media', 'action'=>'view', $media['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'media', 'action'=>'edit', $media['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'media', 'action'=>'delete', $media['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $media['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
