<?php
class Log_sql_model extends My_Model {
    
    public function insert($sql) {
        $field_data = array(
           'created_at' => date('Y-m-d H:i:s'),
           'host' => $_SERVER['REMOTE_ADDR'],
           'user_agent' => $_SERVER['HTTP_USER_AGENT'],
           'sql' => $sql
        );
        $this->db->insert('log_sql', $field_data);
    }
}