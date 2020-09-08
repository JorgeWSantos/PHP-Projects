<?php

require 'models/UserModel.php';

class UserController
{

    public function Index(){
        include "views/User/Index.php";
    }

    public function AllUsers(){
        $model = new UserModel();
        $users = $model -> AllUsers();
        include "views/User/User.php";
    }
}