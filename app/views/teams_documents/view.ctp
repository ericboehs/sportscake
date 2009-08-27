<div class="teamsDocuments view">
<h2><?php  __('TeamsDocument');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teamsDocument['TeamsDocument']['team_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Document Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teamsDocument['TeamsDocument']['document_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit TeamsDocument', true), array('action'=>'edit', $teamsDocument['TeamsDocument']['team_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete TeamsDocument', true), array('action'=>'delete', $teamsDocument['TeamsDocument']['team_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teamsDocument['TeamsDocument']['team_id'])); ?> </li>
		<li><?php echo $html->link(__('List TeamsDocuments', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New TeamsDocument', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
