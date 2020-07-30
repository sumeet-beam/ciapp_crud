<?php


class Customer extends CI_Controller
{
	/**
	 * Customer constructor.
	 */
	public function __construct(){
		parent::__construct();
	}

	/**
	 *
	 */
	public function get(){
		$this->load->view('customer_table');
	}

	/**
	 *
	 */
	public function insert(){
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		$this->customers_model->insert_one_customers($name, $password);
		redirect('home/display_all_customers');
	}

	/**
	 *
	 */
	public function edit(){
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		$this->customers_model->update_one_customers($name, $password);
		redirect('home/display_all_customers');
	}

	/**
	 * @param $name
	 */
	public function delete($name){
		$this->customers_model->delete_one_customers($name);
		redirect('home/display_all_customers');
	}
}
