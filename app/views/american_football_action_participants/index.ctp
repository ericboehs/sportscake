<div class="americanFootballActionParticipants index">
<h2><?php __('AmericanFootballActionParticipants');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('american_football_action_play_id');?></th>
	<th><?php echo $paginator->sort('person_id');?></th>
	<th><?php echo $paginator->sort('participant_role');?></th>
	<th><?php echo $paginator->sort('score_type');?></th>
	<th><?php echo $paginator->sort('field_line');?></th>
	<th><?php echo $paginator->sort('yardage');?></th>
	<th><?php echo $paginator->sort('score_credit');?></th>
	<th><?php echo $paginator->sort('yards_gained');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballActionParticipants as $americanFootballActionParticipant):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($americanFootballActionParticipant['AmericanFootballActionPlay']['id'], array('controller'=> 'american_football_action_plays', 'action'=>'view', $americanFootballActionParticipant['AmericanFootballActionPlay']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($americanFootballActionParticipant['Person']['id'], array('controller'=> 'people', 'action'=>'view', $americanFootballActionParticipant['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['participant_role']; ?>
		</td>
		<td>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['score_type']; ?>
		</td>
		<td>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['field_line']; ?>
		</td>
		<td>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['yardage']; ?>
		</td>
		<td>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['score_credit']; ?>
		</td>
		<td>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['yards_gained']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballActionParticipant['AmericanFootballActionParticipant']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballActionParticipant['AmericanFootballActionParticipant']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballActionParticipant['AmericanFootballActionParticipant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballActionParticipant['AmericanFootballActionParticipant']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballActionParticipant', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List American Football Action Plays', true), array('controller'=> 'american_football_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Action Play', true), array('controller'=> 'american_football_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
