<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        // return 'Страница списка постов';

        return view('products.index');
    }

    public function create()
    {

        return 'Страница создания поста';
    }

    public function store()
    {

        return 'Запрос создания поста';
    }

    public function show($product)
    {

        return "Страница просмотра поста #{$product}";
    }

    public function edit($product)
    {

        return "Страница изменения поста #{$product}";
    }

    public function update()
    {

        return 'Запрос на изменение поста';
    }

    public function delete()
    {
        return 'Запрос на удаление поста';
    }

    public function search(Request $request)
    {

        if ($request->ajax()) {

            $data = Product::where('id', 'ILIKE', '%' . $request->search . '%')
                ->orwhere('name', 'ILIKE', '%' . $request->search . '%')
                ->orwhere('vendor_id', 'ILIKE', '%' . $request->search . '%')->get();

            $formField = "'#product_id'";
            $clientField = "'#product_name'";
            $output = '';

            if (count($data) > 0) {
                $output = '
                    <table class="table table-bordered table-hover col">
                    <thead>
                    <tr class="thead-light">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">vendor_id</th>
                    </tr>
                    </thead>
                    <tbody>';
                foreach ($data as $row) {
                    $output .= '
                        
                            <tr value="' . $row->name . '" style="cursor: pointer;"  data-dismiss="modal" onclick=$(' . $formField . ').val(' . $row->id . ');$(' . $clientField . ').val($(this).attr("value"))' . ';' . '>
                                
                                <th scope="row">' . $row->id . '</th>
                                <td>' . $row->name . '</td>
                                <td>' . $row->vendor_id . '</td>
                            </tr>';
                }
                $output .= '
                    </tbody>
                    </table>';
            } else {
                $output .= 'No results';
            }
            return $output;
        }
    }
}
