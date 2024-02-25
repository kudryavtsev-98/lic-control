<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {

        // return 'Страница входа в систему';
        return view('login.index');

    }

    public function store() {

        return 'Запрос на вход в систему';

    }

}
