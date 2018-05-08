<?php
/**
 * Created by PhpStorm.
 * User: mayur
 * Date: 5/9/2018
 * Time: 1:29 AM
 */

class Mvc_Model extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function __construct()
    {
        parent::__construct();
    }

    public function connectDB()
    {
        $db['dynamic'] = array(
            'dsn'	=> '',
            'hostname' => $this->input->post('db_host'),
            'username' => $this->input->post('db_user'),
            'password' => $this->input->post('db_password'),
            'database' => $this->input->post('db_name'),
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => FALSE,
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
        );

        $this->load->database($db['dynamic']);
        $query = $this->db->field_data($this->input->post('table_name'));
        return $query;
    }

    public function getStructure()
    {
        echo json_encode($this->connectDB());
    }




}