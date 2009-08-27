<div class="addresses index">
<h2><?php __('Addresses');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('location_id');?></th>
	<th><?php echo $paginator->sort('language');?></th>
	<th><?php echo $paginator->sort('suite');?></th>
	<th><?php echo $paginator->sort('floor');?></th>
	<th><?php echo $paginator->sort('building');?></th>
	<th><?php echo $paginator->sort('street_number');?></th>
	<th><?php echo $paginator->sort('street_prefix');?></th>
	<th><?php echo $paginator->sort('street');?></th>
	<th><?php echo $paginator->sort('street_suffix');?></th>
	<th><?php echo $paginator->sort('neighborhood');?></th>
	<th><?php echo $paginator->sort('district');?></th>
	<th><?php echo $paginator->sort('locality');?></th>
	<th><?php echo $paginator->sort('county');?></th>
	<th><?php echo $paginator->sort('region');?></th>
	<th><?php echo $paginator->sort('postal_code');?></th>
	<th><?php echo $paginator->sort('country');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($addresses as $address):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $address['Address']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($address['Location']['id'], array('controller'=> 'locations', 'action'=>'view', $address['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $address['Address']['language']; ?>
		</td>
		<td>
			<?php echo $address['Address']['suite']; ?>
		</td>
		<td>
			<?php echo $address['Address']['floor']; ?>
		</td>
		<td>
			<?php echo $address['Address']['building']; ?>
		</td>
		<td>
			<?php echo $address['Address']['street_number']; ?>
		</td>
		<td>
			<?php echo $address['Address']['street_prefix']; ?>
		</td>
		<td>
			<?php echo $address['Address']['street']; ?>
		</td>
		<td>
			<?php echo $address['Address']['street_suffix']; ?>
		</td>
		<td>
			<?php echo $address['Address']['neighborhood']; ?>
		</td>
		<td>
			<?php echo $address['Address']['district']; ?>
		</td>
		<td>
			<?php echo $address['Address']['locality']; ?>
		</td>
		<td>
			<?php echo $address['Address']['county']; ?>
		</td>
		<td>
			<?php echo $address['Address']['region']; ?>
		</td>
		<td>
			<?php echo $address['Address']['postal_code']; ?>
		</td>
		<td>
			<?php echo $address['Address']['country']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $address['Address']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $address['Address']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $address['Address']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $address['Address']['id'])); ?>
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
		<li><?php echo $html->link(__('New Address', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Locations', true), array('controller'=> 'locations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller'=> 'locations', 'action'=>'add')); ?> </li>
	</ul>
</div>
