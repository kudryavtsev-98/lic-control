<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LicenseController extends Controller
{


    public function index()
    {
        // return 'Страница списка постов';
        $license = (object) [
            "id" => 32,
            "name" => 'lic_1',
            "product" => 'prod_1',
            "product_version" => 'prod_v_1',
            "purchase" => 'purchase_1',
            "type" => 'type_1',
            "metric" => 'metric_1',
        ];
        $licList = array_fill(0, 10, $license);

        // dd($licList);

        return view('licenses.index', compact('licList'));
    }

    public function create()
    {
        return view('licenses.create');
    }

    public function store()
    {
        return 'Запрос создания поста';
    }

    public function show($license)
    {

        $info = (object) [

            // sql запрос

            //Полученный GET запрос
            "id" => 32,
            "name" => 'lic_1',
            "product" => 'prod_1',
            "product_id" => '33',
            "version" => 'prod_v_1',
            "version_id" => '1',
            "type" => 'type_1',
            "metric" => 'metric_1',
            "expiration_date" => date(now()),

            // Бухгалтерская информация
            "purchase" => 'purchase_1',
            "purchase_id" => '1',
            "dealer" => 'dealer_1',
            "dealer_id" => '1',

            // Расположение
            "key" => 'key_1',
            "key_id" => '1',
            "key_type" => 'key_type_1',
            "host" => 'host_1',
            "host_id" => '1',

            //Дополнительно
            "note" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt mauris sit amet neque placerat, eu ullamcorper justo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',

        ];

        return view('licenses.show', compact('info'));

        // return "Страница просмотра поста #{$license}";

    }

    public function edit($license)
    {

        $info = (object) [

            // sql запрос

            //Полученный GET запрос
            "id" => 32,
            "name" => 'lic_1',
            "product" => 'prod_1',
            "product_id" => '33',
            "version" => 'prod_v_1',
            "version_id" => '1',
            "type" => 'type_1',
            "metric" => 'metric_1',
            "expiration_date" => date(now()),

            // Бухгалтерская информация
            "purchase" => 'purchase_1',
            "purchase_id" => '1',
            "dealer" => 'dealer_1',
            "dealer_id" => '1',

            // Расположение
            "key" => 'key_1',
            "key_id" => '1',
            "key_type" => 'key_type_1',
            "host" => 'host_1',
            "host_id" => '1',

            //Дополнительно
            "note" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt mauris sit amet neque placerat, eu ullamcorper justo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',

        ];

        return view('licenses.edit', compact('info'));
    }

    public function update($license)
    {

        // return 'Запрос на изменение поста';

        $info = (object) [

            // sql запрос

            //Полученный GET запрос
            "id" => 32,
            "name" => 'lic_1',
            "product" => 'prod_1',
            "product_id" => '33',
            "version" => 'prod_v_1',
            "version_id" => '1',
            "type" => 'type_1',
            "metric" => 'metric_1',
            "expiration_date" => date(now()),

            // Бухгалтерская информация
            "purchase" => 'purchase_1',
            "purchase_id" => '1',
            "dealer" => 'dealer_1',
            "dealer_id" => '1',

            // Расположение
            "key" => 'key_1',
            "key_id" => '1',
            "key_type" => 'key_type_1',
            "host" => 'host_1',
            "host_id" => '1',

            //Дополнительно
            "note" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt mauris sit amet neque placerat, eu ullamcorper justo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',

        ];

        return view('licenses.update', compact('info'));
    }

    public function delete()
    {

        return 'Запрос на удаление поста';
    }
}
