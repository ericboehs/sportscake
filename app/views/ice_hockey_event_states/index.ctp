<div class="iceHockeyEventStates index">
<h2><?php __('IceHockeyEventStates');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th><?php echo $paginator->sort('current_state');?></th>
	<th><?php echo $paginator->sort('sequence_number');?></th>
	<th><?php echo $paginator->sort('period_value');?></th>
	<th><?php echo $paginator->sort('period_time_elapsed');?></th>
	<th><?php echo $paginator->sort('period_time_remaining');?></th>
	<th><?php echo $paginator->sort('context');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($iceHockeyEventStates as $iceHockeyEventState):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['event_id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['current_state']; ?>
		</td>
		<td>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['period_value']; ?>
		</td>
		<td>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['period_time_elapsed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['period_time_remaining']; ?>
		</td>
		<td>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['context']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $iceHockeyEventState['IceHockeyEventState']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $iceHockeyEventState['IceHockeyEventState']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $iceHockeyEventState['IceHockeyEventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyEventState['IceHockeyEventState']['id'])); ?>
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
		<li><?php echo $html->link(__('New IceHockeyEventState', true), array('action'=>'add')); ?></li>
	</ul>
</div>
