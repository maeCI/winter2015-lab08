<?php

/**
 * Our homepage. 
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Auth extends Application {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    //-------------------------------------------------------------
    //  Homepage: show home-y stuff
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'login';
        $this->render();
    }

}
