<?php

class IndexController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Handles what happens when user moves to URL/index/index - or - as this is the default controller, also
     * when user moves to /index or enter your application at base level
     */
    public function index()
    {
        $this->View->render('index/index');
    }
    /**
     * Register page
     * Show the register form, but redirect to main-page if user is already logged-in
     */
    public function register()
    {
        if (LoginModel::isUserLoggedIn()) {
            Redirect::home();
        } else {
            $this->View->render('register/index');
        }
    }
    /**
     * Index, default action (shows the login form), when you do login/index
     */
    public function login()
    {
        // if user is logged in redirect to main-page, if not show the view
        if (LoginModel::isUserLoggedIn()) {
            Redirect::home();
        } else {
            $data = array('redirect' => Request::get('redirect') ? Request::get('redirect') : NULL);
            $this->View->render('login/index', $data);
        }
    }
	
}
