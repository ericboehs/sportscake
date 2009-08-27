<div class="affiliationsMedia view">
<h2><?php  __('AffiliationsMedium');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Affiliation Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliationsMedium['AffiliationsMedium']['affiliation_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Media Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliationsMedium['AffiliationsMedium']['media_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AffiliationsMedium', true), array('action'=>'edit', $affiliationsMedium['AffiliationsMedium']['affiliation_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AffiliationsMedium', true), array('action'=>'delete', $affiliationsMedium['AffiliationsMedium']['affiliation_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliationsMedium['AffiliationsMedium']['affiliation_id'])); ?> </li>
		<li><?php echo $html->link(__('List AffiliationsMedia', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AffiliationsMedium', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
