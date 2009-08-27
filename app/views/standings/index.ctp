<div class="standings index">
<h2><?php __('Standings');?></h2>
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
	<th><?php echo $paginator->sort('standing_type');?></th>
	<th><?php echo $paginator->sort('sub_season_id');?></th>
	<th><?php echo $paginator->sort('last_updated');?></th>
	<th><?php echo $paginator->sort('source');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($standings as $standing):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $standing['Standing']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($standing['Affiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $standing['Affiliation']['id'])); ?>
		</td>
		<td>
			<?php echo $standing['Standing']['standing_type']; ?>
		</td>
		<td>
			<?php echo $html->link($standing['SubSeason']['id'], array('controller'=> 'sub_seasons', 'action'=>'view', $standing['SubSeason']['id'])); ?>
		</td>
		<td>
			<?php echo $standing['Standing']['last_updated']; ?>
		</td>
		<td>
			<?php echo $standing['Standing']['source']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $standing['Standing']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $standing['Standing']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $standing['Standing']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $standing['Standing']['id'])); ?>
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
		<li><?php echo $html->link(__('New Standing', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Sub Seasons', true), array('controller'=> 'sub_seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Sub Season', true), array('controller'=> 'sub_seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Standing Subgroups', true), array('controller'=> 'standing_subgroups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing Subgroup', true), array('controller'=> 'standing_subgroups', 'action'=>'add')); ?> </li>
	</ul>
</div>
