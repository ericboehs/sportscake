<div class="americanFootballPenaltiesStats index">
<h2><?php __('AmericanFootballPenaltiesStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('penalties_total');?></th>
	<th><?php echo $paginator->sort('penalty_yards');?></th>
	<th><?php echo $paginator->sort('penalty_first_downs');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballPenaltiesStats as $americanFootballPenaltiesStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['id']; ?>
		</td>
		<td>
			<?php echo $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['penalties_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['penalty_yards']; ?>
		</td>
		<td>
			<?php echo $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['penalty_first_downs']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballPenaltiesStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
