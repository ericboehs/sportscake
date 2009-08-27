<div class="teamPhases index">
<h2><?php __('TeamPhases');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('team_id');?></th>
	<th><?php echo $paginator->sort('start_season_id');?></th>
	<th><?php echo $paginator->sort('end_season_id');?></th>
	<th><?php echo $paginator->sort('affiliation_id');?></th>
	<th><?php echo $paginator->sort('start_date_time');?></th>
	<th><?php echo $paginator->sort('end_date_time');?></th>
	<th><?php echo $paginator->sort('phase_status');?></th>
	<th><?php echo $paginator->sort('role_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($teamPhases as $teamPhase):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $teamPhase['TeamPhase']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($teamPhase['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $teamPhase['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($teamPhase['StartSeason']['id'], array('controller'=> 'seasons', 'action'=>'view', $teamPhase['StartSeason']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($teamPhase['EndSeason']['id'], array('controller'=> 'seasons', 'action'=>'view', $teamPhase['EndSeason']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($teamPhase['Affiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $teamPhase['Affiliation']['id'])); ?>
		</td>
		<td>
			<?php echo $teamPhase['TeamPhase']['start_date_time']; ?>
		</td>
		<td>
			<?php echo $teamPhase['TeamPhase']['end_date_time']; ?>
		</td>
		<td>
			<?php echo $teamPhase['TeamPhase']['phase_status']; ?>
		</td>
		<td>
			<?php echo $html->link($teamPhase['Role']['id'], array('controller'=> 'roles', 'action'=>'view', $teamPhase['Role']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $teamPhase['TeamPhase']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $teamPhase['TeamPhase']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $teamPhase['TeamPhase']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teamPhase['TeamPhase']['id'])); ?>
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
		<li><?php echo $html->link(__('New TeamPhase', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Start Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Roles', true), array('controller'=> 'roles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Role', true), array('controller'=> 'roles', 'action'=>'add')); ?> </li>
	</ul>
</div>
