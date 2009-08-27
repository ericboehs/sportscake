<div class="keyAliases view">
<h2><?php  __('KeyAlias');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $keyAlias['KeyAlias']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Key Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $keyAlias['KeyAlias']['key_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Key Root Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $keyAlias['KeyAlias']['key_root_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit KeyAlias', true), array('action'=>'edit', $keyAlias['KeyAlias']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete KeyAlias', true), array('action'=>'delete', $keyAlias['KeyAlias']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $keyAlias['KeyAlias']['id'])); ?> </li>
		<li><?php echo $html->link(__('List KeyAliases', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New KeyAlias', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
