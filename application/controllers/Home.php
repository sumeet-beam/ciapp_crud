<?php


class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	//homepage
	public function index(){
		$this->load->view('home');
	}

	//display all customers
	public function display_all_customers(){
		$customers = array();
		$customers = $this->customers_model->select_all_customers();
		$data['customers'] = $customers;
		$this->load->view('display_all_customers', $data);
	}

	public function customer_getdetails($name){
		$customers = $this->customers_model->select_one_customers($name);
		$data['customers'] = $customers;
		$this->load->view('customer_getdetails', $data);
	}

	//create new customers
	public function customer_create_form(){
		$this->load->view('customer_create_form');
	}

	//edit password
	public function customer_edit_form($name, $password){
		$data['name'] = $name;
		$data['password'] = $password;
		$this->load->view('customer_edit_form', $data );
	}

	//delete the customers
	public function customer_delete($name){
		redirect('customer/delete/'.$name.'');
	}
}
