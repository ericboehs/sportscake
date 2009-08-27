<div class="americanFootballActionParticipants view">
<h2><?php  __('AmericanFootballActionParticipant');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('American Football Action Play'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($americanFootballActionParticipant['AmericanFootballActionPlay']['id'], array('controller'=> 'american_football_action_plays', 'action'=>'view', $americanFootballActionParticipant['AmericanFootballActionPlay']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($americanFootballActionParticipant['Person']['id'], array('controller'=> 'people', 'action'=>'view', $americanFootballActionParticipant['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Participant Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['participant_role']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['score_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Line'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['field_line']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Yardage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['yardage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score Credit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['score_credit']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Yards Gained'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballActionParticipant['AmericanFootballActionParticipant']['yards_gained']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballActionParticipant', true), array('action'=>'edit', $americanFootballActionParticipant['AmericanFootballActionParticipant']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballActionParticipant', true), array('action'=>'delete', $americanFootballActionParticipant['AmericanFootballActionParticipant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballActionParticipant['AmericanFootballActionParticipant']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballActionParticipants', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballActionParticipant', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List American Football Action Plays', true), array('controller'=> 'american_football_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Action Play', true), array('controller'=> 'american_football_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
