<div class="americanFootballActionPlays index">
<h2><?php __('AmericanFootballActionPlays');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('american_football_event_state_id');?></th>
	<th><?php echo $paginator->sort('play_type');?></th>
	<th><?php echo $paginator->sort('score_attempt_type');?></th>
	<th><?php echo $paginator->sort('drive_result');?></th>
	<th><?php echo $paginator->sort('points');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballActionPlays as $americanFootballActionPlay):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($americanFootballActionPlay['AmericanFootballEventState']['id'], array('controller'=> 'american_football_event_states', 'action'=>'view', $americanFootballActionPlay['AmericanFootballEventState']['id'])); ?>
		</td>
		<td>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['play_type']; ?>
		</td>
		<td>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['score_attempt_type']; ?>
		</td>
		<td>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['drive_result']; ?>
		</td>
		<td>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['points']; ?>
		</td>
		<td>
			<?php echo $americanFootballActionPlay['AmericanFootballActionPlay']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballActionPlay['AmericanFootballActionPlay']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballActionPlay['AmericanFootballActionPlay']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballActionPlay['AmericanFootballActionPlay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballActionPlay['AmericanFootballActionPlay']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballActionPlay', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List American Football Event States', true), array('controller'=> 'american_football_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Event State', true), array('controller'=> 'american_football_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List American Football Action Participants', true), array('controller'=> 'american_football_action_participants', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Action Participant', true), array('controller'=> 'american_football_action_participants', 'action'=>'add')); ?> </li>
	</ul>
</div>
