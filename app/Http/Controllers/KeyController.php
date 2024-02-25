<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeyController extends Controller
{
    public function index() {

        // return 'Страница списка постов';

        return view('keys.index');

    }

    public function create()  {

        return 'Страница создания поста';
        
    }

    public function store() {

        return 'Запрос создания поста';
        
    }

    public function show($key) {

        return "Страница просмотра поста #{$key}";
        
    }

    public function edit($key) {

        return "Страница изменения поста #{$key}";
        
    }

    public function update() {

        return 'Запрос на изменение поста';
        
    }

    public function delete() {

        return 'Запрос на удаление поста';
        
    }
}
