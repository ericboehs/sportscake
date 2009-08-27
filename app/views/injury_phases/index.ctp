<div class="injuryPhases index">
<h2><?php __('InjuryPhases');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('person_id');?></th>
	<th><?php echo $paginator->sort('injury_status');?></th>
	<th><?php echo $paginator->sort('injury_type');?></th>
	<th><?php echo $paginator->sort('injury_comment');?></th>
	<th><?php echo $paginator->sort('disabled_list');?></th>
	<th><?php echo $paginator->sort('start_date_time');?></th>
	<th><?php echo $paginator->sort('end_date_time');?></th>
	<th><?php echo $paginator->sort('season_id');?></th>
	<th><?php echo $paginator->sort('phase_type');?></th>
	<th><?php echo $paginator->sort('injury_side');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($injuryPhases as $injuryPhase):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['id']; ?>
		</td>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['person_id']; ?>
		</td>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['injury_status']; ?>
		</td>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['injury_type']; ?>
		</td>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['injury_comment']; ?>
		</td>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['disabled_list']; ?>
		</td>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['start_date_time']; ?>
		</td>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['end_date_time']; ?>
		</td>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['season_id']; ?>
		</td>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['phase_type']; ?>
		</td>
		<td>
			<?php echo $injuryPhase['InjuryPhase']['injury_side']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $injuryPhase['InjuryPhase']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $injuryPhase['InjuryPhase']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $injuryPhase['InjuryPhase']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $injuryPhase['InjuryPhase']['id'])); ?>
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
		<li><?php echo $html->link(__('New InjuryPhase', true), array('action'=>'add')); ?></li>
	</ul>
</div>
