<div class="addresses form">
<?php echo $form->create('Address');?>
	<fieldset>
 		<legend><?php __('Edit Address');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('location_id');
		echo $form->input('language');
		echo $form->input('suite');
		echo $form->input('floor');
		echo $form->input('building');
		echo $form->input('street_number');
		echo $form->input('street_prefix');
		echo $form->input('street');
		echo $form->input('street_suffix');
		echo $form->input('neighborhood');
		echo $form->input('district');
		echo $form->input('locality');
		echo $form->input('county');
		echo $form->input('region');
		echo $form->input('postal_code');
		echo $form->input('country');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Address.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Address.id'))); ?></li>
		<li><?php echo $html->link(__('List Addresses', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Locations', true), array('controller'=> 'locations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller'=> 'locations', 'action'=>'add')); ?> </li>
	</ul>
</div>
