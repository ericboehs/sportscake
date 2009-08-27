<div class="basketballTeamStats index">
<h2><?php __('BasketballTeamStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('timeouts_left');?></th>
	<th><?php echo $paginator->sort('largest_lead');?></th>
	<th><?php echo $paginator->sort('fouls_total');?></th>
	<th><?php echo $paginator->sort('turnover_margin');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($basketballTeamStats as $basketballTeamStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $basketballTeamStat['BasketballTeamStat']['id']; ?>
		</td>
		<td>
			<?php echo $basketballTeamStat['BasketballTeamStat']['timeouts_left']; ?>
		</td>
		<td>
			<?php echo $basketballTeamStat['BasketballTeamStat']['largest_lead']; ?>
		</td>
		<td>
			<?php echo $basketballTeamStat['BasketballTeamStat']['fouls_total']; ?>
		</td>
		<td>
			<?php echo $basketballTeamStat['BasketballTeamStat']['turnover_margin']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $basketballTeamStat['BasketballTeamStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $basketballTeamStat['BasketballTeamStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $basketballTeamStat['BasketballTeamStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $basketballTeamStat['BasketballTeamStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New BasketballTeamStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
