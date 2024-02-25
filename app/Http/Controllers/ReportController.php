<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {

        // return 'Страница списка отчетов';

        return view('reports.index');

    }

    public function create()  {

        return 'Страница создания отчета';
        
    }

    public function store() {

        return 'Запрос создания отчета';
        
    }

    public function show($report) {

        return "Страница просмотра отчета #{$report}";
        
    }

    public function edit($report) {

        return "Страница изменения отчета #{$report}";
        
    }

    public function update() {

        return 'Запрос на изменение отчета';
        
    }

    public function delete() {

        return 'Запрос на удаление отчета';
        
    }
}
