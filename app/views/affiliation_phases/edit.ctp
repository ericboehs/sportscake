<div class="affiliationPhases form">
<?php echo $form->create('AffiliationPhase');?>
	<fieldset>
 		<legend><?php __('Edit AffiliationPhase');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('affiliation_id');
		echo $form->input('root_id');
		echo $form->input('ancestor_affiliation_id');
		echo $form->input('start_season_id');
		echo $form->input('start_date_time');
		echo $form->input('end_season_id');
		echo $form->input('end_date_time');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AffiliationPhase.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AffiliationPhase.id'))); ?></li>
		<li><?php echo $html->link(__('List AffiliationPhases', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Start Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
	</ul>
</div>
