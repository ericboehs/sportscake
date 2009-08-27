<div class="affiliationsEvents form">
<?php echo $form->create('AffiliationsEvent');?>
	<fieldset>
 		<legend><?php __('Edit AffiliationsEvent');?></legend>
	<?php
		echo $form->input('affiliation_id');
		echo $form->input('event_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AffiliationsEvent.affiliation_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AffiliationsEvent.affiliation_id'))); ?></li>
		<li><?php echo $html->link(__('List AffiliationsEvents', true), array('action'=>'index'));?></li>
	</ul>
</div>
