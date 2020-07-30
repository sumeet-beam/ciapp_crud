<?php

echo 'Edit password for customer name -> '.$name;

//form open
echo form_open('customer/edit/');

//input
echo form_hidden('name', $name);
$values = array(
	'name'          => 'password',
	'placeholder'	=> 'password'
);
echo form_input($values);

//submit
echo form_submit('edit', 'Edit');

//form close
echo form_close();
?>
