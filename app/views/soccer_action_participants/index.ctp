<div class="soccerActionParticipants index">
<h2><?php __('SoccerActionParticipants');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('soccer_action_play_id');?></th>
	<th><?php echo $paginator->sort('person_id');?></th>
	<th><?php echo $paginator->sort('participant_role');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($soccerActionParticipants as $soccerActionParticipant):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $soccerActionParticipant['SoccerActionParticipant']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionParticipant['SoccerActionPlay']['id'], array('controller'=> 'soccer_action_plays', 'action'=>'view', $soccerActionParticipant['SoccerActionPlay']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionParticipant['Person']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionParticipant['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $soccerActionParticipant['SoccerActionParticipant']['participant_role']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $soccerActionParticipant['SoccerActionParticipant']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $soccerActionParticipant['SoccerActionParticipant']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $soccerActionParticipant['SoccerActionParticipant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionParticipant['SoccerActionParticipant']['id'])); ?>
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
		<li><?php echo $html->link(__('New SoccerActionParticipant', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Soccer Action Plays', true), array('controller'=> 'soccer_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Play', true), array('controller'=> 'soccer_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
