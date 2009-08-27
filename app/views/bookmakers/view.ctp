<div class="bookmakers view">
<h2><?php  __('Bookmaker');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bookmaker['Bookmaker']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bookmaker Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bookmaker['Bookmaker']['bookmaker_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($bookmaker['Publisher']['id'], array('controller'=> 'publishers', 'action'=>'view', $bookmaker['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($bookmaker['Location']['id'], array('controller'=> 'locations', 'action'=>'view', $bookmaker['Location']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Bookmaker', true), array('action'=>'edit', $bookmaker['Bookmaker']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Bookmaker', true), array('action'=>'delete', $bookmaker['Bookmaker']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bookmaker['Bookmaker']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Bookmakers', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Bookmaker', true), array('action'=>'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Wagering Moneylines');?></h3>
	<?php if (!empty($bookmaker['WageringMoneyline'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Rotation Key'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Vigorish'); ?></th>
		<th><?php __('Line'); ?></th>
		<th><?php __('Line Opening'); ?></th>
		<th><?php __('Prediction'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bookmaker['WageringMoneyline'] as $wageringMoneyline):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wageringMoneyline['id'];?></td>
			<td><?php echo $wageringMoneyline['bookmaker_id'];?></td>
			<td><?php echo $wageringMoneyline['event_id'];?></td>
			<td><?php echo $wageringMoneyline['date_time'];?></td>
			<td><?php echo $wageringMoneyline['team_id'];?></td>
			<td><?php echo $wageringMoneyline['person_id'];?></td>
			<td><?php echo $wageringMoneyline['rotation_key'];?></td>
			<td><?php echo $wageringMoneyline['comment'];?></td>
			<td><?php echo $wageringMoneyline['vigorish'];?></td>
			<td><?php echo $wageringMoneyline['line'];?></td>
			<td><?php echo $wageringMoneyline['line_opening'];?></td>
			<td><?php echo $wageringMoneyline['prediction'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'wagering_moneylines', 'action'=>'view', $wageringMoneyline['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'wagering_moneylines', 'action'=>'edit', $wageringMoneyline['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'wagering_moneylines', 'action'=>'delete', $wageringMoneyline['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringMoneyline['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wagering Moneyline', true), array('controller'=> 'wagering_moneylines', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wagering Odds Lines');?></h3>
	<?php if (!empty($bookmaker['WageringOddsLine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Rotation Key'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Numerator'); ?></th>
		<th><?php __('Denominator'); ?></th>
		<th><?php __('Prediction'); ?></th>
		<th><?php __('Payout Calculation'); ?></th>
		<th><?php __('Payout Amount'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bookmaker['WageringOddsLine'] as $wageringOddsLine):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wageringOddsLine['id'];?></td>
			<td><?php echo $wageringOddsLine['bookmaker_id'];?></td>
			<td><?php echo $wageringOddsLine['event_id'];?></td>
			<td><?php echo $wageringOddsLine['date_time'];?></td>
			<td><?php echo $wageringOddsLine['team_id'];?></td>
			<td><?php echo $wageringOddsLine['person_id'];?></td>
			<td><?php echo $wageringOddsLine['rotation_key'];?></td>
			<td><?php echo $wageringOddsLine['comment'];?></td>
			<td><?php echo $wageringOddsLine['numerator'];?></td>
			<td><?php echo $wageringOddsLine['denominator'];?></td>
			<td><?php echo $wageringOddsLine['prediction'];?></td>
			<td><?php echo $wageringOddsLine['payout_calculation'];?></td>
			<td><?php echo $wageringOddsLine['payout_amount'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'wagering_odds_lines', 'action'=>'view', $wageringOddsLine['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'wagering_odds_lines', 'action'=>'edit', $wageringOddsLine['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'wagering_odds_lines', 'action'=>'delete', $wageringOddsLine['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringOddsLine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wagering Odds Line', true), array('controller'=> 'wagering_odds_lines', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wagering Runlines');?></h3>
	<?php if (!empty($bookmaker['WageringRunline'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Rotation Key'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Vigorish'); ?></th>
		<th><?php __('Line'); ?></th>
		<th><?php __('Line Opening'); ?></th>
		<th><?php __('Line Value'); ?></th>
		<th><?php __('Prediction'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bookmaker['WageringRunline'] as $wageringRunline):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wageringRunline['id'];?></td>
			<td><?php echo $wageringRunline['bookmaker_id'];?></td>
			<td><?php echo $wageringRunline['event_id'];?></td>
			<td><?php echo $wageringRunline['date_time'];?></td>
			<td><?php echo $wageringRunline['team_id'];?></td>
			<td><?php echo $wageringRunline['person_id'];?></td>
			<td><?php echo $wageringRunline['rotation_key'];?></td>
			<td><?php echo $wageringRunline['comment'];?></td>
			<td><?php echo $wageringRunline['vigorish'];?></td>
			<td><?php echo $wageringRunline['line'];?></td>
			<td><?php echo $wageringRunline['line_opening'];?></td>
			<td><?php echo $wageringRunline['line_value'];?></td>
			<td><?php echo $wageringRunline['prediction'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'wagering_runlines', 'action'=>'view', $wageringRunline['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'wagering_runlines', 'action'=>'edit', $wageringRunline['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'wagering_runlines', 'action'=>'delete', $wageringRunline['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringRunline['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wagering Runline', true), array('controller'=> 'wagering_runlines', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wagering Straight Spread Lines');?></h3>
	<?php if (!empty($bookmaker['WageringStraightSpreadLine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Rotation Key'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Vigorish'); ?></th>
		<th><?php __('Line Value'); ?></th>
		<th><?php __('Line Value Opening'); ?></th>
		<th><?php __('Prediction'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bookmaker['WageringStraightSpreadLine'] as $wageringStraightSpreadLine):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wageringStraightSpreadLine['id'];?></td>
			<td><?php echo $wageringStraightSpreadLine['bookmaker_id'];?></td>
			<td><?php echo $wageringStraightSpreadLine['event_id'];?></td>
			<td><?php echo $wageringStraightSpreadLine['date_time'];?></td>
			<td><?php echo $wageringStraightSpreadLine['team_id'];?></td>
			<td><?php echo $wageringStraightSpreadLine['person_id'];?></td>
			<td><?php echo $wageringStraightSpreadLine['rotation_key'];?></td>
			<td><?php echo $wageringStraightSpreadLine['comment'];?></td>
			<td><?php echo $wageringStraightSpreadLine['vigorish'];?></td>
			<td><?php echo $wageringStraightSpreadLine['line_value'];?></td>
			<td><?php echo $wageringStraightSpreadLine['line_value_opening'];?></td>
			<td><?php echo $wageringStraightSpreadLine['prediction'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'view', $wageringStraightSpreadLine['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'edit', $wageringStraightSpreadLine['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'delete', $wageringStraightSpreadLine['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringStraightSpreadLine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wagering Straight Spread Line', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wagering Total Score Lines');?></h3>
	<?php if (!empty($bookmaker['WageringTotalScoreLine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Rotation Key'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Vigorish'); ?></th>
		<th><?php __('Line Over'); ?></th>
		<th><?php __('Line Under'); ?></th>
		<th><?php __('Total'); ?></th>
		<th><?php __('Total Opening'); ?></th>
		<th><?php __('Prediction'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bookmaker['WageringTotalScoreLine'] as $wageringTotalScoreLine):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wageringTotalScoreLine['id'];?></td>
			<td><?php echo $wageringTotalScoreLine['bookmaker_id'];?></td>
			<td><?php echo $wageringTotalScoreLine['event_id'];?></td>
			<td><?php echo $wageringTotalScoreLine['date_time'];?></td>
			<td><?php echo $wageringTotalScoreLine['team_id'];?></td>
			<td><?php echo $wageringTotalScoreLine['person_id'];?></td>
			<td><?php echo $wageringTotalScoreLine['rotation_key'];?></td>
			<td><?php echo $wageringTotalScoreLine['comment'];?></td>
			<td><?php echo $wageringTotalScoreLine['vigorish'];?></td>
			<td><?php echo $wageringTotalScoreLine['line_over'];?></td>
			<td><?php echo $wageringTotalScoreLine['line_under'];?></td>
			<td><?php echo $wageringTotalScoreLine['total'];?></td>
			<td><?php echo $wageringTotalScoreLine['total_opening'];?></td>
			<td><?php echo $wageringTotalScoreLine['prediction'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'view', $wageringTotalScoreLine['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'edit', $wageringTotalScoreLine['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'delete', $wageringTotalScoreLine['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringTotalScoreLine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wagering Total Score Line', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
