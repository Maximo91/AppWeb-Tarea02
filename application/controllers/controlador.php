<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controlador extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('modelo');
	}

	
	function index(){
		$this->load->view('consultas/cabecera');
		$this->load->view('consultas/index');
		$this->output->cache(60);
	}
	public function consulta_simple(){
		$consulta_simple['departmento'] = $this->modelo->consulta_simple();
		$this->load->view('consultas/cabecera');
    	$this->load->view('consultas/consulta_simple', $consulta_simple);
    	$this->output->cache(60);
	}
	public function consulta_media(){
		$consulta_media['departmento'] = $this->modelo->consulta_media();
		$this->load->view('consultas/cabecera');
		$this->load->view('consultas/consulta_media', $consulta_media);
		$this->output->cache(60);
	}
	public function consulta_compleja(){
		$consulta_compleja['Personas'] = $this->modelo->consulta_compleja();
		$this->load->view('consultas/cabecera');
		$this->load->view('consultas/consulta_compleja', $consulta_compleja);
		$this->output->cache(60);
	}
}?>