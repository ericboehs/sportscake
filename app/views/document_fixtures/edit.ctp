<div class="documentFixtures form">
<?php echo $form->create('DocumentFixture');?>
	<fieldset>
 		<legend><?php __('Edit DocumentFixture');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('fixture_key');
		echo $form->input('publisher_id');
		echo $form->input('name');
		echo $form->input('document_class_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('DocumentFixture.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('DocumentFixture.id'))); ?></li>
		<li><?php echo $html->link(__('List DocumentFixtures', true), array('action'=>'index'));?></li>
	</ul>
</div>
