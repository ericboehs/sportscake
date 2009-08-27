<div class="addresses form">
<?php echo $form->create('Address');?>
	<fieldset>
 		<legend><?php __('Add Address');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List Addresses', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Locations', true), array('controller'=> 'locations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller'=> 'locations', 'action'=>'add')); ?> </li>
	</ul>
</div>
