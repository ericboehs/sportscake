<div class="affiliationsEvents form">
<?php echo $form->create('AffiliationsEvent');?>
	<fieldset>
 		<legend><?php __('Add AffiliationsEvent');?></legend>
	<?php
		echo $form->input('event_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List AffiliationsEvents', true), array('action'=>'index'));?></li>
	</ul>
</div>
