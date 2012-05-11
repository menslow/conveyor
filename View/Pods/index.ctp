<section class="single clearfix">
	<h2><?php __('Pods'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Sequence'); ?></th>
			<th><?php echo __('Created'); ?></th>
		</tr>
		<?php foreach ($pods as $pod): ?>
		<tr>
			<td><?php echo $pod['Pod']['id']; ?></td>
			<td>
				<?php echo $this->Html->link($pod['Pod']['name'], array('controller' => 'pods', 'action' => 'view', $pod['Pod']['id'])); ?>
			</td>
			<td><?php echo $pod['Pod']['sequence']; ?></td>
			<td><?php echo $pod['Pod']['created']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</section>
