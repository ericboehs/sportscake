<div class="leagues view">
<h2><?php  __('League');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $league['League']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('League Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $league['League']['league_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sport'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($league['Sport']['name'], array('controller' => 'sports', 'action' => 'view', $league['Sport']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $league['League']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nickname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $league['League']['nickname']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit League', true), array('action' => 'edit', $league['League']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete League', true), array('action' => 'delete', $league['League']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $league['League']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Leagues', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Sports', true), array('controller' => 'sports', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Sport', true), array('controller' => 'sports', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Conferences', true), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Conference', true), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller' => 'seasons', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Season', true), array('controller' => 'seasons', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Conferences');?></h3>
	<?php if (!empty($league['Conference'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Conference Key'); ?></th>
		<th><?php __('League Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Shortname'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($league['Conference'] as $conference):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $conference['id'];?></td>
			<td><?php echo $conference['conference_key'];?></td>
			<td><?php echo $conference['league_id'];?></td>
			<td><?php echo $conference['name'];?></td>
			<td><?php echo $conference['shortname'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'conferences', 'action' => 'view', $conference['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'conferences', 'action' => 'edit', $conference['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'conferences', 'action' => 'delete', $conference['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $conference['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Conference', true), array('controller' => 'conferences', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Seasons');?></h3>
	<?php if (!empty($league['Season'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Season Key'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('League Id'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($league['Season'] as $season):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $season['id'];?></td>
			<td><?php echo $season['season_key'];?></td>
			<td><?php echo $season['name'];?></td>
			<td><?php echo $season['publisher_id'];?></td>
			<td><?php echo $season['league_id'];?></td>
			<td><?php echo $season['start_date_time'];?></td>
			<td><?php echo $season['end_date_time'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'seasons', 'action' => 'view', $season['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'seasons', 'action' => 'edit', $season['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'seasons', 'action' => 'delete', $season['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $season['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Season', true), array('controller' => 'seasons', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
