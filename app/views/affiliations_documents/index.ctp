<div class="affiliationsDocuments index">
<h2><?php __('AffiliationsDocuments');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('affiliation_id');?></th>
	<th><?php echo $paginator->sort('document_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($affiliationsDocuments as $affiliationsDocument):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $affiliationsDocument['AffiliationsDocument']['affiliation_id']; ?>
		</td>
		<td>
			<?php echo $affiliationsDocument['AffiliationsDocument']['document_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $affiliationsDocument['AffiliationsDocument']['affiliation_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $affiliationsDocument['AffiliationsDocument']['affiliation_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $affiliationsDocument['AffiliationsDocument']['affiliation_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliationsDocument['AffiliationsDocument']['affiliation_id'])); ?>
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
		<li><?php echo $html->link(__('New AffiliationsDocument', true), array('action'=>'add')); ?></li>
	</ul>
</div>
