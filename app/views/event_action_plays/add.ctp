<div class="eventActionPlays form">
<?php echo $form->create('EventActionPlay');?>
	<fieldset>
 		<legend><?php __('Add EventActionPlay');?></legend>
	<?php
		echo $form->input('event_state_id');
		echo $form->input('play_type');
		echo $form->input('score_attempt_type');
		echo $form->input('play_result');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List EventActionPlays', true), array('action'=>'index'));?></li>
	</ul>
</div>
