<div class="soccerActionSubstitutions view">
<h2><?php  __('SoccerActionSubstitution');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionSubstitution['SoccerActionSubstitution']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Soccer Event State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionSubstitution['SoccerEventState']['id'], array('controller'=> 'soccer_event_states', 'action'=>'view', $soccerActionSubstitution['SoccerEventState']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionSubstitution['SoccerActionSubstitution']['person_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Original'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionSubstitution['PersonOriginal']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionSubstitution['PersonOriginal']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Original Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionSubstitution['PersonOriginalPosition']['id'], array('controller'=> 'positions', 'action'=>'view', $soccerActionSubstitution['PersonOriginalPosition']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Replacing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionSubstitution['PersonReplacing']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionSubstitution['PersonReplacing']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Replacing Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionSubstitution['PersonReplacingPosition']['id'], array('controller'=> 'positions', 'action'=>'view', $soccerActionSubstitution['PersonReplacingPosition']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Substitution Reason'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionSubstitution['SoccerActionSubstitution']['substitution_reason']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionSubstitution['SoccerActionSubstitution']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SoccerActionSubstitution', true), array('action'=>'edit', $soccerActionSubstitution['SoccerActionSubstitution']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SoccerActionSubstitution', true), array('action'=>'delete', $soccerActionSubstitution['SoccerActionSubstitution']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionSubstitution['SoccerActionSubstitution']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SoccerActionSubstitutions', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SoccerActionSubstitution', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Original', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Original Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
	</ul>
</div>
