<div class="baseballActionSubstitutions view">
<h2><?php  __('BaseballActionSubstitution');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Baseball Event State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballActionSubstitution['BaseballEventState']['id'], array('controller'=> 'baseball_event_states', 'action'=>'view', $baseballActionSubstitution['BaseballEventState']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sequence Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['sequence_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['person_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Original'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballActionSubstitution['PersonOriginal']['id'], array('controller'=> 'people', 'action'=>'view', $baseballActionSubstitution['PersonOriginal']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Original Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballActionSubstitution['PersonOriginalPosition']['id'], array('controller'=> 'positions', 'action'=>'view', $baseballActionSubstitution['PersonOriginalPosition']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Original Lineup Slot'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['person_original_lineup_slot']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Replacing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballActionSubstitution['PersonReplacing']['id'], array('controller'=> 'people', 'action'=>'view', $baseballActionSubstitution['PersonReplacing']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Replacing Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballActionSubstitution['PersonReplacingPosition']['id'], array('controller'=> 'positions', 'action'=>'view', $baseballActionSubstitution['PersonReplacingPosition']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Replacing Lineup Slot'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['person_replacing_lineup_slot']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Substitution Reason'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['substitution_reason']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BaseballActionSubstitution', true), array('action'=>'edit', $baseballActionSubstitution['BaseballActionSubstitution']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BaseballActionSubstitution', true), array('action'=>'delete', $baseballActionSubstitution['BaseballActionSubstitution']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionSubstitution['BaseballActionSubstitution']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BaseballActionSubstitutions', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BaseballActionSubstitution', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Event States', true), array('controller'=> 'baseball_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Event State', true), array('controller'=> 'baseball_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Original', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Original Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
	</ul>
</div>
