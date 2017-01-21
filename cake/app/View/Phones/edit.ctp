<div class="phones form">
<?php echo $this->Form->create('Phone'); ?>
	<fieldset>
		<legend><?php echo __('Edit Phone'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('home_phone');
		echo $this->Form->input('cell_phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Phone.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Phone.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Phones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
