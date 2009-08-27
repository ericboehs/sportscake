<div class="documentFixturesEvents view">
<h2><?php  __('DocumentFixturesEvent');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentFixturesEvent['DocumentFixturesEvent']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Document Fixture Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentFixturesEvent['DocumentFixturesEvent']['document_fixture_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentFixturesEvent['DocumentFixturesEvent']['event_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Latest Document Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentFixturesEvent['DocumentFixturesEvent']['latest_document_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Update'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentFixturesEvent['DocumentFixturesEvent']['last_update']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit DocumentFixturesEvent', true), array('action'=>'edit', $documentFixturesEvent['DocumentFixturesEvent']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete DocumentFixturesEvent', true), array('action'=>'delete', $documentFixturesEvent['DocumentFixturesEvent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentFixturesEvent['DocumentFixturesEvent']['id'])); ?> </li>
		<li><?php echo $html->link(__('List DocumentFixturesEvents', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New DocumentFixturesEvent', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
