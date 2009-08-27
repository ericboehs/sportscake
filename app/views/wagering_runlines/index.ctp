<div class="wageringRunlines index">
<h2><?php __('WageringRunlines');?></h2>
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
	<th><?php echo $paginator->sort('line_value');?></th>
	<th><?php echo $paginator->sort('prediction');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($wageringRunlines as $wageringRunline):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $wageringRunline['WageringRunline']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($wageringRunline['Bookmaker']['id'], array('controller'=> 'bookmakers', 'action'=>'view', $wageringRunline['Bookmaker']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wageringRunline['Event']['id'], array('controller'=> 'events', 'action'=>'view', $wageringRunline['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $wageringRunline['WageringRunline']['date_time']; ?>
		</td>
		<td>
			<?php echo $html->link($wageringRunline['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $wageringRunline['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wageringRunline['Person']['id'], array('controller'=> 'people', 'action'=>'view', $wageringRunline['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $wageringRunline['WageringRunline']['rotation_key']; ?>
		</td>
		<td>
			<?php echo $wageringRunline['WageringRunline']['comment']; ?>
		</td>
		<td>
			<?php echo $wageringRunline['WageringRunline']['vigorish']; ?>
		</td>
		<td>
			<?php echo $wageringRunline['WageringRunline']['line']; ?>
		</td>
		<td>
			<?php echo $wageringRunline['WageringRunline']['line_opening']; ?>
		</td>
		<td>
			<?php echo $wageringRunline['WageringRunline']['line_value']; ?>
		</td>
		<td>
			<?php echo $wageringRunline['WageringRunline']['prediction']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $wageringRunline['WageringRunline']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $wageringRunline['WageringRunline']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $wageringRunline['WageringRunline']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringRunline['WageringRunline']['id'])); ?>
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
		<li><?php echo $html->link(__('New WageringRunline', true), array('action'=>'add')); ?></li>
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
