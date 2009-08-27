<div class="keyRoots view">
<h2><?php  __('KeyRoot');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $keyRoot['KeyRoot']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Key Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $keyRoot['KeyRoot']['key_type']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit KeyRoot', true), array('action'=>'edit', $keyRoot['KeyRoot']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete KeyRoot', true), array('action'=>'delete', $keyRoot['KeyRoot']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $keyRoot['KeyRoot']['id'])); ?> </li>
		<li><?php echo $html->link(__('List KeyRoots', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New KeyRoot', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
