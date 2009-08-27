<div class="documentFixtures index">
<h2><?php __('DocumentFixtures');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('fixture_key');?></th>
	<th><?php echo $paginator->sort('publisher_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('document_class_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($documentFixtures as $documentFixture):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $documentFixture['DocumentFixture']['id']; ?>
		</td>
		<td>
			<?php echo $documentFixture['DocumentFixture']['fixture_key']; ?>
		</td>
		<td>
			<?php echo $documentFixture['DocumentFixture']['publisher_id']; ?>
		</td>
		<td>
			<?php echo $documentFixture['DocumentFixture']['name']; ?>
		</td>
		<td>
			<?php echo $documentFixture['DocumentFixture']['document_class_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $documentFixture['DocumentFixture']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $documentFixture['DocumentFixture']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $documentFixture['DocumentFixture']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentFixture['DocumentFixture']['id'])); ?>
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
		<li><?php echo $html->link(__('New DocumentFixture', true), array('action'=>'add')); ?></li>
	</ul>
</div>
