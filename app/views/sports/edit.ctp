<div class="sports form">
<?php echo $form->create('Sport');?>
	<fieldset>
 		<legend><?php __('Edit Sport');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('sport_key');
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Sport.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Sport.id'))); ?></li>
		<li><?php echo $html->link(__('List Sports', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Leagues', true), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
