<div class="dbInfos view">
<h2><?php  __('DbInfo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Version'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dbInfo['DbInfo']['version']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit DbInfo', true), array('action'=>'edit', $dbInfo['DbInfo']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete DbInfo', true), array('action'=>'delete', $dbInfo['DbInfo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dbInfo['DbInfo']['id'])); ?> </li>
		<li><?php echo $html->link(__('List DbInfos', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New DbInfo', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
