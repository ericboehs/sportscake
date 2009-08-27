<div class="personsMedia view">
<h2><?php  __('PersonsMedium');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personsMedium['PersonsMedium']['person_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Media Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personsMedium['PersonsMedium']['media_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit PersonsMedium', true), array('action'=>'edit', $personsMedium['PersonsMedium']['person_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete PersonsMedium', true), array('action'=>'delete', $personsMedium['PersonsMedium']['person_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personsMedium['PersonsMedium']['person_id'])); ?> </li>
		<li><?php echo $html->link(__('List PersonsMedia', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New PersonsMedium', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
