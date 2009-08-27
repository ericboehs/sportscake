<div class="dbInfos index">
<h2><?php __('DbInfos');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('version');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($dbInfos as $dbInfo):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $dbInfo['DbInfo']['version']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $dbInfo['DbInfo']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $dbInfo['DbInfo']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $dbInfo['DbInfo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dbInfo['DbInfo']['id'])); ?>
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
		<li><?php echo $html->link(__('New DbInfo', true), array('action'=>'add')); ?></li>
	</ul>
</div>
