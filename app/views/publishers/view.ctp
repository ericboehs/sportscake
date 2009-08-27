<div class="publishers view">
<h2><?php  __('Publisher');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publisher['Publisher']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publisher['Publisher']['publisher_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publisher['Publisher']['publisher_name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Publisher', true), array('action'=>'edit', $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Publisher', true), array('action'=>'delete', $publisher['Publisher']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Publishers', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Bookmakers', true), array('controller'=> 'bookmakers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Bookmaker', true), array('controller'=> 'bookmakers', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Document Fixtures', true), array('controller'=> 'document_fixtures', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Document Fixture', true), array('controller'=> 'document_fixtures', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Documents', true), array('controller'=> 'documents', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Document', true), array('controller'=> 'documents', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Sites', true), array('controller'=> 'sites', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Site', true), array('controller'=> 'sites', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Affiliations');?></h3>
	<?php if (!empty($publisher['Affiliation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Affiliation Key'); ?></th>
		<th><?php __('Affiliation Type'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publisher['Affiliation'] as $affiliation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $affiliation['id'];?></td>
			<td><?php echo $affiliation['affiliation_key'];?></td>
			<td><?php echo $affiliation['affiliation_type'];?></td>
			<td><?php echo $affiliation['publisher_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'affiliations', 'action'=>'view', $affiliation['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'affiliations', 'action'=>'edit', $affiliation['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'affiliations', 'action'=>'delete', $affiliation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Bookmakers');?></h3>
	<?php if (!empty($publisher['Bookmaker'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Key'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Location Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publisher['Bookmaker'] as $bookmaker):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $bookmaker['id'];?></td>
			<td><?php echo $bookmaker['bookmaker_key'];?></td>
			<td><?php echo $bookmaker['publisher_id'];?></td>
			<td><?php echo $bookmaker['location_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'bookmakers', 'action'=>'view', $bookmaker['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'bookmakers', 'action'=>'edit', $bookmaker['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'bookmakers', 'action'=>'delete', $bookmaker['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bookmaker['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Bookmaker', true), array('controller'=> 'bookmakers', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Document Fixtures');?></h3>
	<?php if (!empty($publisher['DocumentFixture'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Fixture Key'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Document Class Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publisher['DocumentFixture'] as $documentFixture):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $documentFixture['id'];?></td>
			<td><?php echo $documentFixture['fixture_key'];?></td>
			<td><?php echo $documentFixture['publisher_id'];?></td>
			<td><?php echo $documentFixture['name'];?></td>
			<td><?php echo $documentFixture['document_class_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'document_fixtures', 'action'=>'view', $documentFixture['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'document_fixtures', 'action'=>'edit', $documentFixture['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'document_fixtures', 'action'=>'delete', $documentFixture['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentFixture['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Document Fixture', true), array('controller'=> 'document_fixtures', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Documents');?></h3>
	<?php if (!empty($publisher['Document'])):?>
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
		foreach ($publisher['Document'] as $document):
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
	<?php if (!empty($publisher['Event'])):?>
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
		foreach ($publisher['Event'] as $event):
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
	<?php if (!empty($publisher['Media'])):?>
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
		foreach ($publisher['Media'] as $media):
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
<div class="related">
	<h3><?php __('Related People');?></h3>
	<?php if (!empty($publisher['Person'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Person Key'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Birth Date'); ?></th>
		<th><?php __('Death Date'); ?></th>
		<th><?php __('Birth Location Id'); ?></th>
		<th><?php __('Hometown Location Id'); ?></th>
		<th><?php __('Residence Location Id'); ?></th>
		<th><?php __('Death Location Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publisher['Person'] as $person):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $person['id'];?></td>
			<td><?php echo $person['person_key'];?></td>
			<td><?php echo $person['publisher_id'];?></td>
			<td><?php echo $person['gender'];?></td>
			<td><?php echo $person['birth_date'];?></td>
			<td><?php echo $person['death_date'];?></td>
			<td><?php echo $person['birth_location_id'];?></td>
			<td><?php echo $person['hometown_location_id'];?></td>
			<td><?php echo $person['residence_location_id'];?></td>
			<td><?php echo $person['death_location_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'people', 'action'=>'view', $person['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'people', 'action'=>'edit', $person['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'people', 'action'=>'delete', $person['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $person['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Seasons');?></h3>
	<?php if (!empty($publisher['Season'])):?>
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
		foreach ($publisher['Season'] as $season):
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
	<h3><?php __('Related Sites');?></h3>
	<?php if (!empty($publisher['Site'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Site Key'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Location Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publisher['Site'] as $site):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $site['id'];?></td>
			<td><?php echo $site['site_key'];?></td>
			<td><?php echo $site['publisher_id'];?></td>
			<td><?php echo $site['location_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'sites', 'action'=>'view', $site['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'sites', 'action'=>'edit', $site['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'sites', 'action'=>'delete', $site['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $site['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Site', true), array('controller'=> 'sites', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Teams');?></h3>
	<?php if (!empty($publisher['Team'])):?>
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
		foreach ($publisher['Team'] as $team):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $team['id'];?></td>
			<td><?php echo $team['team_key'];?></td>
			<td><?php echo $team['publisher_id'];?></td>
			<td><?php echo $team['home_site_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'teams', 'action'=>'view', $team['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'teams', 'action'=>'edit', $team['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'teams', 'action'=>'delete', $team['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $team['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
