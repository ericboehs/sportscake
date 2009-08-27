<div class="locations index">
<h2><?php __('Locations');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('timezone');?></th>
	<th><?php echo $paginator->sort('latitude');?></th>
	<th><?php echo $paginator->sort('longitude');?></th>
	<th><?php echo $paginator->sort('country_code');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($locations as $location):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $location['Location']['id']; ?>
		</td>
		<td>
			<?php echo $location['Location']['timezone']; ?>
		</td>
		<td>
			<?php echo $location['Location']['latitude']; ?>
		</td>
		<td>
			<?php echo $location['Location']['longitude']; ?>
		</td>
		<td>
			<?php echo $location['Location']['country_code']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $location['Location']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $location['Location']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $location['Location']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $location['Location']['id'])); ?>
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
		<li><?php echo $html->link(__('New Location', true), array('action'=>'add')); ?></li>
	</ul>
</div>
