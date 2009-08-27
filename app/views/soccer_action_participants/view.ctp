<div class="soccerActionParticipants view">
<h2><?php  __('SoccerActionParticipant');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionParticipant['SoccerActionParticipant']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Soccer Action Play'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionParticipant['SoccerActionPlay']['id'], array('controller'=> 'soccer_action_plays', 'action'=>'view', $soccerActionParticipant['SoccerActionPlay']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionParticipant['Person']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionParticipant['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Participant Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionParticipant['SoccerActionParticipant']['participant_role']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SoccerActionParticipant', true), array('action'=>'edit', $soccerActionParticipant['SoccerActionParticipant']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SoccerActionParticipant', true), array('action'=>'delete', $soccerActionParticipant['SoccerActionParticipant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionParticipant['SoccerActionParticipant']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SoccerActionParticipants', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SoccerActionParticipant', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Plays', true), array('controller'=> 'soccer_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Play', true), array('controller'=> 'soccer_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
