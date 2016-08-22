<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_browse extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('table_model');
        $this->load->model('data_model');
    }
    public function index() {
        $data['table'] = $this->table_model->get();
        $data['title'] = 'Welcome to the SQL World!';
        $this->page_loader('db_browse/index', $data);
    }
    public function data_list() {
        if($this->input->get('table_name') == null) {
            redirect('/');
            return;
           
        } else {
            $data['rows'] = $this->data_model->get($this->input->get('table_name'));
            if (is_bool($data['rows'])) {
                redirect('/');
                return;
            }
            $data['title'] = $this->input->get('table_name');
            $data['columns'] = $this->table_model->get_columns($this->input->get('table_name'));
            $data['table_name'] = $this->input->get('table_name');
            $this->page_loader('db_browse/data_list', $data);
        }
    }
    public function column_list() {
        if($this->input->get('table_name') == null) {
            redirect('/');
            return;
           
        } else {
            $data['rows'] = $this->table_model->get_columns($this->input->get('table_name'));
            if (is_bool($data['rows'])) {
                redirect('/');
                return;
            }
            $data['title'] = $this->input->get('table_name');
            $data['table_name'] = $this->input->get('table_name');
            $this->page_loader('db_browse/column_list', $data);
        }
    }
}