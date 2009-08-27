<div class="teamPhases view">
<h2><?php  __('TeamPhase');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teamPhase['TeamPhase']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($teamPhase['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $teamPhase['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Season'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($teamPhase['StartSeason']['id'], array('controller'=> 'seasons', 'action'=>'view', $teamPhase['StartSeason']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Season'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($teamPhase['EndSeason']['id'], array('controller'=> 'seasons', 'action'=>'view', $teamPhase['EndSeason']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Affiliation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($teamPhase['Affiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $teamPhase['Affiliation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teamPhase['TeamPhase']['start_date_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teamPhase['TeamPhase']['end_date_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phase Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teamPhase['TeamPhase']['phase_status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($teamPhase['Role']['id'], array('controller'=> 'roles', 'action'=>'view', $teamPhase['Role']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit TeamPhase', true), array('action'=>'edit', $teamPhase['TeamPhase']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete TeamPhase', true), array('action'=>'delete', $teamPhase['TeamPhase']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teamPhase['TeamPhase']['id'])); ?> </li>
		<li><?php echo $html->link(__('List TeamPhases', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New TeamPhase', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Start Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Roles', true), array('controller'=> 'roles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Role', true), array('controller'=> 'roles', 'action'=>'add')); ?> </li>
	</ul>
</div>
