<?php
class Table_model extends My_Model {
    
    public function get() {
        $sql = "select
                  relname AS table_name 
                from
                  pg_stat_user_tables 
                  where relname != 'log_sql'
                order by
                  relname asc";
        return $this->get_by_sql($sql);
    }
    
    public function get_columns ($table_name) {
        $sql = "select
                  column_name,
                  data_type,
                  character_maximum_length as size
                from
                  information_schema.columns 
                where
                  table_name = " . $this->db->escape($table_name) 
                . "order by
                  ordinal_position";
        return $this->get_by_sql($sql);
    }
}
