<div class="sports view">
<h2><?php  __('Sport');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sport['Sport']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sport Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sport['Sport']['sport_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sport['Sport']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Sport', true), array('action' => 'edit', $sport['Sport']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Sport', true), array('action' => 'delete', $sport['Sport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sport['Sport']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Sports', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Sport', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Leagues', true), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Leagues');?></h3>
	<?php if (!empty($sport['League'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('League Key'); ?></th>
		<th><?php __('Sport Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Nickname'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sport['League'] as $league):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $league['id'];?></td>
			<td><?php echo $league['league_key'];?></td>
			<td><?php echo $league['sport_id'];?></td>
			<td><?php echo $league['name'];?></td>
			<td><?php echo $league['nickname'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'leagues', 'action' => 'view', $league['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'leagues', 'action' => 'edit', $league['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'leagues', 'action' => 'delete', $league['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $league['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New League', true), array('controller' => 'leagues', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
