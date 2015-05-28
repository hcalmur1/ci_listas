<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desplegables extends CI_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('test');
	}

	function index()
	{
		$data['titulo'] = "Listas dependientes usando Codeigniter, JQuery, JSON, javascript, HTML5 y CSS3";
		$data['deptos'] = $this->test->devolver_departamento();
		$this->load->view('listas', $data);
	}

	function provincias()
	{
		echo 'entra';
		$coddep = $this->input->get('id');
		$this->test->devolver_provincias($coddep);
	}
}