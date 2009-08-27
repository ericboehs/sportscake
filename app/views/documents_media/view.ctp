<div class="documentsMedia view">
<h2><?php  __('DocumentsMedium');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentsMedium['DocumentsMedium']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Document Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentsMedium['DocumentsMedium']['document_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Media Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentsMedium['DocumentsMedium']['media_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Media Caption Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentsMedium['DocumentsMedium']['media_caption_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit DocumentsMedium', true), array('action'=>'edit', $documentsMedium['DocumentsMedium']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete DocumentsMedium', true), array('action'=>'delete', $documentsMedium['DocumentsMedium']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentsMedium['DocumentsMedium']['id'])); ?> </li>
		<li><?php echo $html->link(__('List DocumentsMedia', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New DocumentsMedium', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
