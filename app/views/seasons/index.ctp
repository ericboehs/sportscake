<div class="seasons index">
<h2><?php __('Seasons');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('season_key');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('publisher_id');?></th>
	<th><?php echo $paginator->sort('league_id');?></th>
	<th><?php echo $paginator->sort('start_date_time');?></th>
	<th><?php echo $paginator->sort('end_date_time');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($seasons as $season):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $season['Season']['id']; ?>
		</td>
		<td>
			<?php echo $season['Season']['season_key']; ?>
		</td>
		<td>
			<?php echo $season['Season']['name']; ?>
		</td>
		<td>
			<?php echo $html->link($season['Publisher']['id'], array('controller' => 'publishers', 'action' => 'view', $season['Publisher']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($season['League']['name'], array('controller' => 'leagues', 'action' => 'view', $season['League']['id'])); ?>
		</td>
		<td>
			<?php echo $season['Season']['start_date_time']; ?>
		</td>
		<td>
			<?php echo $season['Season']['end_date_time']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $season['Season']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $season['Season']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $season['Season']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $season['Season']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Season', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Leagues', true), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Injury Phases', true), array('controller' => 'injury_phases', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Injury Phase', true), array('controller' => 'injury_phases', 'action' => 'add')); ?> </li>
	</ul>
</div>
