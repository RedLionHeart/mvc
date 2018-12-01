<?php
namespace Core;
use Mysqli;
class Model{
    public static function getDB(){
        $db = new Mysqli('localhost','root','','lesson12');
        return $db;
    }
}
?>