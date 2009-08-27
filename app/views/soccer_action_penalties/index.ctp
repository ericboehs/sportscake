<div class="soccerActionPenalties index">
<h2><?php __('SoccerActionPenalties');?></h2>
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
	<th><?php echo $paginator->sort('penalty_type');?></th>
	<th><?php echo $paginator->sort('penalty_level');?></th>
	<th><?php echo $paginator->sort('caution_value');?></th>
	<th><?php echo $paginator->sort('recipient_type');?></th>
	<th><?php echo $paginator->sort('recipient_id');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($soccerActionPenalties as $soccerActionPenalty):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionPenalty['SoccerEventState']['id'], array('controller'=> 'soccer_event_states', 'action'=>'view', $soccerActionPenalty['SoccerEventState']['id'])); ?>
		</td>
		<td>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['penalty_type']; ?>
		</td>
		<td>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['penalty_level']; ?>
		</td>
		<td>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['caution_value']; ?>
		</td>
		<td>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['recipient_type']; ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionPenalty['Recipient']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionPenalty['Recipient']['id'])); ?>
		</td>
		<td>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $soccerActionPenalty['SoccerActionPenalty']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $soccerActionPenalty['SoccerActionPenalty']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $soccerActionPenalty['SoccerActionPenalty']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionPenalty['SoccerActionPenalty']['id'])); ?>
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
		<li><?php echo $html->link(__('New SoccerActionPenalty', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Recipient', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
