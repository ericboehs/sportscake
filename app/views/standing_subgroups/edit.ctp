<div class="standingSubgroups form">
<?php echo $form->create('StandingSubgroup');?>
	<fieldset>
 		<legend><?php __('Edit StandingSubgroup');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('standing_id');
		echo $form->input('affiliation_id');
		echo $form->input('alignment_scope');
		echo $form->input('competition_scope');
		echo $form->input('competition_scope_id');
		echo $form->input('duration_scope');
		echo $form->input('scoping_label');
		echo $form->input('site_scope');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('StandingSubgroup.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('StandingSubgroup.id'))); ?></li>
		<li><?php echo $html->link(__('List StandingSubgroups', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Standings', true), array('controller'=> 'standings', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing', true), array('controller'=> 'standings', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Outcome Totals', true), array('controller'=> 'outcome_totals', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Outcome Total', true), array('controller'=> 'outcome_totals', 'action'=>'add')); ?> </li>
	</ul>
</div>
