<div class="baseballActionContactDetails index">
<h2><?php __('BaseballActionContactDetails');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('baseball_action_pitch_id');?></th>
	<th><?php echo $paginator->sort('location');?></th>
	<th><?php echo $paginator->sort('strength');?></th>
	<th><?php echo $paginator->sort('velocity');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th><?php echo $paginator->sort('trajectory_coordinates');?></th>
	<th><?php echo $paginator->sort('trajectory_formula');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($baseballActionContactDetails as $baseballActionContactDetail):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballActionContactDetail['BaseballActionPitch']['id'], array('controller'=> 'baseball_action_pitches', 'action'=>'view', $baseballActionContactDetail['BaseballActionPitch']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['location']; ?>
		</td>
		<td>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['strength']; ?>
		</td>
		<td>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['velocity']; ?>
		</td>
		<td>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['comment']; ?>
		</td>
		<td>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['trajectory_coordinates']; ?>
		</td>
		<td>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['trajectory_formula']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $baseballActionContactDetail['BaseballActionContactDetail']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $baseballActionContactDetail['BaseballActionContactDetail']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $baseballActionContactDetail['BaseballActionContactDetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionContactDetail['BaseballActionContactDetail']['id'])); ?>
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
		<li><?php echo $html->link(__('New BaseballActionContactDetail', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Baseball Action Pitches', true), array('controller'=> 'baseball_action_pitches', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Pitch', true), array('controller'=> 'baseball_action_pitches', 'action'=>'add')); ?> </li>
	</ul>
</div>
