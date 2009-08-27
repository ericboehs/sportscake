<div class="documentClasses view">
<h2><?php  __('DocumentClass');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentClass['DocumentClass']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentClass['DocumentClass']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit DocumentClass', true), array('action'=>'edit', $documentClass['DocumentClass']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete DocumentClass', true), array('action'=>'delete', $documentClass['DocumentClass']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentClass['DocumentClass']['id'])); ?> </li>
		<li><?php echo $html->link(__('List DocumentClasses', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New DocumentClass', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
