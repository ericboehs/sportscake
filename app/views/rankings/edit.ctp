<div class="rankings form">
<?php echo $form->create('Ranking');?>
	<fieldset>
 		<legend><?php __('Edit Ranking');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('document_fixture_id');
		echo $form->input('participant_type');
		echo $form->input('participant_id');
		echo $form->input('issuer');
		echo $form->input('ranking_type');
		echo $form->input('ranking_value');
		echo $form->input('ranking_value_previous');
		echo $form->input('date_coverage_type');
		echo $form->input('date_coverage_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Ranking.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Ranking.id'))); ?></li>
		<li><?php echo $html->link(__('List Rankings', true), array('action'=>'index'));?></li>
	</ul>
</div>
