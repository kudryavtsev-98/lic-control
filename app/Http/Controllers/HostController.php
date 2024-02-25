<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostController extends Controller
{
    public function index() {

        // return 'Страница списка постов';

        return view('hosts.index');

    }

    public function create()  {

        return 'Страница создания поста';
        
    }

    public function store() {

        return 'Запрос создания поста';
        
    }

    public function show($host) {

        return "Страница просмотра поста #{$host}";
        
    }

    public function edit($host) {

        return "Страница изменения поста #{$host}";
        
    }

    public function update() {

        return 'Запрос на изменение поста';
        
    }

    public function delete() {

        return 'Запрос на удаление поста';
        
    }
}
