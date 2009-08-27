<div class="documentContents view">
<h2><?php  __('DocumentContent');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentContent['DocumentContent']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Document Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentContent['DocumentContent']['document_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sportsml'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentContent['DocumentContent']['sportsml']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sportsml Blob'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentContent['DocumentContent']['sportsml_blob']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Abstract'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentContent['DocumentContent']['abstract']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Abstract Blob'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentContent['DocumentContent']['abstract_blob']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit DocumentContent', true), array('action'=>'edit', $documentContent['DocumentContent']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete DocumentContent', true), array('action'=>'delete', $documentContent['DocumentContent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentContent['DocumentContent']['id'])); ?> </li>
		<li><?php echo $html->link(__('List DocumentContents', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New DocumentContent', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
