<div class="iceHockeyPlayerStats view">
<h2><?php  __('IceHockeyPlayerStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyPlayerStat['IceHockeyPlayerStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Plus Minus'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyPlayerStat['IceHockeyPlayerStat']['plus_minus']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit IceHockeyPlayerStat', true), array('action'=>'edit', $iceHockeyPlayerStat['IceHockeyPlayerStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete IceHockeyPlayerStat', true), array('action'=>'delete', $iceHockeyPlayerStat['IceHockeyPlayerStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyPlayerStat['IceHockeyPlayerStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List IceHockeyPlayerStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New IceHockeyPlayerStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
