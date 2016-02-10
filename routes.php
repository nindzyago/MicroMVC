<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 09.02.16
 * Time: 21:09
 */

    function call($controller, $action) {
        require_once('controllers/' . $controller . '_controller.php');

        switch($controller) {
            case 'pages':
                $controller = new PagesController();
            break;
            case 'user':
                require_once('models/user.php');
                $controller = new UserController();
            break;
        }
        $controller->{ $action }();
    }


    $controllers = array('pages' => ['home', 'error'],
                       'user' => ['index', 'show', 'form', 'register']);

    if (array_key_exists($controller, $controllers)) {
        if (in_array($action, $controllers[$controller])) {
            call($controller, $action);
        }
        else {
            call('pages', 'error');
        }
    }
    else {
        call('pages', 'error');
    }
?>