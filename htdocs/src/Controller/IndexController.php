<?php

class IndexController extends Controller {

    private $view = false;

    public function __construct() {
        $this->view = new IndexView();
    }

    public function indexAction() {
        $this->setRoute($this->view->getLogonRoute());

        $this->showView();

        return;
    }

    public function homeAction() {
        $this->setRoute($this->view->getIndexRoute());

        $userDao = new UserDao();
        $newsDao = new NewsDao();

        $viewModel = array('userArray' => $userDao->getAll(), 'newsArray' => $newsDao->getAll());

        $this->showView($viewModel);

        return;
    }

    public function accountAction() {
        $this->setRoute($this->view->getAccountRoute());

        $viewModel = array('headerAccount' => 'account');

        $this->showView($viewModel);

        return;
    }

    public function pagAction() {

        $obj = $_POST['Valor'];

        $viewModel = $_POST;

        $this->setRoute($this->view->getPagRoute());

        $this->showView($viewModel);
    }

    public function getView() {
        return $this->view;
    }

}
