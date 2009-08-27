<div class="standings view">
<h2><?php  __('Standing');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standing['Standing']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Affiliation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($standing['Affiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $standing['Affiliation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Standing Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standing['Standing']['standing_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sub Season'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($standing['SubSeason']['id'], array('controller'=> 'sub_seasons', 'action'=>'view', $standing['SubSeason']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Updated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standing['Standing']['last_updated']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Source'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $standing['Standing']['source']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Standing', true), array('action'=>'edit', $standing['Standing']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Standing', true), array('action'=>'delete', $standing['Standing']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $standing['Standing']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Standings', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Sub Seasons', true), array('controller'=> 'sub_seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Sub Season', true), array('controller'=> 'sub_seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Standing Subgroups', true), array('controller'=> 'standing_subgroups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing Subgroup', true), array('controller'=> 'standing_subgroups', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Standing Subgroups');?></h3>
	<?php if (!empty($standing['StandingSubgroup'])):?>
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
		foreach ($standing['StandingSubgroup'] as $standingSubgroup):
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
