<div class="penaltyStats form">
<?php echo $form->create('PenaltyStat');?>
	<fieldset>
 		<legend><?php __('Add PenaltyStat');?></legend>
	<?php
		echo $form->input('count');
		echo $form->input('type');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List PenaltyStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
