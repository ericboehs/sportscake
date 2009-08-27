<div class="americanFootballSpecialTeamsStats index">
<h2><?php __('AmericanFootballSpecialTeamsStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('returns_punt_total');?></th>
	<th><?php echo $paginator->sort('returns_punt_yards');?></th>
	<th><?php echo $paginator->sort('returns_punt_average');?></th>
	<th><?php echo $paginator->sort('returns_punt_longest');?></th>
	<th><?php echo $paginator->sort('returns_punt_touchdown');?></th>
	<th><?php echo $paginator->sort('returns_kickoff_total');?></th>
	<th><?php echo $paginator->sort('returns_kickoff_yards');?></th>
	<th><?php echo $paginator->sort('returns_kickoff_average');?></th>
	<th><?php echo $paginator->sort('returns_kickoff_longest');?></th>
	<th><?php echo $paginator->sort('returns_kickoff_touchdown');?></th>
	<th><?php echo $paginator->sort('returns_total');?></th>
	<th><?php echo $paginator->sort('returns_yards');?></th>
	<th><?php echo $paginator->sort('punts_total');?></th>
	<th><?php echo $paginator->sort('punts_yards_gross');?></th>
	<th><?php echo $paginator->sort('punts_yards_net');?></th>
	<th><?php echo $paginator->sort('punts_longest');?></th>
	<th><?php echo $paginator->sort('punts_inside_20');?></th>
	<th><?php echo $paginator->sort('punts_inside_20_percentage');?></th>
	<th><?php echo $paginator->sort('punts_average');?></th>
	<th><?php echo $paginator->sort('punts_blocked');?></th>
	<th><?php echo $paginator->sort('touchbacks_total');?></th>
	<th><?php echo $paginator->sort('touchbacks_total_percentage');?></th>
	<th><?php echo $paginator->sort('touchbacks_kickoffs');?></th>
	<th><?php echo $paginator->sort('touchbacks_kickoffs_percentage');?></th>
	<th><?php echo $paginator->sort('touchbacks_punts');?></th>
	<th><?php echo $paginator->sort('touchbacks_punts_percentage');?></th>
	<th><?php echo $paginator->sort('touchbacks_interceptions');?></th>
	<th><?php echo $paginator->sort('touchbacks_interceptions_percentage');?></th>
	<th><?php echo $paginator->sort('fair_catches');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballSpecialTeamsStats as $americanFootballSpecialTeamsStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['id']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_punt_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_punt_yards']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_punt_average']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_punt_longest']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_punt_touchdown']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_kickoff_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_kickoff_yards']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_kickoff_average']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_kickoff_longest']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_kickoff_touchdown']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['returns_yards']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['punts_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['punts_yards_gross']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['punts_yards_net']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['punts_longest']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['punts_inside_20']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['punts_inside_20_percentage']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['punts_average']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['punts_blocked']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['touchbacks_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['touchbacks_total_percentage']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['touchbacks_kickoffs']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['touchbacks_kickoffs_percentage']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['touchbacks_punts']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['touchbacks_punts_percentage']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['touchbacks_interceptions']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['touchbacks_interceptions_percentage']; ?>
		</td>
		<td>
			<?php echo $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['fair_catches']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballSpecialTeamsStat['AmericanFootballSpecialTeamsStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballSpecialTeamsStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
