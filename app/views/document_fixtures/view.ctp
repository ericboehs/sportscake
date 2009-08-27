<div class="documentFixtures view">
<h2><?php  __('DocumentFixture');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentFixture['DocumentFixture']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fixture Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentFixture['DocumentFixture']['fixture_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentFixture['DocumentFixture']['publisher_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentFixture['DocumentFixture']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Document Class Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentFixture['DocumentFixture']['document_class_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit DocumentFixture', true), array('action'=>'edit', $documentFixture['DocumentFixture']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete DocumentFixture', true), array('action'=>'delete', $documentFixture['DocumentFixture']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentFixture['DocumentFixture']['id'])); ?> </li>
		<li><?php echo $html->link(__('List DocumentFixtures', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New DocumentFixture', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
