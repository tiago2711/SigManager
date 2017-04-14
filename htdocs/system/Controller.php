<?php

class Controller {

    private $view = false;
    private $route;

    public function __contruct() {
        
    }

    public function showView($viewModel = false) {

        $headerAccount = 'admin';
        if ($viewModel)
            foreach ($viewModel as $key => $value) {

                eval('global $' . $key . ' ;');
                eval('$' . $key . ' = $value;');
            }



        $_USER = isset($_SESSION['USER']) ? unserialize($_SESSION['USER']) : false;

        if ($_USER)
            include('view/' . $headerAccount . '/header.php');

        include("view/helper/message.php");

        echo '<div class="switchPage">';

        include("view/" . $this->getRoute());

        echo '</div>';

        include('view/admin/footer.php');
    }

    public function getView() {
        return $this->view;
    }

    public function setRoute($route) {
        $this->route = $route;
    }

    public function getRoute() {
        return $this->route;
    }

}
