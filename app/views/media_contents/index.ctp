<div class="mediaContents index">
<h2><?php __('MediaContents');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('media_id');?></th>
	<th><?php echo $paginator->sort('object');?></th>
	<th><?php echo $paginator->sort('format');?></th>
	<th><?php echo $paginator->sort('mime_type');?></th>
	<th><?php echo $paginator->sort('height');?></th>
	<th><?php echo $paginator->sort('width');?></th>
	<th><?php echo $paginator->sort('duration');?></th>
	<th><?php echo $paginator->sort('file_size');?></th>
	<th><?php echo $paginator->sort('resolution');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($mediaContents as $mediaContent):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $mediaContent['MediaContent']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($mediaContent['Media']['id'], array('controller'=> 'media', 'action'=>'view', $mediaContent['Media']['id'])); ?>
		</td>
		<td>
			<?php echo $mediaContent['MediaContent']['object']; ?>
		</td>
		<td>
			<?php echo $mediaContent['MediaContent']['format']; ?>
		</td>
		<td>
			<?php echo $mediaContent['MediaContent']['mime_type']; ?>
		</td>
		<td>
			<?php echo $mediaContent['MediaContent']['height']; ?>
		</td>
		<td>
			<?php echo $mediaContent['MediaContent']['width']; ?>
		</td>
		<td>
			<?php echo $mediaContent['MediaContent']['duration']; ?>
		</td>
		<td>
			<?php echo $mediaContent['MediaContent']['file_size']; ?>
		</td>
		<td>
			<?php echo $mediaContent['MediaContent']['resolution']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $mediaContent['MediaContent']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $mediaContent['MediaContent']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $mediaContent['MediaContent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mediaContent['MediaContent']['id'])); ?>
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
		<li><?php echo $html->link(__('New MediaContent', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
	</ul>
</div>
