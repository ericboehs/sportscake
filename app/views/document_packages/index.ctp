<div class="documentPackages index">
<h2><?php __('DocumentPackages');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('package_key');?></th>
	<th><?php echo $paginator->sort('package_name');?></th>
	<th><?php echo $paginator->sort('date_time');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($documentPackages as $documentPackage):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $documentPackage['DocumentPackage']['id']; ?>
		</td>
		<td>
			<?php echo $documentPackage['DocumentPackage']['package_key']; ?>
		</td>
		<td>
			<?php echo $documentPackage['DocumentPackage']['package_name']; ?>
		</td>
		<td>
			<?php echo $documentPackage['DocumentPackage']['date_time']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $documentPackage['DocumentPackage']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $documentPackage['DocumentPackage']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $documentPackage['DocumentPackage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentPackage['DocumentPackage']['id'])); ?>
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
		<li><?php echo $html->link(__('New DocumentPackage', true), array('action'=>'add')); ?></li>
	</ul>
</div>
