<?php
/**
* Customer_model.php model for a generic Customer
*
* Used to show how to do CRUD in CodeIgniter
*
* @package ITC260
* @subpackage Customer
* @author Bill Newman <william.newman@seattlecolleges.edu>
* @version 1.0 2015/05/05
* @link http://www.newmanix.com/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Customer.php
* @see index.php
* @todo none
*/

/**
* Customer model for our CRUD demo
*
* @see Customer
* @todo none
*/
class Customer_model extends CI_Model {

    /**
    * Loads default data into object
    *
    * @param none
    * @return void
    * @todo none
    */    
	public function __construct()
	{
			$this->load->database();
	}#end constructor
    
    public function get_customers()
    {
       //return "Hello from the Customer model!"; 
       return $this->db->get('test_Customers');    
    }#end get_customers()
		
	/*	
	public function get_news($slug = FALSE)
	{
			if ($slug === FALSE)
			{
					$query = $this->db->get('news');
					return $query->result_array();
			}

			$query = $this->db->get_where('news', array('slug' => $slug));
			return $query->row_array();
	}#end get_news()
    */
	
}#end Customer_model