<div class="iceHockeyPlayerStats index">
<h2><?php __('IceHockeyPlayerStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('plus_minus');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($iceHockeyPlayerStats as $iceHockeyPlayerStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $iceHockeyPlayerStat['IceHockeyPlayerStat']['id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyPlayerStat['IceHockeyPlayerStat']['plus_minus']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $iceHockeyPlayerStat['IceHockeyPlayerStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $iceHockeyPlayerStat['IceHockeyPlayerStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $iceHockeyPlayerStat['IceHockeyPlayerStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyPlayerStat['IceHockeyPlayerStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New IceHockeyPlayerStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
