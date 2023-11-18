<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show($name)
        {
            return view('client', [
                'client' => Client::where('name', '=', $name)->first()
            ]);
        }
    }
