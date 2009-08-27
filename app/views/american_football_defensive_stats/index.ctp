<div class="americanFootballDefensiveStats index">
<h2><?php __('AmericanFootballDefensiveStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('tackles_total');?></th>
	<th><?php echo $paginator->sort('tackles_solo');?></th>
	<th><?php echo $paginator->sort('tackles_assists');?></th>
	<th><?php echo $paginator->sort('interceptions_total');?></th>
	<th><?php echo $paginator->sort('interceptions_yards');?></th>
	<th><?php echo $paginator->sort('interceptions_average');?></th>
	<th><?php echo $paginator->sort('interceptions_longest');?></th>
	<th><?php echo $paginator->sort('interceptions_touchdown');?></th>
	<th><?php echo $paginator->sort('quarterback_hurries');?></th>
	<th><?php echo $paginator->sort('sacks_total');?></th>
	<th><?php echo $paginator->sort('sacks_yards');?></th>
	<th><?php echo $paginator->sort('passes_defensed');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballDefensiveStats as $americanFootballDefensiveStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['id']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['tackles_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['tackles_solo']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['tackles_assists']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['interceptions_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['interceptions_yards']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['interceptions_average']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['interceptions_longest']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['interceptions_touchdown']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['quarterback_hurries']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['sacks_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['sacks_yards']; ?>
		</td>
		<td>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['passes_defensed']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballDefensiveStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
