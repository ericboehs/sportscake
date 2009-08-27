<div class="affiliationPhases view">
<h2><?php  __('AffiliationPhase');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliationPhase['AffiliationPhase']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Affiliation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($affiliationPhase['Affiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $affiliationPhase['Affiliation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Root Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliationPhase['AffiliationPhase']['root_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ancestor Affiliation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($affiliationPhase['AncestorAffiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $affiliationPhase['AncestorAffiliation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Season'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($affiliationPhase['StartSeason']['id'], array('controller'=> 'seasons', 'action'=>'view', $affiliationPhase['StartSeason']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliationPhase['AffiliationPhase']['start_date_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Season'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($affiliationPhase['EndSeason']['id'], array('controller'=> 'seasons', 'action'=>'view', $affiliationPhase['EndSeason']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Date Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliationPhase['AffiliationPhase']['end_date_time']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AffiliationPhase', true), array('action'=>'edit', $affiliationPhase['AffiliationPhase']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AffiliationPhase', true), array('action'=>'delete', $affiliationPhase['AffiliationPhase']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliationPhase['AffiliationPhase']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AffiliationPhases', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AffiliationPhase', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Start Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
	</ul>
</div>
