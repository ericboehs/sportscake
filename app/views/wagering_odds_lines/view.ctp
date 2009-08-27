<div class="wageringOddsLines view">
<h2><?php  __('WageringOddsLine');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringOddsLine['WageringOddsLine']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bookmaker'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wageringOddsLine['Bookmaker']['id'], array('controller'=> 'bookmakers', 'action'=>'view', $wageringOddsLine['Bookmaker']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wageringOddsLine['Event']['id'], array('controller'=> 'events', 'action'=>'view', $wageringOddsLine['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringOddsLine['WageringOddsLine']['date_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wageringOddsLine['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $wageringOddsLine['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wageringOddsLine['Person']['id'], array('controller'=> 'people', 'action'=>'view', $wageringOddsLine['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rotation Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringOddsLine['WageringOddsLine']['rotation_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringOddsLine['WageringOddsLine']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numerator'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringOddsLine['WageringOddsLine']['numerator']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Denominator'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringOddsLine['WageringOddsLine']['denominator']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prediction'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringOddsLine['WageringOddsLine']['prediction']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Payout Calculation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringOddsLine['WageringOddsLine']['payout_calculation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Payout Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wageringOddsLine['WageringOddsLine']['payout_amount']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit WageringOddsLine', true), array('action'=>'edit', $wageringOddsLine['WageringOddsLine']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete WageringOddsLine', true), array('action'=>'delete', $wageringOddsLine['WageringOddsLine']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringOddsLine['WageringOddsLine']['id'])); ?> </li>
		<li><?php echo $html->link(__('List WageringOddsLines', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New WageringOddsLine', true), array('action'=>'add')); ?> </li>
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
