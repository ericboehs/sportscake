<div class="documentFixturesEvents index">
<h2><?php __('DocumentFixturesEvents');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('document_fixture_id');?></th>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th><?php echo $paginator->sort('latest_document_id');?></th>
	<th><?php echo $paginator->sort('last_update');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($documentFixturesEvents as $documentFixturesEvent):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $documentFixturesEvent['DocumentFixturesEvent']['id']; ?>
		</td>
		<td>
			<?php echo $documentFixturesEvent['DocumentFixturesEvent']['document_fixture_id']; ?>
		</td>
		<td>
			<?php echo $documentFixturesEvent['DocumentFixturesEvent']['event_id']; ?>
		</td>
		<td>
			<?php echo $documentFixturesEvent['DocumentFixturesEvent']['latest_document_id']; ?>
		</td>
		<td>
			<?php echo $documentFixturesEvent['DocumentFixturesEvent']['last_update']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $documentFixturesEvent['DocumentFixturesEvent']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $documentFixturesEvent['DocumentFixturesEvent']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $documentFixturesEvent['DocumentFixturesEvent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentFixturesEvent['DocumentFixturesEvent']['id'])); ?>
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
		<li><?php echo $html->link(__('New DocumentFixturesEvent', true), array('action'=>'add')); ?></li>
	</ul>
</div>
