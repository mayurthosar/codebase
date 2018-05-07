<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mvc extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$header['title'] = "MVC";
		$this->loadLayout('index',$header);		
	}
	public function loadLayout($view,$headerData,$sidebarData = null ,$mainContent = null,$footerData = null)
	{
		$this->load->view('layout/default/head',$headerData);
		$this->load->view('layout/default/sidebar',$sidebarData);
		$this->load->view('mvc_creator/'.$view,$mainContent);
		$this->load->view('layout/default/footer',$footerData);
	}
}
