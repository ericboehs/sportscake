<div class="personsDocuments view">
<h2><?php  __('PersonsDocument');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personsDocument['PersonsDocument']['person_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Document Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personsDocument['PersonsDocument']['document_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit PersonsDocument', true), array('action'=>'edit', $personsDocument['PersonsDocument']['person_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete PersonsDocument', true), array('action'=>'delete', $personsDocument['PersonsDocument']['person_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personsDocument['PersonsDocument']['person_id'])); ?> </li>
		<li><?php echo $html->link(__('List PersonsDocuments', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New PersonsDocument', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
