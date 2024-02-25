<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class VendorController extends Controller
{
    public function index()
    {

        // return 'Страница списка постов';

        return view('vendors.index');
    }

    public function create()
    {

        return 'Страница создания поста';
    }

    public function store()
    {

        return 'Запрос создания поста';
    }

    public function show($vendor)
    {

        return "Страница просмотра поста #{$vendor}";
    }

    public function edit($vendor)
    {

        return "Страница изменения поста #{$vendor}";
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

            $data = Vendor::where('id', 'ILIKE', '%' . $request->search . '%')
                ->orwhere('name', 'ILIKE', '%' . $request->search . '%')
                ->orwhere('agent_email', 'ILIKE', '%' . $request->search . '%')->get();

            $formField = "'#vendor_id'";
            $clientField = "'#vendor_name'";
            $output = '';

            if (count($data) > 0) {
                $output = '
                    <table class="table table-bordered table-hover col">
                    <thead>
                    <tr class="thead-light">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Agent Email</th>
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
            } else {
                $output .= 'No results';
            }
            return $output;
        }
    }
}
