<div class="wageringMoneylines index">
<h2><?php __('WageringMoneylines');?></h2>
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
	<th><?php echo $paginator->sort('line');?></th>
	<th><?php echo $paginator->sort('line_opening');?></th>
	<th><?php echo $paginator->sort('prediction');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($wageringMoneylines as $wageringMoneyline):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $wageringMoneyline['WageringMoneyline']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($wageringMoneyline['Bookmaker']['id'], array('controller'=> 'bookmakers', 'action'=>'view', $wageringMoneyline['Bookmaker']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wageringMoneyline['Event']['id'], array('controller'=> 'events', 'action'=>'view', $wageringMoneyline['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $wageringMoneyline['WageringMoneyline']['date_time']; ?>
		</td>
		<td>
			<?php echo $html->link($wageringMoneyline['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $wageringMoneyline['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wageringMoneyline['Person']['id'], array('controller'=> 'people', 'action'=>'view', $wageringMoneyline['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $wageringMoneyline['WageringMoneyline']['rotation_key']; ?>
		</td>
		<td>
			<?php echo $wageringMoneyline['WageringMoneyline']['comment']; ?>
		</td>
		<td>
			<?php echo $wageringMoneyline['WageringMoneyline']['vigorish']; ?>
		</td>
		<td>
			<?php echo $wageringMoneyline['WageringMoneyline']['line']; ?>
		</td>
		<td>
			<?php echo $wageringMoneyline['WageringMoneyline']['line_opening']; ?>
		</td>
		<td>
			<?php echo $wageringMoneyline['WageringMoneyline']['prediction']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $wageringMoneyline['WageringMoneyline']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $wageringMoneyline['WageringMoneyline']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $wageringMoneyline['WageringMoneyline']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringMoneyline['WageringMoneyline']['id'])); ?>
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
		<li><?php echo $html->link(__('New WageringMoneyline', true), array('action'=>'add')); ?></li>
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
