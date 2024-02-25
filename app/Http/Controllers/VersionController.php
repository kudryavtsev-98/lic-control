<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VersionController extends Controller
{
    public function index() {

        // return 'Страница списка постов';

        return view('versions.index');

    }

    public function create()  {

        return 'Страница создания поста';
        
    }

    public function store() {

        return 'Запрос создания поста';
        
    }

    public function show($version) {

        return "Страница просмотра поста #{$version}";
        
    }

    public function edit($version) {

        return "Страница изменения поста #{$version}";
        
    }

    public function update() {

        return 'Запрос на изменение поста';
        
    }

    public function delete() {

        return 'Запрос на удаление поста';
        
    }
}
