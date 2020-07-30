<?php

	//form open
	echo form_open('customer/insert');

		//input1
		$values = array(
		'name'          => 'name',
		'placeholder'	=> 'name'
		);
		echo form_input($values);

		//input2
		$values = array(
		'name'          => 'password',
		'placeholder'	=> 'password'
		);
		echo form_input($values);

		//submit
		echo form_submit('create', 'Create');

	//form close
	echo form_close();
?>
