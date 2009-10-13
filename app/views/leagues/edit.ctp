<div class="leagues form">
<?php echo $form->create('League');?>
	<fieldset>
 		<legend><?php __('Edit League');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('league_key');
		echo $form->input('sport_id');
		echo $form->input('name');
		echo $form->input('nickname');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('League.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('League.id'))); ?></li>
		<li><?php echo $html->link(__('List Leagues', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Sports', true), array('controller' => 'sports', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Sport', true), array('controller' => 'sports', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Conferences', true), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Conference', true), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller' => 'seasons', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Season', true), array('controller' => 'seasons', 'action' => 'add')); ?> </li>
	</ul>
</div>
