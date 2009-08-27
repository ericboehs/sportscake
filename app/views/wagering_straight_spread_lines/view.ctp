<div class="wageringStraightSpreadLines view">
<h2><?php  __('WageringStraightSpreadLine');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bookmaker'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wageringStraightSpreadLine['Bookmaker']['id'], array('controller'=> 'bookmakers', 'action'=>'view', $wageringStraightSpreadLine['Bookmaker']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wageringStraightSpreadLine['Event']['id'], array('controller'=> 'events', 'action'=>'view', $wageringStraightSpreadLine['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['date_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wageringStraightSpreadLine['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $wageringStraightSpreadLine['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wageringStraightSpreadLine['Person']['id'], array('controller'=> 'people', 'action'=>'view', $wageringStraightSpreadLine['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rotation Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['rotation_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vigorish'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['vigorish']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Line Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['line_value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Line Value Opening'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['line_value_opening']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prediction'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringStraightSpreadLine['WageringStraightSpreadLine']['prediction']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit WageringStraightSpreadLine', true), array('action'=>'edit', $wageringStraightSpreadLine['WageringStraightSpreadLine']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete WageringStraightSpreadLine', true), array('action'=>'delete', $wageringStraightSpreadLine['WageringStraightSpreadLine']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringStraightSpreadLine['WageringStraightSpreadLine']['id'])); ?> </li>
		<li><?php echo $html->link(__('List WageringStraightSpreadLines', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New WageringStraightSpreadLine', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Bookmakers', true), array('controller'=> 'bookmakers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Bookmaker', true), array('controller'=> 'bookmakers', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
