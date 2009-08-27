<div class="americanFootballDownProgressStats index">
<h2><?php __('AmericanFootballDownProgressStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('first_downs_total');?></th>
	<th><?php echo $paginator->sort('first_downs_pass');?></th>
	<th><?php echo $paginator->sort('first_downs_run');?></th>
	<th><?php echo $paginator->sort('first_downs_penalty');?></th>
	<th><?php echo $paginator->sort('conversions_third_down');?></th>
	<th><?php echo $paginator->sort('conversions_third_down_attempts');?></th>
	<th><?php echo $paginator->sort('conversions_third_down_percentage');?></th>
	<th><?php echo $paginator->sort('conversions_fourth_down');?></th>
	<th><?php echo $paginator->sort('conversions_fourth_down_attempts');?></th>
	<th><?php echo $paginator->sort('conversions_fourth_down_percentage');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballDownProgressStats as $americanFootballDownProgressStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['id']; ?>
		</td>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['first_downs_total']; ?>
		</td>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['first_downs_pass']; ?>
		</td>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['first_downs_run']; ?>
		</td>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['first_downs_penalty']; ?>
		</td>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_third_down']; ?>
		</td>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_third_down_attempts']; ?>
		</td>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_third_down_percentage']; ?>
		</td>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_fourth_down']; ?>
		</td>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_fourth_down_attempts']; ?>
		</td>
		<td>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_fourth_down_percentage']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballDownProgressStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
