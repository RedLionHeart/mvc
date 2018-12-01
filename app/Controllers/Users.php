<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;


class Users {

    public function index()
    {
        $users = User::getAll();
        View::render('user/index.php',[
            'users' => $users
        ]);
    }
}