<div class="wageringStraightSpreadLines index">
<h2><?php __('WageringStraightSpreadLines');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('bookmaker_id');?></th>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th><?php echo $paginator->sort('date_time');?></th>
	<th><?php echo $paginator->sort('team_id');?></th>
	<th><?php echo $paginator->sort('person_id');?></th>
	<th><?php echo $paginator->sort('rotation_key');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th><?php echo $paginator->sort('vigorish');?></th>
	<th><?php echo $paginator->sort('line_value');?></th>
	<th><?php echo $paginator->sort('line_value_opening');?></th>
	<th><?php echo $paginator->sort('prediction');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($wageringStraightSpreadLines as $wageringStraightSpreadLine):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($wageringStraightSpreadLine['Bookmaker']['id'], array('controller'=> 'bookmakers', 'action'=>'view', $wageringStraightSpreadLine['Bookmaker']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wageringStraightSpreadLine['Event']['id'], array('controller'=> 'events', 'action'=>'view', $wageringStraightSpreadLine['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['date_time']; ?>
		</td>
		<td>
			<?php echo $html->link($wageringStraightSpreadLine['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $wageringStraightSpreadLine['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wageringStraightSpreadLine['Person']['id'], array('controller'=> 'people', 'action'=>'view', $wageringStraightSpreadLine['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['rotation_key']; ?>
		</td>
		<td>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['comment']; ?>
		</td>
		<td>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['vigorish']; ?>
		</td>
		<td>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['line_value']; ?>
		</td>
		<td>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['line_value_opening']; ?>
		</td>
		<td>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['prediction']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $wageringStraightSpreadLine['WageringStraightSpreadLine']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $wageringStraightSpreadLine['WageringStraightSpreadLine']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $wageringStraightSpreadLine['WageringStraightSpreadLine']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringStraightSpreadLine['WageringStraightSpreadLine']['id'])); ?>
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
		<li><?php echo $html->link(__('New WageringStraightSpreadLine', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Bookmakers', true), array('controller'=> 'bookmakers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Bookmaker', true), array('controller'=> 'bookmakers', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
