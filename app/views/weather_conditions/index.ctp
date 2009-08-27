<div class="weatherConditions index">
<h2><?php __('WeatherConditions');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th><?php echo $paginator->sort('temperature');?></th>
	<th><?php echo $paginator->sort('temperature_units');?></th>
	<th><?php echo $paginator->sort('humidity');?></th>
	<th><?php echo $paginator->sort('clouds');?></th>
	<th><?php echo $paginator->sort('wind_direction');?></th>
	<th><?php echo $paginator->sort('wind_velocity');?></th>
	<th><?php echo $paginator->sort('weather_code');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($weatherConditions as $weatherCondition):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $weatherCondition['WeatherCondition']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($weatherCondition['Event']['id'], array('controller'=> 'events', 'action'=>'view', $weatherCondition['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $weatherCondition['WeatherCondition']['temperature']; ?>
		</td>
		<td>
			<?php echo $weatherCondition['WeatherCondition']['temperature_units']; ?>
		</td>
		<td>
			<?php echo $weatherCondition['WeatherCondition']['humidity']; ?>
		</td>
		<td>
			<?php echo $weatherCondition['WeatherCondition']['clouds']; ?>
		</td>
		<td>
			<?php echo $weatherCondition['WeatherCondition']['wind_direction']; ?>
		</td>
		<td>
			<?php echo $weatherCondition['WeatherCondition']['wind_velocity']; ?>
		</td>
		<td>
			<?php echo $weatherCondition['WeatherCondition']['weather_code']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $weatherCondition['WeatherCondition']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $weatherCondition['WeatherCondition']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $weatherCondition['WeatherCondition']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $weatherCondition['WeatherCondition']['id'])); ?>
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
		<li><?php echo $html->link(__('New WeatherCondition', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
	</ul>
</div>
