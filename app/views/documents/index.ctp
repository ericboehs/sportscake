<div class="documents index">
<h2><?php __('Documents');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('doc_id');?></th>
	<th><?php echo $paginator->sort('publisher_id');?></th>
	<th><?php echo $paginator->sort('date_time');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('language');?></th>
	<th><?php echo $paginator->sort('priority');?></th>
	<th><?php echo $paginator->sort('revision_id');?></th>
	<th><?php echo $paginator->sort('stats_coverage');?></th>
	<th><?php echo $paginator->sort('document_fixture_id');?></th>
	<th><?php echo $paginator->sort('source_id');?></th>
	<th><?php echo $paginator->sort('db_loading_date_time');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($documents as $document):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $document['Document']['id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['doc_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['publisher_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['date_time']; ?>
		</td>
		<td>
			<?php echo $document['Document']['title']; ?>
		</td>
		<td>
			<?php echo $document['Document']['language']; ?>
		</td>
		<td>
			<?php echo $document['Document']['priority']; ?>
		</td>
		<td>
			<?php echo $document['Document']['revision_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['stats_coverage']; ?>
		</td>
		<td>
			<?php echo $document['Document']['document_fixture_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['source_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['db_loading_date_time']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $document['Document']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $document['Document']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $document['Document']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $document['Document']['id'])); ?>
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
		<li><?php echo $html->link(__('New Document', true), array('action'=>'add')); ?></li>
	</ul>
</div>
