<div class="conferences view">
<h2><?php  __('Conference');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $conference['Conference']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conference Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $conference['Conference']['conference_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('League'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($conference['League']['name'], array('controller' => 'leagues', 'action' => 'view', $conference['League']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $conference['Conference']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shortname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $conference['Conference']['shortname']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Conference', true), array('action' => 'edit', $conference['Conference']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Conference', true), array('action' => 'delete', $conference['Conference']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $conference['Conference']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Conferences', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Conference', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Leagues', true), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Divisions', true), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Division', true), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php  __('Related Divisions');?></h3>
	<?php if (!empty($conference['Division'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $conference['Division']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Division Key');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $conference['Division']['division_key'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conference Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $conference['Division']['conference_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $conference['Division']['name'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $conference['Division']['active'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Division', true), array('controller' => 'divisions', 'action' => 'edit', $conference['Division']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Divisions');?></h3>
	<?php if (!empty($conference['Division'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Division Key'); ?></th>
		<th><?php __('Conference Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Active'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($conference['Division'] as $division):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $division['id'];?></td>
			<td><?php echo $division['division_key'];?></td>
			<td><?php echo $division['conference_id'];?></td>
			<td><?php echo $division['name'];?></td>
			<td><?php echo $division['active'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'divisions', 'action' => 'view', $division['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'divisions', 'action' => 'edit', $division['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'divisions', 'action' => 'delete', $division['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $division['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Division', true), array('controller' => 'divisions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
