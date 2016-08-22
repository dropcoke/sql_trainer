<?php
class MY_Model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function get_by_sql ($sql) {
        try {
            $query = $this->db->query($sql);
            if (!is_bool($query)) {
                return $query->result_array();
            } else {
                return $query;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}