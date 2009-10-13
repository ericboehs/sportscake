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
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $season['Season']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($season['Publisher']['id'], array('controller' => 'publishers', 'action' => 'view', $season['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('League'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($season['League']['name'], array('controller' => 'leagues', 'action' => 'view', $season['League']['id'])); ?>
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
		<li><?php echo $html->link(__('Edit Season', true), array('action' => 'edit', $season['Season']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Season', true), array('action' => 'delete', $season['Season']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $season['Season']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Season', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Leagues', true), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Injury Phases', true), array('controller' => 'injury_phases', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Injury Phase', true), array('controller' => 'injury_phases', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php  __('Related Injury Phases');?></h3>
	<?php if (!empty($season['InjuryPhase'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['person_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Injury Status');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['injury_status'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Injury Type');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['injury_type'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Injury Comment');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['injury_comment'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Disabled List');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['disabled_list'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Date Time');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['start_date_time'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Date Time');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['end_date_time'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Season Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['season_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phase Type');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['phase_type'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Injury Side');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $season['InjuryPhase']['injury_side'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Injury Phase', true), array('controller' => 'injury_phases', 'action' => 'edit', $season['InjuryPhase']['id'])); ?></li>
			</ul>
		</div>
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
				<?php echo $html->link(__('View', true), array('controller' => 'injury_phases', 'action' => 'view', $injuryPhase['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'injury_phases', 'action' => 'edit', $injuryPhase['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'injury_phases', 'action' => 'delete', $injuryPhase['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $injuryPhase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Injury Phase', true), array('controller' => 'injury_phases', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
