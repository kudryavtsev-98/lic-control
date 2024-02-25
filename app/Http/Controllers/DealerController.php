<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealerController extends Controller
{
    
    public function index() 
    
    {

        return view('dealers.index');

    }

    public function create() 
    
    {

        return 'Страница создания дилера';
        
    }

    public function store() 
    
    {

        return 'Запрос создания дилера';
        
    }

    public function show($host) 
    
    {

        return "Страница просмотра дилера #{$host}";
        
    }

    public function edit($host) 
    
    {

        return "Страница изменения дилера #{$host}";
        
    }

    public function update() 
    
    {

        return 'Запрос на изменение дилера';
        
    }

    public function delete() 
    
    {

        return 'Запрос на удаление дилера';
        
    }

}
