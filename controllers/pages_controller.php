<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 09.02.16
 * Time: 21:09
 */

  class PagesController {
        public function home() {
            require_once('views/pages/home.php');
        }
        public function error() {
            require_once('views/pages/error.php');
        }
  }
?>