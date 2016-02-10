<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 09.02.16
 * Time: 21:09
 */

class UserController {
    public function index() {
        $users = User::all();
        require_once('views/user/index.php');
    }

    public function form() {
        if (!($lang = $_GET['lang']))
                $lang = 'english';
        require_once('views/user/form.php');
    }

    public function register() {
        $user = new User(0,
                $_GET['name'],
                $_GET['username'],
                $_GET['password'],
                $_GET['email'],
                $_GET['address']);
        $result = User::register($user);
        if ($result == 'success') {
            echo "OK";
            $users = User::all();
            require_once('views/user/index.php');
        } else {
            echo $result;
            require_once('views/pages/error.php');
        }
    }

    public function show() {
        if (!isset($_GET['id']))
            return call('pages', 'error');

        $user = User::find($_GET['id']);
        require_once('views/user/show.php');
    }
}
?>