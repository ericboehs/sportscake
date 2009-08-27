<div class="standings form">
<?php echo $form->create('Standing');?>
	<fieldset>
 		<legend><?php __('Edit Standing');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('affiliation_id');
		echo $form->input('standing_type');
		echo $form->input('sub_season_id');
		echo $form->input('last_updated');
		echo $form->input('source');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Standing.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Standing.id'))); ?></li>
		<li><?php echo $html->link(__('List Standings', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Sub Seasons', true), array('controller'=> 'sub_seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Sub Season', true), array('controller'=> 'sub_seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Standing Subgroups', true), array('controller'=> 'standing_subgroups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing Subgroup', true), array('controller'=> 'standing_subgroups', 'action'=>'add')); ?> </li>
	</ul>
</div>
