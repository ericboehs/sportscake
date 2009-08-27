<div class="baseballDefensivePlayers index">
<h2><?php __('BaseballDefensivePlayers');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('baseball_defensive_group_id');?></th>
	<th><?php echo $paginator->sort('player_id');?></th>
	<th><?php echo $paginator->sort('position_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($baseballDefensivePlayers as $baseballDefensivePlayer):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $baseballDefensivePlayer['BaseballDefensivePlayer']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballDefensivePlayer['BaseballDefensiveGroup']['id'], array('controller'=> 'baseball_defensive_groups', 'action'=>'view', $baseballDefensivePlayer['BaseballDefensiveGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($baseballDefensivePlayer['Player']['id'], array('controller'=> 'people', 'action'=>'view', $baseballDefensivePlayer['Player']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($baseballDefensivePlayer['Position']['id'], array('controller'=> 'positions', 'action'=>'view', $baseballDefensivePlayer['Position']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $baseballDefensivePlayer['BaseballDefensivePlayer']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $baseballDefensivePlayer['BaseballDefensivePlayer']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $baseballDefensivePlayer['BaseballDefensivePlayer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballDefensivePlayer['BaseballDefensivePlayer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New BaseballDefensivePlayer', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Baseball Defensive Groups', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Group', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Player', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
	</ul>
</div>
