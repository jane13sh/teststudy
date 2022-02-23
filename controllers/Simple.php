<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Simple extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Simple_model');
	}

	public function index()
	{
		$this->load->model('Simple_model');
		$this->load->view('templates/header');
		$this->load->view('simple/index');
		$this->load->helper('form');

	}

	public function menucreate()
	{     $this->load->helper(array('form', 'url'));
		$this->load->model('Simple_model');
		$this->load->view('templates/header');
		$this->load->helper('form');
		// берем количество коктейлей
		$ingredient = $this->getingredients();
		foreach ($ingredient as $key => $value) {
			$inglist[] = $value;
		}
		$data['inglist'] = $inglist;
		$this->load->view('simple/menucreate', $data);


		// форма создания
		if (!empty($_POST)) {
			$name = $this->input->post('cocktail_name');
			$price = $this->input->post('cocktail_price');
			$i1 = $this->input->post('ingredient1');
			$i2 = $this->input->post('ingredient2');
			$i3 = $this->input->post('ingredient3');
			$data = array(
				array(
			    'cocktail_name' => mb_strtolower($name, 'UTF-8'),
				'price' => $price
				   ),
				array(
				 'ingredient1' => $i1,
				 'ingredient2' => $i2,
				 'ingredient3' => $i3

			      )
		);

			$this->Simple_model->menucreatecocktail($data);
		}

	}

	public function menuview()
	{  $this->load->helper('form');
		$this->load->view('templates/header');
		$cocktailsids = $this->Simple_model->getcocktailsids();
		$data['itogov_massiv'] = array();
			foreach ($cocktailsids as $key=>$value) {

				print_r($value['id']);
				$c[] = [$menu_cocktails = $this->Simple_model->menuviewcocktailsname($value['id']),
					$ingredients[] = $this->Simple_model->menuviewingrediets($value['id'])];
			}
		$data['itogov_massiv'] = $c;
		$this->load->view('simple/menuview', $data);
		$this->load->helper('form');
	}



   public function getingredients()
   {

	   $ingredients = $this->Simple_model->menucreategetingredients();
	   return $ingredients;
      }



	public function shop()
	{
		$this->load->helper('form');
		$this->load->view('templates/header');
		$this->load->view('simple/shop');

	}

	public function shopcard()
	{
		$this->load->helper('form');
		$this->load->view('templates/header');
		$this->load->view('simple/shopcard');
	}
}
