<?php

function __autoload($class) {
    switch ($class) {

        case 'Message':
            require_once('system/Message.php');
            break;
        /* CONTROLLERS */
        case 'Controller':
            require_once('system/Controller.php');
            break;
        case 'IndexController':
            require_once('src/Controller/IndexController.php');
            break;
        case 'AuthenticateController':
            require_once('src/Controller/AuthenticateController.php');
            break;
        case 'UserController':
            require_once('src/Controller/UserController.php');
            break;
		case 'NewsController':
            require_once('src/Controller/NewsController.php');
            break;

        /* VIEWS */
        case 'IndexView':
            require_once('src/View/IndexView.php');
            break;
        case 'AuthenticateView':
            require_once('src/View/AuthenticateView.php');
            break;
        case 'UserView':
            require_once('src/View/UserView.php');
            break;
		case 'NewsView':
            require_once('src/View/NewsView.php');
            break;

        /* DAO */
        case 'AuthenticateDao':
            require_once('src/Dao/AuthenticateDao.php');
            break;
        case 'UserDao':
            require_once('src/Dao/UserDao.php');
            break;
        case 'NewsDao':
            require_once('src/Dao/NewsDao.php');
            break;

        /* MODEL */
        case 'User':
            require_once('src/Model/User.php');
            break;
        case 'News':
            require_once('src/Model/News.php');
            break;
    }
	
}
