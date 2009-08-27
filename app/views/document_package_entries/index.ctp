<div class="documentPackageEntries index">
<h2><?php __('DocumentPackageEntries');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('document_package_id');?></th>
	<th><?php echo $paginator->sort('rank');?></th>
	<th><?php echo $paginator->sort('document_id');?></th>
	<th><?php echo $paginator->sort('headline');?></th>
	<th><?php echo $paginator->sort('short_headline');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($documentPackageEntries as $documentPackageEntry):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['id']; ?>
		</td>
		<td>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['document_package_id']; ?>
		</td>
		<td>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['rank']; ?>
		</td>
		<td>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['document_id']; ?>
		</td>
		<td>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['headline']; ?>
		</td>
		<td>
			<?php echo $documentPackageEntry['DocumentPackageEntry']['short_headline']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $documentPackageEntry['DocumentPackageEntry']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $documentPackageEntry['DocumentPackageEntry']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $documentPackageEntry['DocumentPackageEntry']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentPackageEntry['DocumentPackageEntry']['id'])); ?>
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
		<li><?php echo $html->link(__('New DocumentPackageEntry', true), array('action'=>'add')); ?></li>
	</ul>
</div>
