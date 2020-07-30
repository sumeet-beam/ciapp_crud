<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>password</th>
	</tr>

	<!--	loop for customer table-->
	<?php foreach ($customers as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['name']; ?></td>
			<td><?php echo $customer['password']; ?></td>
			<td><?php echo anchor('home/display_all_customers', 'back'); ?></td>
		</tr>

		<!--	endforeach-->
	<?php endforeach; ?>

</table>
