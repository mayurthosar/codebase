<?php
/**
 * Created by PhpStorm.
 * User: mayur
 * Date: 5/10/2018
 * Time: 1:07 AM
 */

/**
 * @param array $template : set table template i.e table name cellspacing, cell padding and table attribute
 * @param array $heading : set table headers
 * @param array $data : data to be load in table
 * @return mixed
 */
function tableInput($template = array(),$heading = array(),$data = array())
{
    $ci =& get_instance();
    $ci->table->set_template($template);
    $ci->table->set_heading($heading);

    foreach($data as $key =>$value)
    {
        $ci->table->add_row(array($value->name, $value->type,
            "<select class='form-control' name='form[inList][]'>
                <option value=".$value->name."@Yes>Yes</option>
                <option value=".$value->name."@No>No</option></select>",
            "<select class='form-control' name='form[inForm][]'>
                <option value=".$value->name."@Yes>Yes</option>
                <option value=".$value->name."@No>No</option></select>",
            "<select class='form-control' name='form[isSearchable][]'>
                <option value=".$value->name."@Yes>Yes</option>
                <option value=".$value->name."@No>No</option></select>",
            "<select class='form-control' name='form[isSortable][]'>
                <option value=".$value->name."@Yes>Yes</option>
                <option value=".$value->name."@No>No</option></select>"));
    }

    return  $ci->table->generate();
}

/**
 * @param $table : table name
 * @param $key : id of the table
 * @param $field : field to get
 * @param array $attributes : additional attribute like class and id
 * @param array $options other attributes
 * @param array $where where condition in array
 */
function tableReferenceList($table,$key,$field,$attributes = array(),$options = array(),$where = array())
{
    $ci =& get_instance();
    return $ci->db->get('users');
}

