<div class="mediaKeywords view">
<h2><?php  __('MediaKeyword');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mediaKeyword['MediaKeyword']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Keyword'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mediaKeyword['MediaKeyword']['keyword']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Media'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($mediaKeyword['Media']['id'], array('controller'=> 'media', 'action'=>'view', $mediaKeyword['Media']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit MediaKeyword', true), array('action'=>'edit', $mediaKeyword['MediaKeyword']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete MediaKeyword', true), array('action'=>'delete', $mediaKeyword['MediaKeyword']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mediaKeyword['MediaKeyword']['id'])); ?> </li>
		<li><?php echo $html->link(__('List MediaKeywords', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New MediaKeyword', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
	</ul>
</div>
