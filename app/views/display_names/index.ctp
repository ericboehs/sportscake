<div class="displayNames index">
<h2><?php __('DisplayNames');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('language');?></th>
	<th><?php echo $paginator->sort('entity_type');?></th>
	<th><?php echo $paginator->sort('entity_id');?></th>
	<th><?php echo $paginator->sort('full_name');?></th>
	<th><?php echo $paginator->sort('first_name');?></th>
	<th><?php echo $paginator->sort('middle_name');?></th>
	<th><?php echo $paginator->sort('last_name');?></th>
	<th><?php echo $paginator->sort('alias');?></th>
	<th><?php echo $paginator->sort('abbreviation');?></th>
	<th><?php echo $paginator->sort('short_name');?></th>
	<th><?php echo $paginator->sort('prefix');?></th>
	<th><?php echo $paginator->sort('suffix');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($displayNames as $displayName):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $displayName['DisplayName']['id']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['language']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['entity_type']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['entity_id']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['full_name']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['first_name']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['middle_name']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['last_name']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['alias']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['abbreviation']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['short_name']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['prefix']; ?>
		</td>
		<td>
			<?php echo $displayName['DisplayName']['suffix']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $displayName['DisplayName']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $displayName['DisplayName']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $displayName['DisplayName']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $displayName['DisplayName']['id'])); ?>
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
		<li><?php echo $html->link(__('New DisplayName', true), array('action'=>'add')); ?></li>
	</ul>
</div>
