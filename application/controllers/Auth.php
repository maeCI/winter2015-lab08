<?php

/**
 * Controller for authentication. 
 * 
 * controllers/Auth.php
 * 
 * @author maecst
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

    function login() {
        $key = $_POST['userid'];
        $user = $this->users->get($key);

        //var_dump($user);
        //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //var_dump($password);
        
        $match = password_verify($_POST['password'], $user->password);
        var_dump($match);

        if ($match) {
            echo 'yay it matches :)';
            $this->session->set_userdata('userID', $key);
            $this->session->set_userdata('userName', $user->name);
            $this->session->set_userdata('userRole', $user->role);            
        }
        redirect('/');
    }
    
    function logout() {
        
        $this->session->sess_destroy();
        echo 'logging out...';
        redirect('/');
    }
}
