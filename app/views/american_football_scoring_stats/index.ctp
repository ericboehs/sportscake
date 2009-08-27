<div class="americanFootballScoringStats index">
<h2><?php __('AmericanFootballScoringStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('touchdowns_total');?></th>
	<th><?php echo $paginator->sort('touchdowns_passing');?></th>
	<th><?php echo $paginator->sort('touchdowns_rushing');?></th>
	<th><?php echo $paginator->sort('touchdowns_special_teams');?></th>
	<th><?php echo $paginator->sort('touchdowns_defensive');?></th>
	<th><?php echo $paginator->sort('extra_points_attempts');?></th>
	<th><?php echo $paginator->sort('extra_points_made');?></th>
	<th><?php echo $paginator->sort('extra_points_missed');?></th>
	<th><?php echo $paginator->sort('extra_points_blocked');?></th>
	<th><?php echo $paginator->sort('field_goal_attempts');?></th>
	<th><?php echo $paginator->sort('field_goals_made');?></th>
	<th><?php echo $paginator->sort('field_goals_missed');?></th>
	<th><?php echo $paginator->sort('field_goals_blocked');?></th>
	<th><?php echo $paginator->sort('safeties_against');?></th>
	<th><?php echo $paginator->sort('two_point_conversions_attempts');?></th>
	<th><?php echo $paginator->sort('two_point_conversions_made');?></th>
	<th><?php echo $paginator->sort('touchbacks_total');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballScoringStats as $americanFootballScoringStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['id']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchdowns_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchdowns_passing']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchdowns_rushing']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchdowns_special_teams']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchdowns_defensive']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['extra_points_attempts']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['extra_points_made']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['extra_points_missed']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['extra_points_blocked']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['field_goal_attempts']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['field_goals_made']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['field_goals_missed']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['field_goals_blocked']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['safeties_against']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['two_point_conversions_attempts']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['two_point_conversions_made']; ?>
		</td>
		<td>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchbacks_total']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballScoringStat['AmericanFootballScoringStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballScoringStat['AmericanFootballScoringStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballScoringStat['AmericanFootballScoringStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballScoringStat['AmericanFootballScoringStat']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New AmericanFootballScoringStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
