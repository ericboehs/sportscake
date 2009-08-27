<div class="stats index">
<h2><?php __('Stats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('stat_repository_type');?></th>
	<th><?php echo $paginator->sort('stat_repository_id');?></th>
	<th><?php echo $paginator->sort('stat_holder_type');?></th>
	<th><?php echo $paginator->sort('stat_holder_id');?></th>
	<th><?php echo $paginator->sort('stat_coverage_type');?></th>
	<th><?php echo $paginator->sort('stat_coverage_id');?></th>
	<th><?php echo $paginator->sort('stat_membership_type');?></th>
	<th><?php echo $paginator->sort('stat_membership_id');?></th>
	<th><?php echo $paginator->sort('context');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($stats as $stat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $stat['Stat']['id']; ?>
		</td>
		<td>
			<?php echo $stat['Stat']['stat_repository_type']; ?>
		</td>
		<td>
			<?php echo $stat['Stat']['stat_repository_id']; ?>
		</td>
		<td>
			<?php echo $stat['Stat']['stat_holder_type']; ?>
		</td>
		<td>
			<?php echo $stat['Stat']['stat_holder_id']; ?>
		</td>
		<td>
			<?php echo $stat['Stat']['stat_coverage_type']; ?>
		</td>
		<td>
			<?php echo $stat['Stat']['stat_coverage_id']; ?>
		</td>
		<td>
			<?php echo $stat['Stat']['stat_membership_type']; ?>
		</td>
		<td>
			<?php echo $stat['Stat']['stat_membership_id']; ?>
		</td>
		<td>
			<?php echo $stat['Stat']['context']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $stat['Stat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $stat['Stat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $stat['Stat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $stat['Stat']['id'])); ?>
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
		<li><?php echo $html->link(__('New Stat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
