<h2><?php __('Users'); ?></h2>

<table>
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Role'); ?></th>
		<th><?php __('Created'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($user['User']['username'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
		</td>
		<td><?php echo $user['User']['role']; ?></td>
		<td><?php echo $user['User']['created']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>