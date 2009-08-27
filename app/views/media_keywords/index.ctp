<div class="mediaKeywords index">
<h2><?php __('MediaKeywords');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('keyword');?></th>
	<th><?php echo $paginator->sort('media_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($mediaKeywords as $mediaKeyword):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $mediaKeyword['MediaKeyword']['id']; ?>
		</td>
		<td>
			<?php echo $mediaKeyword['MediaKeyword']['keyword']; ?>
		</td>
		<td>
			<?php echo $html->link($mediaKeyword['Media']['id'], array('controller'=> 'media', 'action'=>'view', $mediaKeyword['Media']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $mediaKeyword['MediaKeyword']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $mediaKeyword['MediaKeyword']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $mediaKeyword['MediaKeyword']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mediaKeyword['MediaKeyword']['id'])); ?>
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
		<li><?php echo $html->link(__('New MediaKeyword', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
	</ul>
</div>
