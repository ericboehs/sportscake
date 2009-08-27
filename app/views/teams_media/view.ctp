<div class="teamsMedia view">
<h2><?php  __('TeamsMedium');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teamsMedium['TeamsMedium']['team_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Media Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teamsMedium['TeamsMedium']['media_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit TeamsMedium', true), array('action'=>'edit', $teamsMedium['TeamsMedium']['team_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete TeamsMedium', true), array('action'=>'delete', $teamsMedium['TeamsMedium']['team_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teamsMedium['TeamsMedium']['team_id'])); ?> </li>
		<li><?php echo $html->link(__('List TeamsMedia', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New TeamsMedium', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
