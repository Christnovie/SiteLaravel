<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function list(){
        $client = [
            'Jean',
            'Marc',
            'Virginie'
        ];
        return view("client.index",[
            'client' => $client
        ]);
    }
}
