<div class="americanFootballPassingStats index">
<h2><?php __('AmericanFootballPassingStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('passes_attempts');?></th>
	<th><?php echo $paginator->sort('passes_completions');?></th>
	<th><?php echo $paginator->sort('passes_percentage');?></th>
	<th><?php echo $paginator->sort('passes_yards_gross');?></th>
	<th><?php echo $paginator->sort('passes_yards_net');?></th>
	<th><?php echo $paginator->sort('passes_yards_lost');?></th>
	<th><?php echo $paginator->sort('passes_touchdowns');?></th>
	<th><?php echo $paginator->sort('passes_touchdowns_percentage');?></th>
	<th><?php echo $paginator->sort('passes_interceptions');?></th>
	<th><?php echo $paginator->sort('passes_interceptions_percentage');?></th>
	<th><?php echo $paginator->sort('passes_longest');?></th>
	<th><?php echo $paginator->sort('passes_average_yards_per');?></th>
	<th><?php echo $paginator->sort('passer_rating');?></th>
	<th><?php echo $paginator->sort('receptions_total');?></th>
	<th><?php echo $paginator->sort('receptions_yards');?></th>
	<th><?php echo $paginator->sort('receptions_touchdowns');?></th>
	<th><?php echo $paginator->sort('receptions_first_down');?></th>
	<th><?php echo $paginator->sort('receptions_longest');?></th>
	<th><?php echo $paginator->sort('receptions_average_yards_per');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballPassingStats as $americanFootballPassingStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['id']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_attempts']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_completions']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_percentage']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_yards_gross']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_yards_net']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_yards_lost']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_touchdowns']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_touchdowns_percentage']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_interceptions']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_interceptions_percentage']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_longest']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passes_average_yards_per']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['passer_rating']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['receptions_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['receptions_yards']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['receptions_touchdowns']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['receptions_first_down']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['receptions_longest']; ?>
		</td>
		<td>
			<?php echo $americanFootballPassingStat['AmericanFootballPassingStat']['receptions_average_yards_per']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballPassingStat['AmericanFootballPassingStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballPassingStat['AmericanFootballPassingStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballPassingStat['AmericanFootballPassingStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballPassingStat['AmericanFootballPassingStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballPassingStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
