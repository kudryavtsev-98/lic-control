<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index() {

        // return 'Страница списка постов';

        return view('purchases.index');

    }

    public function create()  {

        return 'Страница создания поста';
        
    }

    public function store() {

        return 'Запрос создания поста';
        
    }

    public function show($purchase) {

        return "Страница просмотра поста #{$purchase}";
        
    }

    public function edit($purchase) {

        return "Страница изменения поста #{$purchase}";
        
    }

    public function update() {

        return 'Запрос на изменение поста';
        
    }

    public function delete() {

        return 'Запрос на удаление поста';
        
    }
}
