<div class="personPhases index">
<h2><?php __('PersonPhases');?></h2>
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
	<th><?php echo $paginator->sort('membership_type');?></th>
	<th><?php echo $paginator->sort('membership_id');?></th>
	<th><?php echo $paginator->sort('role_id');?></th>
	<th><?php echo $paginator->sort('role_status');?></th>
	<th><?php echo $paginator->sort('phase_status');?></th>
	<th><?php echo $paginator->sort('uniform_number');?></th>
	<th><?php echo $paginator->sort('regular_position_id');?></th>
	<th><?php echo $paginator->sort('regular_position_depth');?></th>
	<th><?php echo $paginator->sort('height');?></th>
	<th><?php echo $paginator->sort('weight');?></th>
	<th><?php echo $paginator->sort('start_date_time');?></th>
	<th><?php echo $paginator->sort('start_season_id');?></th>
	<th><?php echo $paginator->sort('end_date_time');?></th>
	<th><?php echo $paginator->sort('end_season_id');?></th>
	<th><?php echo $paginator->sort('entry_reason');?></th>
	<th><?php echo $paginator->sort('exit_reason');?></th>
	<th><?php echo $paginator->sort('selection_level');?></th>
	<th><?php echo $paginator->sort('selection_sublevel');?></th>
	<th><?php echo $paginator->sort('selection_overall');?></th>
	<th><?php echo $paginator->sort('duration');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($personPhases as $personPhase):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $personPhase['PersonPhase']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($personPhase['Person']['id'], array('controller'=> 'people', 'action'=>'view', $personPhase['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['membership_type']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['membership_id']; ?>
		</td>
		<td>
			<?php echo $html->link($personPhase['Role']['id'], array('controller'=> 'roles', 'action'=>'view', $personPhase['Role']['id'])); ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['role_status']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['phase_status']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['uniform_number']; ?>
		</td>
		<td>
			<?php echo $html->link($personPhase['RegularPosition']['id'], array('controller'=> 'positions', 'action'=>'view', $personPhase['RegularPosition']['id'])); ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['regular_position_depth']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['height']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['weight']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['start_date_time']; ?>
		</td>
		<td>
			<?php echo $html->link($personPhase['StartSeason']['id'], array('controller'=> 'seasons', 'action'=>'view', $personPhase['StartSeason']['id'])); ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['end_date_time']; ?>
		</td>
		<td>
			<?php echo $html->link($personPhase['EndSeason']['id'], array('controller'=> 'seasons', 'action'=>'view', $personPhase['EndSeason']['id'])); ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['entry_reason']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['exit_reason']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['selection_level']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['selection_sublevel']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['selection_overall']; ?>
		</td>
		<td>
			<?php echo $personPhase['PersonPhase']['duration']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $personPhase['PersonPhase']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $personPhase['PersonPhase']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $personPhase['PersonPhase']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personPhase['PersonPhase']['id'])); ?>
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
		<li><?php echo $html->link(__('New PersonPhase', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Roles', true), array('controller'=> 'roles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Role', true), array('controller'=> 'roles', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Regular Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Start Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
	</ul>
</div>
