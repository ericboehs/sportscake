<div class="conferences index">
<h2><?php __('Conferences');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('conference_key');?></th>
	<th><?php echo $paginator->sort('league_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('shortname');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($conferences as $conference):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $conference['Conference']['id']; ?>
		</td>
		<td>
			<?php echo $conference['Conference']['conference_key']; ?>
		</td>
		<td>
			<?php echo $html->link($conference['League']['name'], array('controller' => 'leagues', 'action' => 'view', $conference['League']['id'])); ?>
		</td>
		<td>
			<?php echo $conference['Conference']['name']; ?>
		</td>
		<td>
			<?php echo $conference['Conference']['shortname']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $conference['Conference']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $conference['Conference']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $conference['Conference']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $conference['Conference']['id'])); ?>
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
		<li><?php echo $html->link(__('New Conference', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Leagues', true), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Divisions', true), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Division', true), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
