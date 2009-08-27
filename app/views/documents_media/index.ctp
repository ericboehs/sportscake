<div class="documentsMedia index">
<h2><?php __('DocumentsMedia');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('document_id');?></th>
	<th><?php echo $paginator->sort('media_id');?></th>
	<th><?php echo $paginator->sort('media_caption_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($documentsMedia as $documentsMedium):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $documentsMedium['DocumentsMedium']['id']; ?>
		</td>
		<td>
			<?php echo $documentsMedium['DocumentsMedium']['document_id']; ?>
		</td>
		<td>
			<?php echo $documentsMedium['DocumentsMedium']['media_id']; ?>
		</td>
		<td>
			<?php echo $documentsMedium['DocumentsMedium']['media_caption_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $documentsMedium['DocumentsMedium']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $documentsMedium['DocumentsMedium']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $documentsMedium['DocumentsMedium']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentsMedium['DocumentsMedium']['id'])); ?>
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
		<li><?php echo $html->link(__('New DocumentsMedium', true), array('action'=>'add')); ?></li>
	</ul>
</div>
