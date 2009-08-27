<div class="soccerActionFouls index">
<h2><?php __('SoccerActionFouls');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('soccer_event_state_id');?></th>
	<th><?php echo $paginator->sort('foul_name');?></th>
	<th><?php echo $paginator->sort('foul_result');?></th>
	<th><?php echo $paginator->sort('foul_type');?></th>
	<th><?php echo $paginator->sort('fouler_id');?></th>
	<th><?php echo $paginator->sort('recipient_type');?></th>
	<th><?php echo $paginator->sort('recipient_id');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($soccerActionFouls as $soccerActionFoul):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $soccerActionFoul['SoccerActionFoul']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionFoul['SoccerEventState']['id'], array('controller'=> 'soccer_event_states', 'action'=>'view', $soccerActionFoul['SoccerEventState']['id'])); ?>
		</td>
		<td>
			<?php echo $soccerActionFoul['SoccerActionFoul']['foul_name']; ?>
		</td>
		<td>
			<?php echo $soccerActionFoul['SoccerActionFoul']['foul_result']; ?>
		</td>
		<td>
			<?php echo $soccerActionFoul['SoccerActionFoul']['foul_type']; ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionFoul['Fouler']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionFoul['Fouler']['id'])); ?>
		</td>
		<td>
			<?php echo $soccerActionFoul['SoccerActionFoul']['recipient_type']; ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionFoul['Recipient']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionFoul['Recipient']['id'])); ?>
		</td>
		<td>
			<?php echo $soccerActionFoul['SoccerActionFoul']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $soccerActionFoul['SoccerActionFoul']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $soccerActionFoul['SoccerActionFoul']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $soccerActionFoul['SoccerActionFoul']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionFoul['SoccerActionFoul']['id'])); ?>
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
		<li><?php echo $html->link(__('New SoccerActionFoul', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Fouler', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
