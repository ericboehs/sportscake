<div class="americanFootballFumblesStats index">
<h2><?php __('AmericanFootballFumblesStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('fumbles_committed');?></th>
	<th><?php echo $paginator->sort('fumbles_forced');?></th>
	<th><?php echo $paginator->sort('fumbles_recovered');?></th>
	<th><?php echo $paginator->sort('fumbles_lost');?></th>
	<th><?php echo $paginator->sort('fumbles_yards_gained');?></th>
	<th><?php echo $paginator->sort('fumbles_own_committed');?></th>
	<th><?php echo $paginator->sort('fumbles_own_recovered');?></th>
	<th><?php echo $paginator->sort('fumbles_own_lost');?></th>
	<th><?php echo $paginator->sort('fumbles_own_yards_gained');?></th>
	<th><?php echo $paginator->sort('fumbles_opposing_committed');?></th>
	<th><?php echo $paginator->sort('fumbles_opposing_recovered');?></th>
	<th><?php echo $paginator->sort('fumbles_opposing_lost');?></th>
	<th><?php echo $paginator->sort('fumbles_opposing_yards_gained');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballFumblesStats as $americanFootballFumblesStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['id']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_committed']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_forced']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_recovered']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_lost']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_yards_gained']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_own_committed']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_own_recovered']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_own_lost']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_own_yards_gained']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_opposing_committed']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_opposing_recovered']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_opposing_lost']; ?>
		</td>
		<td>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_opposing_yards_gained']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballFumblesStat['AmericanFootballFumblesStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballFumblesStat['AmericanFootballFumblesStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballFumblesStat['AmericanFootballFumblesStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballFumblesStat['AmericanFootballFumblesStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballFumblesStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
