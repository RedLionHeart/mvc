<?php 

namespace App\Models;

use Core\Model;
use Mysqli;

class User extends Model{
    public static function getAll(){
        $db = Model::getDB();
        $result = $db ->query('SELECT * FROM users');
        return $result;
    }
}


?>