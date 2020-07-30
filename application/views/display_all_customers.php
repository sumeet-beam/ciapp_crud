
<table>

<!--	metadata-->
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
		<td><?php echo anchor('home/customer_getdetails/'.$customer['name'], 'Select'); ?></td>
		<td><?php echo anchor('home/customer_edit_form/'.$customer['name'].'/'.$customer['password'], 'Edit'); ?></td>
		<td><?php echo anchor('home/customer_delete/'.$customer['name'].'', 'Delete'); ?></td>

	</tr>

<!--	endforeach-->
	<?php endforeach; ?>

</table>
<br><br>
<?php echo anchor('home/customer_create_form', 'Create New'); ?>

