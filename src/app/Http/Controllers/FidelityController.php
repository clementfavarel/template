<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FidelityController extends Controller
{
    public function index()
    {
        return view(view: 'fidelity');
    }
}
