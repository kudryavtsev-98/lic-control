<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
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

    public function show($dealer)

    {

        return "Страница просмотра дилера #{$dealer}";
    }

    public function edit($dealer)

    {

        return "Страница изменения дилера #{$dealer}";
    }

    public function update()

    {

        return 'Запрос на изменение дилера';
    }

    public function delete()

    {

        return 'Запрос на удаление дилера';
    }

    public function search(Request $request)
    {

        if ($request->ajax()) {

            $data = Dealer::where('name', 'ILIKE', '%' . $request->search . '%')
                // ->orwhere('id', 'ILIKE', '%' . $request->search . '%')
                // ->orwhere('agent_email', 'ILIKE', '%' . $request->search . '%')
                ->get();

            $formField = "'#dealer_id'";
            $clientField = "'#dealer_name'";
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
                        <td>' . $row->dealer_id . '</td>
                    </tr>';
                }
            } else {
                $output .= 'No results';
            }
            return $output;
        }
    }
}
