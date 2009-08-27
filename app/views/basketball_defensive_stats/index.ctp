<div class="basketballDefensiveStats index">
<h2><?php __('BasketballDefensiveStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('steals_total');?></th>
	<th><?php echo $paginator->sort('steals_per_game');?></th>
	<th><?php echo $paginator->sort('blocks_total');?></th>
	<th><?php echo $paginator->sort('blocks_per_game');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($basketballDefensiveStats as $basketballDefensiveStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $basketballDefensiveStat['BasketballDefensiveStat']['id']; ?>
		</td>
		<td>
			<?php echo $basketballDefensiveStat['BasketballDefensiveStat']['steals_total']; ?>
		</td>
		<td>
			<?php echo $basketballDefensiveStat['BasketballDefensiveStat']['steals_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballDefensiveStat['BasketballDefensiveStat']['blocks_total']; ?>
		</td>
		<td>
			<?php echo $basketballDefensiveStat['BasketballDefensiveStat']['blocks_per_game']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $basketballDefensiveStat['BasketballDefensiveStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $basketballDefensiveStat['BasketballDefensiveStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $basketballDefensiveStat['BasketballDefensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $basketballDefensiveStat['BasketballDefensiveStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New BasketballDefensiveStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
