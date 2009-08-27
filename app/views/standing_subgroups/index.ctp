<div class="standingSubgroups index">
<h2><?php __('StandingSubgroups');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('standing_id');?></th>
	<th><?php echo $paginator->sort('affiliation_id');?></th>
	<th><?php echo $paginator->sort('alignment_scope');?></th>
	<th><?php echo $paginator->sort('competition_scope');?></th>
	<th><?php echo $paginator->sort('competition_scope_id');?></th>
	<th><?php echo $paginator->sort('duration_scope');?></th>
	<th><?php echo $paginator->sort('scoping_label');?></th>
	<th><?php echo $paginator->sort('site_scope');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($standingSubgroups as $standingSubgroup):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $standingSubgroup['StandingSubgroup']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($standingSubgroup['Standing']['id'], array('controller'=> 'standings', 'action'=>'view', $standingSubgroup['Standing']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($standingSubgroup['Affiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $standingSubgroup['Affiliation']['id'])); ?>
		</td>
		<td>
			<?php echo $standingSubgroup['StandingSubgroup']['alignment_scope']; ?>
		</td>
		<td>
			<?php echo $standingSubgroup['StandingSubgroup']['competition_scope']; ?>
		</td>
		<td>
			<?php echo $standingSubgroup['StandingSubgroup']['competition_scope_id']; ?>
		</td>
		<td>
			<?php echo $standingSubgroup['StandingSubgroup']['duration_scope']; ?>
		</td>
		<td>
			<?php echo $standingSubgroup['StandingSubgroup']['scoping_label']; ?>
		</td>
		<td>
			<?php echo $standingSubgroup['StandingSubgroup']['site_scope']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $standingSubgroup['StandingSubgroup']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $standingSubgroup['StandingSubgroup']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $standingSubgroup['StandingSubgroup']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $standingSubgroup['StandingSubgroup']['id'])); ?>
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
		<li><?php echo $html->link(__('New StandingSubgroup', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Standings', true), array('controller'=> 'standings', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing', true), array('controller'=> 'standings', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Outcome Totals', true), array('controller'=> 'outcome_totals', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Outcome Total', true), array('controller'=> 'outcome_totals', 'action'=>'add')); ?> </li>
	</ul>
</div>
