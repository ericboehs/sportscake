<div class="positions index">
<h2><?php __('Positions');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('affiliation_id');?></th>
	<th><?php echo $paginator->sort('abbreviation');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($positions as $position):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $position['Position']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($position['Affiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $position['Affiliation']['id'])); ?>
		</td>
		<td>
			<?php echo $position['Position']['abbreviation']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $position['Position']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $position['Position']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $position['Position']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $position['Position']['id'])); ?>
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
		<li><?php echo $html->link(__('New Position', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Substitutions', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Substitution Person Original Position', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Players', true), array('controller'=> 'baseball_defensive_players', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Player', true), array('controller'=> 'baseball_defensive_players', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Core Stats', true), array('controller'=> 'core_stats', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Core Stat', true), array('controller'=> 'core_stats', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Event Action Substitutions', true), array('controller'=> 'event_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event Action Substitution Original', true), array('controller'=> 'event_action_substitutions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Phases', true), array('controller'=> 'person_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Phase', true), array('controller'=> 'person_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Event Metadata', true), array('controller'=> 'person_event_metadata', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Event Metadatum', true), array('controller'=> 'person_event_metadata', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Substitutions', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Substitution Person Original Position', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add')); ?> </li>
	</ul>
</div>
