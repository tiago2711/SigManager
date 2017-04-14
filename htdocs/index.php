<?php

try {
    require ('config/autoload.php');
    require ('config/config.inc.php');
    require ('config/connect.php');

    session_start();

    $_REQUEST['controller'] = !isset($_REQUEST['controller']) ? 'Index' : $_REQUEST['controller'];

    $_REQUEST['action'] = !isset($_REQUEST['action']) ? 'index' : $_REQUEST['action'];

    $_REQUEST['target'] = !isset($_REQUEST['target']) ? NULL : $_REQUEST['target'];

    switch ($_REQUEST['target']) {
        case 'ws':
            $service = !isset($_REQUEST['service']) ? NULL : $_REQUEST['service'];
            if (!$service) {
                throw new Exception('Invalid Service.');
            }
            switch ($service) {
                case 'sync':
                    require('ws/sync.php');
                    break;
                default: break;
            }
            break;
        default:
            eval('$controller = new ' . $_REQUEST['controller'] . 'Controller();');

            eval('$controller->' . $_REQUEST['action'] . 'Action();');
            break;
    }
} catch (Exception $e) {
    error_log($e->getMessage());
}
