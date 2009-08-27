<div class="personsMedia index">
<h2><?php __('PersonsMedia');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('person_id');?></th>
	<th><?php echo $paginator->sort('media_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($personsMedia as $personsMedium):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $personsMedium['PersonsMedium']['person_id']; ?>
		</td>
		<td>
			<?php echo $personsMedium['PersonsMedium']['media_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $personsMedium['PersonsMedium']['person_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $personsMedium['PersonsMedium']['person_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $personsMedium['PersonsMedium']['person_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personsMedium['PersonsMedium']['person_id'])); ?>
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
		<li><?php echo $html->link(__('New PersonsMedium', true), array('action'=>'add')); ?></li>
	</ul>
</div>