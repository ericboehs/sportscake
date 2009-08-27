<div class="affiliationsDocuments view">
<h2><?php  __('AffiliationsDocument');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Affiliation Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliationsDocument['AffiliationsDocument']['affiliation_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Document Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliationsDocument['AffiliationsDocument']['document_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AffiliationsDocument', true), array('action'=>'edit', $affiliationsDocument['AffiliationsDocument']['affiliation_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AffiliationsDocument', true), array('action'=>'delete', $affiliationsDocument['AffiliationsDocument']['affiliation_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliationsDocument['AffiliationsDocument']['affiliation_id'])); ?> </li>
		<li><?php echo $html->link(__('List AffiliationsDocuments', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AffiliationsDocument', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
