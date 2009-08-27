<div class="documentPackages view">
<h2><?php  __('DocumentPackage');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentPackage['DocumentPackage']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Package Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentPackage['DocumentPackage']['package_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Package Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentPackage['DocumentPackage']['package_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentPackage['DocumentPackage']['date_time']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit DocumentPackage', true), array('action'=>'edit', $documentPackage['DocumentPackage']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete DocumentPackage', true), array('action'=>'delete', $documentPackage['DocumentPackage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentPackage['DocumentPackage']['id'])); ?> </li>
		<li><?php echo $html->link(__('List DocumentPackages', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New DocumentPackage', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
