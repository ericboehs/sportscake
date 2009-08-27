<div class="subSeasons index">
<h2><?php __('SubSeasons');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('sub_season_key');?></th>
	<th><?php echo $paginator->sort('season_id');?></th>
	<th><?php echo $paginator->sort('sub_season_type');?></th>
	<th><?php echo $paginator->sort('start_date_time');?></th>
	<th><?php echo $paginator->sort('end_date_time');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($subSeasons as $subSeason):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $subSeason['SubSeason']['id']; ?>
		</td>
		<td>
			<?php echo $subSeason['SubSeason']['sub_season_key']; ?>
		</td>
		<td>
			<?php echo $html->link($subSeason['Season']['id'], array('controller'=> 'seasons', 'action'=>'view', $subSeason['Season']['id'])); ?>
		</td>
		<td>
			<?php echo $subSeason['SubSeason']['sub_season_type']; ?>
		</td>
		<td>
			<?php echo $subSeason['SubSeason']['start_date_time']; ?>
		</td>
		<td>
			<?php echo $subSeason['SubSeason']['end_date_time']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $subSeason['SubSeason']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $subSeason['SubSeason']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $subSeason['SubSeason']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subSeason['SubSeason']['id'])); ?>
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
		<li><?php echo $html->link(__('New SubSeason', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Standings', true), array('controller'=> 'standings', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing', true), array('controller'=> 'standings', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
	</ul>
</div>
