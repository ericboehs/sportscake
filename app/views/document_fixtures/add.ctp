<div class="documentFixtures form">
<?php echo $form->create('DocumentFixture');?>
	<fieldset>
 		<legend><?php __('Add DocumentFixture');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List DocumentFixtures', true), array('action'=>'index'));?></li>
	</ul>
</div>
