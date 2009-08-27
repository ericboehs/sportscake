<div class="positions form">
<?php echo $form->create('Position');?>
	<fieldset>
 		<legend><?php __('Add Position');?></legend>
	<?php
		echo $form->input('affiliation_id');
		echo $form->input('abbreviation');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Positions', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Substitutions', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Substitution Person Original Position', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Players', true), array('controller'=> 'baseball_defensive_players', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Player', true), array('controller'=> 'baseball_defensive_players', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Core Stats', true), array('controller'=> 'core_stats', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Core Stat', true), array('controller'=> 'core_stats', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Event Action Substitutions', true), array('controller'=> 'event_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event Action Substitution Original', true), array('controller'=> 'event_action_substitutions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Phases', true), array('controller'=> 'person_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Phase', true), array('controller'=> 'person_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Event Metadata', true), array('controller'=> 'person_event_metadata', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Event Metadatum', true), array('controller'=> 'person_event_metadata', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Substitutions', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Substitution Person Original Position', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add')); ?> </li>
	</ul>
</div>
