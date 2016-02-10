<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 09.02.16
 * Time: 21:09
 */

class User {
    public $id;
    public $name;
    public $username;
    public $email;
    public $password;
    public $address;

    function __construct($id, $name, $username, $password, $email, $address)
    {
        $this->address = $address;
        $this->email = $email;
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->username = $username;
    }

    public static function register($user) {
        $db = Db::getInstance();
        try {
            $req = $db->prepare('INSERT INTO user(name,username,password,email,address)
                                        VALUES(:name, :username, :password, :email, :address)');
            $req->execute(array(
                ':name' => $user->name,
                ':username' => $user->username,
                ':password' => $user->password,
                ':email' => $user->email,
                ':address' => $user->address));
            return 'success';
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM user');

        foreach($req->fetchAll() as $user) {
        $list[] = new User($user['id'], $user['name'], $user['username'], $user['email'], $user['address']);
        }

        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM user WHERE id = :id');
        $req->execute(array('id' => $id));
        $user = $req->fetch();

        return new User($user['id'], $user['name'], $user['username'], $user['email'], $user['address']);
    }
}
?>