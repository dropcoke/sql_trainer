<?php
class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }    
    // page_loder
    protected  function page_loader($page, $data) {
        $this->load->view('header', $data);
        $this->load->view($page);
        $this->load->view('footer');
    }
}
