<div class="mediaCaptions index">
<h2><?php __('MediaCaptions');?></h2>
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
	<th><?php echo $paginator->sort('caption_type');?></th>
	<th><?php echo $paginator->sort('caption');?></th>
	<th><?php echo $paginator->sort('caption_author_id');?></th>
	<th><?php echo $paginator->sort('language');?></th>
	<th><?php echo $paginator->sort('caption_size');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($mediaCaptions as $mediaCaption):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $mediaCaption['MediaCaption']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($mediaCaption['Media']['id'], array('controller'=> 'media', 'action'=>'view', $mediaCaption['Media']['id'])); ?>
		</td>
		<td>
			<?php echo $mediaCaption['MediaCaption']['caption_type']; ?>
		</td>
		<td>
			<?php echo $mediaCaption['MediaCaption']['caption']; ?>
		</td>
		<td>
			<?php echo $html->link($mediaCaption['CaptionAuthor']['id'], array('controller'=> 'people', 'action'=>'view', $mediaCaption['CaptionAuthor']['id'])); ?>
		</td>
		<td>
			<?php echo $mediaCaption['MediaCaption']['language']; ?>
		</td>
		<td>
			<?php echo $mediaCaption['MediaCaption']['caption_size']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $mediaCaption['MediaCaption']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $mediaCaption['MediaCaption']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $mediaCaption['MediaCaption']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mediaCaption['MediaCaption']['id'])); ?>
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
		<li><?php echo $html->link(__('New MediaCaption', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Caption Author', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Documents Media', true), array('controller'=> 'documents_media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Documents Medium', true), array('controller'=> 'documents_media', 'action'=>'add')); ?> </li>
	</ul>
</div>
