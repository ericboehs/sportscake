<div class="sports index">
<h2><?php __('Sports');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('sport_key');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($sports as $sport):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $sport['Sport']['id']; ?>
		</td>
		<td>
			<?php echo $sport['Sport']['sport_key']; ?>
		</td>
		<td>
			<?php echo $sport['Sport']['name']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $sport['Sport']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $sport['Sport']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $sport['Sport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sport['Sport']['id'])); ?>
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
		<li><?php echo $html->link(__('New Sport', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Leagues', true), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
