<div class="affiliationPhases index">
<h2><?php __('AffiliationPhases');?></h2>
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
	<th><?php echo $paginator->sort('root_id');?></th>
	<th><?php echo $paginator->sort('ancestor_affiliation_id');?></th>
	<th><?php echo $paginator->sort('start_season_id');?></th>
	<th><?php echo $paginator->sort('start_date_time');?></th>
	<th><?php echo $paginator->sort('end_season_id');?></th>
	<th><?php echo $paginator->sort('end_date_time');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($affiliationPhases as $affiliationPhase):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $affiliationPhase['AffiliationPhase']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($affiliationPhase['Affiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $affiliationPhase['Affiliation']['id'])); ?>
		</td>
		<td>
			<?php echo $affiliationPhase['AffiliationPhase']['root_id']; ?>
		</td>
		<td>
			<?php echo $html->link($affiliationPhase['AncestorAffiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $affiliationPhase['AncestorAffiliation']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($affiliationPhase['StartSeason']['id'], array('controller'=> 'seasons', 'action'=>'view', $affiliationPhase['StartSeason']['id'])); ?>
		</td>
		<td>
			<?php echo $affiliationPhase['AffiliationPhase']['start_date_time']; ?>
		</td>
		<td>
			<?php echo $html->link($affiliationPhase['EndSeason']['id'], array('controller'=> 'seasons', 'action'=>'view', $affiliationPhase['EndSeason']['id'])); ?>
		</td>
		<td>
			<?php echo $affiliationPhase['AffiliationPhase']['end_date_time']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $affiliationPhase['AffiliationPhase']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $affiliationPhase['AffiliationPhase']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $affiliationPhase['AffiliationPhase']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliationPhase['AffiliationPhase']['id'])); ?>
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
		<li><?php echo $html->link(__('New AffiliationPhase', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Start Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
	</ul>
</div>
