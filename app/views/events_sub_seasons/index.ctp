<div class="eventsSubSeasons index">
<h2><?php __('EventsSubSeasons');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th><?php echo $paginator->sort('sub_season_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($eventsSubSeasons as $eventsSubSeason):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $eventsSubSeason['EventsSubSeason']['event_id']; ?>
		</td>
		<td>
			<?php echo $eventsSubSeason['EventsSubSeason']['sub_season_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $eventsSubSeason['EventsSubSeason']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $eventsSubSeason['EventsSubSeason']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $eventsSubSeason['EventsSubSeason']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventsSubSeason['EventsSubSeason']['id'])); ?>
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
		<li><?php echo $html->link(__('New EventsSubSeason', true), array('action'=>'add')); ?></li>
	</ul>
</div>
