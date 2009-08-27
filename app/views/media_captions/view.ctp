<div class="mediaCaptions view">
<h2><?php  __('MediaCaption');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mediaCaption['MediaCaption']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Media'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($mediaCaption['Media']['id'], array('controller'=> 'media', 'action'=>'view', $mediaCaption['Media']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caption Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mediaCaption['MediaCaption']['caption_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caption'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mediaCaption['MediaCaption']['caption']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caption Author'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($mediaCaption['CaptionAuthor']['id'], array('controller'=> 'people', 'action'=>'view', $mediaCaption['CaptionAuthor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Language'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mediaCaption['MediaCaption']['language']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caption Size'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mediaCaption['MediaCaption']['caption_size']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit MediaCaption', true), array('action'=>'edit', $mediaCaption['MediaCaption']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete MediaCaption', true), array('action'=>'delete', $mediaCaption['MediaCaption']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mediaCaption['MediaCaption']['id'])); ?> </li>
		<li><?php echo $html->link(__('List MediaCaptions', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New MediaCaption', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Caption Author', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Documents Media', true), array('controller'=> 'documents_media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Documents Medium', true), array('controller'=> 'documents_media', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Documents Media');?></h3>
	<?php if (!empty($mediaCaption['DocumentsMedium'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Document Id'); ?></th>
		<th><?php __('Media Id'); ?></th>
		<th><?php __('Media Caption Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($mediaCaption['DocumentsMedium'] as $documentsMedium):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $documentsMedium['id'];?></td>
			<td><?php echo $documentsMedium['document_id'];?></td>
			<td><?php echo $documentsMedium['media_id'];?></td>
			<td><?php echo $documentsMedium['media_caption_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'documents_media', 'action'=>'view', $documentsMedium['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'documents_media', 'action'=>'edit', $documentsMedium['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'documents_media', 'action'=>'delete', $documentsMedium['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentsMedium['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Documents Medium', true), array('controller'=> 'documents_media', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
