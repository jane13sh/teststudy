<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Simple_model extends CI_Model
{

    public function __construct()
    {  parent::__construct();

        $this->load->database();
    }

	public function index()
	{
		$this->load->database();
	}
    public function menucreatecocktail($data)
    {
    	$ig1 = $data[1]["ingredient1"];
		$ig2 = $data[1]["ingredient2"];
		$ig3 = $data[1]["ingredient3"];
        $this->load->database();
        $query = $this->db->insert('cocktails', $data[0]);
		$id = $query = $this->db->query('Select max(`id`)  from `cocktails`');
		$id = $query->result_array();
		$id1 = $query = $this->db->query("SELECT * FROM `ingredients` WHERE ingredient_name = '" . $data[1]["ingredient1"] . "'");
		$id1 = $query->result_array();
		$id2 = $query = $this->db->query("SELECT * FROM `ingredients` WHERE ingredient_name = '" . $data[1]["ingredient2"] . "'");
		$id2 = $query->result_array();
		$id3 = $query = $this->db->query("SELECT * FROM `ingredients` WHERE ingredient_name = '" . $data[1]["ingredient3"] . "'");
		$id3 = $query->result_array();


		$query = $this->db->query("INSERT INTO `cocktails_ingredients`(`cocktail_id`, `ingredient_id`) VALUES ( '" . $id[0]["max(`id`)"] . "',  '" . $id1[0]['id'] . "')");
		//$query->result_array();
        $query = $this->db->query("INSERT INTO `cocktails_ingredients`(`cocktail_id`, `ingredient_id`) VALUES ( '" . $id[0]["max(`id`)"] . "',  '" . $id2[0]['id'] . "')");
		//$query->result_array();
        $query = $this->db->query("INSERT INTO `cocktails_ingredients`(`cocktail_id`, `ingredient_id`) VALUES ( '" . $id[0]["max(`id`)"] . "',  '" . $id3[0]['id'] . "')");

	}


	public function getcocktailscount()
	{
		$this->load->database();
        $query = $this->db->query("SELECT COUNT(*) from cocktails");
		$query->result_array();
		return $query->result_array();
	}
	public function getcocktailsids()
	{

		$this->load->database();
		$query = $this->db->query("SELECT id from cocktails");
		$query->result_array();
		return $query->result_array();

	}

	public function menuviewingrediets($cocktail_id)
	{

		$this->load->database();
		$query = $this->db->query("SELECT ingredients.ingredient_name from cocktails_ingredients
join ingredients on cocktails_ingredients.ingredient_id = ingredients.id
where cocktail_id = '" . $cocktail_id . "'");


		$query->result_array();
		return $query->result_array();
		$query->result_array();
		return $query->result_array();
	}


	public function menuviewcocktailsname($cocktail_id)
	{

		$this->load->database();
		$query = $this->db->query("
		select cocktail_name, price
        from cocktails
        where cocktails.id = '" .  $cocktail_id . "'");
		$query->result_array();
		return $query->result_array();
	}

	public function menucreategetingredients()
	{
		$this->load->database();
		$query = $this->db->query(
			"SELECT * from ingredients");
		$query->result_array();
		return $query->result_array();
		$query->result_array();
		return $query->result_array();
	}

}
