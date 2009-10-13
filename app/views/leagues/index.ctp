<div class="leagues index">
<h2><?php __('Leagues');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('league_key');?></th>
	<th><?php echo $paginator->sort('sport_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('nickname');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($leagues as $league):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $league['League']['id']; ?>
		</td>
		<td>
			<?php echo $league['League']['league_key']; ?>
		</td>
		<td>
			<?php echo $html->link($league['Sport']['name'], array('controller' => 'sports', 'action' => 'view', $league['Sport']['id'])); ?>
		</td>
		<td>
			<?php echo $league['League']['name']; ?>
		</td>
		<td>
			<?php echo $league['League']['nickname']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $league['League']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $league['League']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $league['League']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $league['League']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New League', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Sports', true), array('controller' => 'sports', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Sport', true), array('controller' => 'sports', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Conferences', true), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Conference', true), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller' => 'seasons', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Season', true), array('controller' => 'seasons', 'action' => 'add')); ?> </li>
	</ul>
</div>
