<div class="americanFootballTeamStats index">
<h2><?php __('AmericanFootballTeamStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('yards_per_attempt');?></th>
	<th><?php echo $paginator->sort('average_starting_position');?></th>
	<th><?php echo $paginator->sort('timeouts');?></th>
	<th><?php echo $paginator->sort('time_of_possession');?></th>
	<th><?php echo $paginator->sort('turnover_ratio');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballTeamStats as $americanFootballTeamStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['id']; ?>
		</td>
		<td>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['yards_per_attempt']; ?>
		</td>
		<td>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['average_starting_position']; ?>
		</td>
		<td>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['timeouts']; ?>
		</td>
		<td>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['time_of_possession']; ?>
		</td>
		<td>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['turnover_ratio']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballTeamStat['AmericanFootballTeamStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballTeamStat['AmericanFootballTeamStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballTeamStat['AmericanFootballTeamStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballTeamStat['AmericanFootballTeamStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballTeamStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
