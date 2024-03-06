<?php

namespace App\Http\Controllers\DataTables;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

//model
use App\Models\User;

class UsersDataTables extends Controller
{

    public function __construct()
    {
        //
    }

    function getTabelDaerah(){

        $users = User::all();

        $i = 1;
        foreach ($users as $row)
        {
            $btnEdit = "<a href='".route('users.edit', ['id' => $row->id])."'><i class='fas fa-pencil-alt ms-text-primary'></i></a>";
            // $btnDelete = "<a href='".route('daerah.destroy', ['id' => $row->id])."' onclick=\"event.preventDefault(); document.getElementById('delete-form-{$row->id}').submit();\"><i class='far fa-trash-alt ms-text-danger'></i></a> ";

            // // Ini harus disimpan dalam variabel atau echo untuk menampilkan form di HTML.
            // $deleteForm = "<form id='delete-form-{$row->id}' action='".route('daerah.destroy', ['id' => $row->id])."' method='POST' style='display: none;'>";
            // $deleteForm .= csrf_field();
            // $deleteForm .= "</form>";

            // $btn = $btnEdit.' '.$btnDelete.$deleteForm;

            $tbody      = [];
            $tbody[]    = $i++;
            $tbody[]    = $row->nama;
            $tbody[]    = $row->npp;
            $tbody[]    = $row->npp_supervisor;
            $tbody[]    = $row->role->nama;
            $tbody[]    = $btnEdit;

            $data[]     = $tbody;
        }

        // if ($daerah != null)
        if (count($users) > 0)
        {
            $response = [
                'data'      => $data,
            ];
            echo json_encode($response);
        }else{
            $response = [
                'data'      => '',
            ];
            echo json_encode($response);
        }
    }
}
