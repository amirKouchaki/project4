<?php

namespace app\models;
use app\config\Database;

class User
{
    public function __construct()
    {

    }
    public static function create(array $attributes){
       $stmt = Database::$connection->prepare('INSERT INTO users VALUES(
                   :first_name,
                   :last_name,
                   :username,
                   :password)
        ');
       $stmt->bindValue(':first_name',htmlentities(strip_tags($attributes['first_name'])));
       $stmt->bindValue(':last_name',htmlentities(strip_tags($attributes['last_name'])));
       $stmt->bindValue(':username',htmlentities(strip_tags($attributes['username'])));
       $stmt->bindValue(':password',crypt(htmlentities(strip_tags($attributes['password'])),''));
       $stmt->execute();
    }

}