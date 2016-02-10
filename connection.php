<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 09.02.16
 * Time: 21:09
 */

class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=micro', 'root', '', $pdo_options);
        }
        return self::$instance;
    }
}
?>