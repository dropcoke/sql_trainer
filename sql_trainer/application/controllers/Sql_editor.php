<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sql_editor extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('table_model');
        $this->load->model('data_model');
    }
    public function index() {
        $data['table_name'] = null;
        $data['message'] = null;
        $data['rows'] = false;
        $data['columns'] = null;
        $data['table'] = $this->table_model->get();
        $data['title'] = 'SQL Editor';

        $this->page_loader('sql_editor/index', $data);
    }
    public function result() {
        $data['table_name'] = null;
        $data['message'] = null;
        $data['columns'] = null;
        $sql = $this->input->post('sql_editor');
        $data['rows'] = $this->data_model->exec_sql($sql);
        if (!is_array($data['rows'])) {
            if($data['rows']) {
                $data['message'] = 'Query Commited';
            } else {
                $data['message'] = 'Query Faild';
            }
        }
        // for appearance
        $data['table'] = $this->table_model->get();
        $data['title'] = 'SQL Editor';
        $this->page_loader('sql_editor/index', $data);
    }
    public function data_list() {
        $data['message'] = null;
        $data['columns'] = null;
        $data['title'] = $this->input->get('table_name');
        $data['rows'] = $this->data_model->get($this->input->get('table_name'));
        if(count($data['rows'] == 0)) {
            $data['columns'] = $this->table_model->get_columns($this->input->get('table_name'));
        }
        $data['table_name'] = $this->input->get('table_name');
        // for appearance
        $data['table'] = $this->table_model->get();
        $data['title'] = 'SQL Editor';
        $this->page_loader('sql_editor/index', $data);
}
}
