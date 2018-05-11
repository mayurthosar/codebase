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

	public function __construct()
    {
        parent::__construct();

        $this->load->database('database');
    }

    public function index()
	{
		$header['title'] = "MVC";
		$this->loadLayout('index',$header);		
	}

    /**
     * to create mvc crud laypout
     */
    public function create()
    {
        $this->load->model('Mvc_Model');
        $result = $this->Mvc_Model->getStructure();

        $header['title'] = "MVC | Generate Table";
        $table['mainContent'] = tableInput(array('table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table wy-table-responsive">'
        ),array('Field', 'Type','Show in List View','Show in Form','Searchable','Sortable'),$result);


        $this->loadLayout('generate',$header,$table);
    }

    /**
     *
     */
    public function generate_crud()
    {
//      echo json_encode($this->input->post());
        $this->load->helper('table');
        echo json_encode(tableReferenceList('','','','','',''));
    }
     /**
     * @param $view view file to load
     * @param $headerData data to pass to head of the document
     * @param null $mainContent data to pass view page
     * @author Mayur
     */

	public function loadLayout($view,$headerData,$mainContent = null)
	{
		$this->load->view('layout/default/head',$headerData);
		$this->load->view('layout/default/sidebar');
		$this->load->view('mvc_creator/'.$view,$mainContent);
		$this->load->view('layout/default/footer');
	}

}
