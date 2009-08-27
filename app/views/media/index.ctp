<div class="media index">
<h2><?php __('Media');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('object_id');?></th>
	<th><?php echo $paginator->sort('source_id');?></th>
	<th><?php echo $paginator->sort('revision_id');?></th>
	<th><?php echo $paginator->sort('media_type');?></th>
	<th><?php echo $paginator->sort('publisher_id');?></th>
	<th><?php echo $paginator->sort('date_time');?></th>
	<th><?php echo $paginator->sort('credit_id');?></th>
	<th><?php echo $paginator->sort('db_loading_date_time');?></th>
	<th><?php echo $paginator->sort('creation_location_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($media as $media):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $media['Media']['id']; ?>
		</td>
		<td>
			<?php echo $media['Media']['object_id']; ?>
		</td>
		<td>
			<?php echo $media['Media']['source_id']; ?>
		</td>
		<td>
			<?php echo $media['Media']['revision_id']; ?>
		</td>
		<td>
			<?php echo $media['Media']['media_type']; ?>
		</td>
		<td>
			<?php echo $media['Media']['publisher_id']; ?>
		</td>
		<td>
			<?php echo $media['Media']['date_time']; ?>
		</td>
		<td>
			<?php echo $media['Media']['credit_id']; ?>
		</td>
		<td>
			<?php echo $media['Media']['db_loading_date_time']; ?>
		</td>
		<td>
			<?php echo $media['Media']['creation_location_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $media['Media']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $media['Media']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $media['Media']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $media['Media']['id'])); ?>
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
		<li><?php echo $html->link(__('New Media', true), array('action'=>'add')); ?></li>
	</ul>
</div>
