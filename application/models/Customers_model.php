<?php


class Customers_model extends CI_Model{


	/**
	 * Customers_model constructor.
	 */
	public function __construct(){
		parent::__construct();
	}


	/**
	 * @return mixed ;
	 * select * from customers
	 */
	public function select_all_customers(){
		if($this->db->table_exists('customers')){

			//transaction start;
			$this->db->trans_start();

				//query to be executed
				$result = $this->db->get('customers');

			//transaction complete
			$this->db->trans_complete();
		}
		return $result->result_array();
	}


	public function select_one_customers($name){
		if($this->db->table_exists('customers')){

			//transaction start;
			$this->db->trans_start();

			//query to be executed
			$where = $this->db->where('name', $name);
			$result = $this->db->get('customers');

			//transaction complete
			$this->db->trans_complete();
		}
		return $result->result_array();
	}

	/**
	 * @param $name
	 * @param $password
	 */
	public function insert_one_customers($name, $password){
		$data['name'] = $name;
		$data['password'] = $password;
		if($this->db->table_exists('customers')){

			//transaction start;
			$this->db->trans_start();

			//query to be executed
			$this->db->insert('customers', $data);

			//transaction complete
			$this->db->trans_complete();
		}
	}


	/**
	 * @param $name
	 * @param $password
	 */
	public function update_one_customers($name, $password){
		$data = array(
			'password'=> $password
		);
		if($this->db->table_exists('customers')){

			//transaction start;
			$this->db->trans_start();

			//query to be executed
			$this->db->where('name', $name);
			$this->db->update('customers', $data);

			//transaction complete
			$this->db->trans_complete();
		}
	}


	/**
	 * @param $name
	 */
	public function delete_one_customers($name){
		if($this->db->table_exists('customers')) {

			//transaction start;
			$this->db->trans_start();

			//query to be executed
			$this->db->where('name', $name);
			$this->db->delete('customers');

			//transaction complete
			$this->db->trans_complete();
		}
	}
}
