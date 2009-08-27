<div class="baseballDefensiveStats index">
<h2><?php __('BaseballDefensiveStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('double_plays');?></th>
	<th><?php echo $paginator->sort('triple_plays');?></th>
	<th><?php echo $paginator->sort('putouts');?></th>
	<th><?php echo $paginator->sort('assists');?></th>
	<th><?php echo $paginator->sort('errors');?></th>
	<th><?php echo $paginator->sort('fielding_percentage');?></th>
	<th><?php echo $paginator->sort('defensive_average');?></th>
	<th><?php echo $paginator->sort('errors_passed_ball');?></th>
	<th><?php echo $paginator->sort('errors_catchers_interference');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($baseballDefensiveStats as $baseballDefensiveStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['id']; ?>
		</td>
		<td>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['double_plays']; ?>
		</td>
		<td>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['triple_plays']; ?>
		</td>
		<td>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['putouts']; ?>
		</td>
		<td>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['assists']; ?>
		</td>
		<td>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['errors']; ?>
		</td>
		<td>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['fielding_percentage']; ?>
		</td>
		<td>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['defensive_average']; ?>
		</td>
		<td>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['errors_passed_ball']; ?>
		</td>
		<td>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['errors_catchers_interference']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $baseballDefensiveStat['BaseballDefensiveStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $baseballDefensiveStat['BaseballDefensiveStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $baseballDefensiveStat['BaseballDefensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballDefensiveStat['BaseballDefensiveStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New BaseballDefensiveStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
