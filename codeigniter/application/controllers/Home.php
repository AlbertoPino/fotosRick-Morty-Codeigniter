<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
   
	public function __construct()
	{
		parent::__construct();

		//carga modelo
		$this->load->model('home_model');
	}


	public function index()
	{

	//para pillar datos de la base de datos
	$data['images'] = $this->home_model->get_images();
	
	//carga la vista y pasa datos
	$this->load->view('home_view', $data);
   	}


}
