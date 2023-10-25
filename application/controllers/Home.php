<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function getData()
	{
		$types = $_GET["types"];
		// if($lastTime == 0)
		// {
			
			$query = "
			WITH cte AS (
				select * from data_foot 
				where columnA = '".$types."'
				order by created_at desc limit 10
			)
			SELECT	* FROM cte order by created_at asc;";
		// }else{
		// 	$times = date("Y-m-d H:i:s", $lastTime);
		// 	$query = "
		// 	WITH cte AS (
		// 		select * from data_foot
		// 		 where columnA = '".$types."' AND created_at > '".$times."' 
		// 		 order by created_at desc limit 1
		// 	)
		// 	SELECT	* FROM cte order by created_at asc;";
		// 	// var_dump($query);;
		// }
        $alldata = $this->db->query($query)->result();

		$dataPoints = array();
		$i=1;
		$values = 0;
		foreach ($alldata as $value) {
			$date=date_create( $value->created_at);
			$resultData = ($value->data/100)*2;
			array_push($dataPoints, array("x" => $i, "y" => intval($resultData), "z"=> strtotime( $value->created_at)));
			$values += $value->data;
			$i+=1;
		}
		

        echo json_encode($dataPoints, true);
	}
}
