<?php
class Data_model extends My_Model {
    
    public function get ($table_name) {
        $sql = "select * from {$table_name} order by id";
        return $this->get_by_sql($sql);
    }
    
    public function exec_sql ($sql) {
        $check_sql = strtolower(str_replace(' ', '', $sql));
        $exec_status = true;
        if (strpos('sql'. $check_sql, 'createtable')) {
            $exec_status = false;
        }
        if (strpos('sql'. $check_sql, 'droptable')) {
            $exec_status = false;
        }
        if (strpos('sql'. $check_sql, 'createindex')) {
            $exec_status = false;
        }
        if (strpos('sql'. $check_sql, 'dropindex')) {
            $exec_status = false;
        }
        if (strpos('sql'. $check_sql, 'createview')) {
            $exec_status = false;
        }
        if (strpos('sql'. $check_sql, 'dropview')) {
            $exec_status = false;
        }
        if (strpos('sql'. $check_sql, 'altertable')) {
            $exec_status = false;
        }
        if (strpos('sql'. $check_sql, 'createfunction')) {
            $exec_status = false;
        }
        if (strpos('sql'. $check_sql, 'dropfunction')) {
            $exec_status = false;
        }
        if (!$exec_status) {
            return false;
        }
        $this->load->model('log_sql_model');
        $this->log_sql_model->insert($sql);
        return $this->get_by_sql($sql);
    }
    
}