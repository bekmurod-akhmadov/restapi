<?php
namespace restapi\controllers;

use restapi\models\User;


class UserController extends MyController
{
    public $modelClass = User::class;

}