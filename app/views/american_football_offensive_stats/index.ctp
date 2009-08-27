<div class="americanFootballOffensiveStats index">
<h2><?php __('AmericanFootballOffensiveStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('offensive_plays_yards');?></th>
	<th><?php echo $paginator->sort('offensive_plays_number');?></th>
	<th><?php echo $paginator->sort('offensive_plays_average_yards_per');?></th>
	<th><?php echo $paginator->sort('possession_duration');?></th>
	<th><?php echo $paginator->sort('turnovers_giveaway');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballOffensiveStats as $americanFootballOffensiveStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['id']; ?>
		</td>
		<td>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['offensive_plays_yards']; ?>
		</td>
		<td>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['offensive_plays_number']; ?>
		</td>
		<td>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['offensive_plays_average_yards_per']; ?>
		</td>
		<td>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['possession_duration']; ?>
		</td>
		<td>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['turnovers_giveaway']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballOffensiveStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
