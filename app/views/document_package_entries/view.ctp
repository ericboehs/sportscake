<div class="documentPackageEntries view">
<h2><?php  __('DocumentPackageEntry');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Document Package Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['document_package_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rank'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['rank']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Document Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['document_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Headline'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['headline']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Short Headline'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['short_headline']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit DocumentPackageEntry', true), array('action'=>'edit', $documentPackageEntry['DocumentPackageEntry']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete DocumentPackageEntry', true), array('action'=>'delete', $documentPackageEntry['DocumentPackageEntry']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentPackageEntry['DocumentPackageEntry']['id'])); ?> </li>
		<li><?php echo $html->link(__('List DocumentPackageEntries', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New DocumentPackageEntry', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
