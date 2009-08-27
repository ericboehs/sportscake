<div class="bookmakers form">
<?php echo $form->create('Bookmaker');?>
	<fieldset>
 		<legend><?php __('Add Bookmaker');?></legend>
	<?php
		echo $form->input('bookmaker_key');
		echo $form->input('publisher_id');
		echo $form->input('location_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Bookmakers', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller'=> 'publishers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller'=> 'publishers', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('controller'=> 'locations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller'=> 'locations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Wagering Moneylines', true), array('controller'=> 'wagering_moneylines', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Wagering Moneyline', true), array('controller'=> 'wagering_moneylines', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Wagering Odds Lines', true), array('controller'=> 'wagering_odds_lines', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Wagering Odds Line', true), array('controller'=> 'wagering_odds_lines', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Wagering Runlines', true), array('controller'=> 'wagering_runlines', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Wagering Runline', true), array('controller'=> 'wagering_runlines', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Wagering Straight Spread Lines', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Wagering Straight Spread Line', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Wagering Total Score Lines', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Wagering Total Score Line', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'add')); ?> </li>
	</ul>
</div>
