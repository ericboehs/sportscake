<div class="wageringOddsLines index">
<h2><?php __('WageringOddsLines');?></h2>
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
	<th><?php echo $paginator->sort('numerator');?></th>
	<th><?php echo $paginator->sort('denominator');?></th>
	<th><?php echo $paginator->sort('prediction');?></th>
	<th><?php echo $paginator->sort('payout_calculation');?></th>
	<th><?php echo $paginator->sort('payout_amount');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($wageringOddsLines as $wageringOddsLine):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $wageringOddsLine['WageringOddsLine']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($wageringOddsLine['Bookmaker']['id'], array('controller'=> 'bookmakers', 'action'=>'view', $wageringOddsLine['Bookmaker']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wageringOddsLine['Event']['id'], array('controller'=> 'events', 'action'=>'view', $wageringOddsLine['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $wageringOddsLine['WageringOddsLine']['date_time']; ?>
		</td>
		<td>
			<?php echo $html->link($wageringOddsLine['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $wageringOddsLine['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wageringOddsLine['Person']['id'], array('controller'=> 'people', 'action'=>'view', $wageringOddsLine['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $wageringOddsLine['WageringOddsLine']['rotation_key']; ?>
		</td>
		<td>
			<?php echo $wageringOddsLine['WageringOddsLine']['comment']; ?>
		</td>
		<td>
			<?php echo $wageringOddsLine['WageringOddsLine']['numerator']; ?>
		</td>
		<td>
			<?php echo $wageringOddsLine['WageringOddsLine']['denominator']; ?>
		</td>
		<td>
			<?php echo $wageringOddsLine['WageringOddsLine']['prediction']; ?>
		</td>
		<td>
			<?php echo $wageringOddsLine['WageringOddsLine']['payout_calculation']; ?>
		</td>
		<td>
			<?php echo $wageringOddsLine['WageringOddsLine']['payout_amount']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $wageringOddsLine['WageringOddsLine']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $wageringOddsLine['WageringOddsLine']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $wageringOddsLine['WageringOddsLine']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringOddsLine['WageringOddsLine']['id'])); ?>
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
		<li><?php echo $html->link(__('New WageringOddsLine', true), array('action'=>'add')); ?></li>
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
