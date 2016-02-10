<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 09.02.16
 * Time: 21:09
 */

    require_once('connection.php');

    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
        $lang       = $_GET['lang'];
    } else {
        $controller = 'user';
        $action     = 'form';
        $lang       = 'english';
    }
    require_once('views/layout.php');
?>