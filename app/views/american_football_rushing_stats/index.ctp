<div class="americanFootballRushingStats index">
<h2><?php __('AmericanFootballRushingStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('rushes_attempts');?></th>
	<th><?php echo $paginator->sort('rushes_yards');?></th>
	<th><?php echo $paginator->sort('rushes_touchdowns');?></th>
	<th><?php echo $paginator->sort('rushing_average_yards_per');?></th>
	<th><?php echo $paginator->sort('rushes_first_down');?></th>
	<th><?php echo $paginator->sort('rushes_longest');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballRushingStats as $americanFootballRushingStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['id']; ?>
		</td>
		<td>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushes_attempts']; ?>
		</td>
		<td>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushes_yards']; ?>
		</td>
		<td>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushes_touchdowns']; ?>
		</td>
		<td>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushing_average_yards_per']; ?>
		</td>
		<td>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushes_first_down']; ?>
		</td>
		<td>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushes_longest']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballRushingStat['AmericanFootballRushingStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballRushingStat['AmericanFootballRushingStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballRushingStat['AmericanFootballRushingStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballRushingStat['AmericanFootballRushingStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballRushingStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
