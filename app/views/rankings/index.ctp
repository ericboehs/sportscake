<div class="rankings index">
<h2><?php __('Rankings');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('document_fixture_id');?></th>
	<th><?php echo $paginator->sort('participant_type');?></th>
	<th><?php echo $paginator->sort('participant_id');?></th>
	<th><?php echo $paginator->sort('issuer');?></th>
	<th><?php echo $paginator->sort('ranking_type');?></th>
	<th><?php echo $paginator->sort('ranking_value');?></th>
	<th><?php echo $paginator->sort('ranking_value_previous');?></th>
	<th><?php echo $paginator->sort('date_coverage_type');?></th>
	<th><?php echo $paginator->sort('date_coverage_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($rankings as $ranking):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ranking['Ranking']['id']; ?>
		</td>
		<td>
			<?php echo $ranking['Ranking']['document_fixture_id']; ?>
		</td>
		<td>
			<?php echo $ranking['Ranking']['participant_type']; ?>
		</td>
		<td>
			<?php echo $ranking['Ranking']['participant_id']; ?>
		</td>
		<td>
			<?php echo $ranking['Ranking']['issuer']; ?>
		</td>
		<td>
			<?php echo $ranking['Ranking']['ranking_type']; ?>
		</td>
		<td>
			<?php echo $ranking['Ranking']['ranking_value']; ?>
		</td>
		<td>
			<?php echo $ranking['Ranking']['ranking_value_previous']; ?>
		</td>
		<td>
			<?php echo $ranking['Ranking']['date_coverage_type']; ?>
		</td>
		<td>
			<?php echo $ranking['Ranking']['date_coverage_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $ranking['Ranking']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $ranking['Ranking']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $ranking['Ranking']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ranking['Ranking']['id'])); ?>
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
		<li><?php echo $html->link(__('New Ranking', true), array('action'=>'add')); ?></li>
	</ul>
</div>
