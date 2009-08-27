<div class="basketballReboundingStats index">
<h2><?php __('BasketballReboundingStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('rebounds_total');?></th>
	<th><?php echo $paginator->sort('rebounds_per_game');?></th>
	<th><?php echo $paginator->sort('rebounds_defensive');?></th>
	<th><?php echo $paginator->sort('rebounds_offensive');?></th>
	<th><?php echo $paginator->sort('team_rebounds_total');?></th>
	<th><?php echo $paginator->sort('team_rebounds_per_game');?></th>
	<th><?php echo $paginator->sort('team_rebounds_defensive');?></th>
	<th><?php echo $paginator->sort('team_rebounds_offensive');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($basketballReboundingStats as $basketballReboundingStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['id']; ?>
		</td>
		<td>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['rebounds_total']; ?>
		</td>
		<td>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['rebounds_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['rebounds_defensive']; ?>
		</td>
		<td>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['rebounds_offensive']; ?>
		</td>
		<td>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['team_rebounds_total']; ?>
		</td>
		<td>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['team_rebounds_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['team_rebounds_defensive']; ?>
		</td>
		<td>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['team_rebounds_offensive']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $basketballReboundingStat['BasketballReboundingStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $basketballReboundingStat['BasketballReboundingStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $basketballReboundingStat['BasketballReboundingStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $basketballReboundingStat['BasketballReboundingStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New BasketballReboundingStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
