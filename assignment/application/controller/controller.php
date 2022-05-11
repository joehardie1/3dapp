<?php
class Controller {

	public $load;
	public $model;
	
	function __construct($pageURI = null)
	{
		$this->load = new Load(); 
		$this->model = new Model();
		$this->$pageURI();
	}

	function home()
	{
		$data = $this->model->dbGetData();
		$this->load->view('viewApp', $data);
	}

	function apiCreateTable()
	{
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}

	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  

	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppdata', $data);
	}  

	function apiGetJson()
	{
		$this->load->view('viewJson');
	}

	function apiLoadImage()
	{
	   $data = $this->model->dbGetBrand();
	   $this->load->view('viewDrinks', $data);
	}
	
	function dbCreateTable()
	{
		echo "Create Table Function";
	}

	function dbInsertData()
	{
		echo "Data Insert Function";
	}

	function dbGetData()
	{
		return array("-", "Coke", "Oasis", "Fanta");
	}

}
?>    