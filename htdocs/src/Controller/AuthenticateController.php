<?php

class AuthenticateController extends Controller {

    public function __construct() {
        $this->view = new AuthenticateView();
    }

    public function indexAction() {
        return;
    }

    public function googleAction() {
        $obj = $_POST['User'];
        
        if (!empty($obj)) {
            $_SESSION['USER'] = serialize($obj);

            $userDao = new UserDao();
            $newsDao = new NewsDao();

            $viewModel = array('userArray' => $userDao->getAll(), 'newsArray' => $newsDao->getAll());
            
            $this->setRoute($this->view->getIndexRoute());
        } else {

            $viewModel = null;
        }

        $this->showView($viewModel);
    }

    public function logonAction() {
        $authenticateDao = new AuthenticateDao();

   

        $username = array_key_exists('username', $_REQUEST) ? $_REQUEST['username'] : '';

        $password = array_key_exists('password', $_REQUEST) ? $_REQUEST['password'] : '';

        $userDao = new UserDao();
        $newsDao = new NewsDao();


        if (($user = $authenticateDao->authenticate($username, $password))) {
            $_SESSION['USER'] = serialize($user);

            $viewModel = array('userArray' => $userDao->getAll(), 'newsArray' => $newsDao->getAll());

            $this->setRoute($this->view->getIndexRoute());
        } else {
           

            $viewModel = null;

            $this->setRoute($this->view->getLogonRoute());
        }

        $this->showView($viewModel);

        return;
    }

    public function logoffAction() {
        if(isset($_SESSION['USER']))
        unset ($_SESSION['USER']);
        
        session_destroy();
        $this->setRoute($this->view->getLogonRoute());

        $this->showView();


        return;
    }

}
