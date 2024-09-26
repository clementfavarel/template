<?php

namespace App\Http\Controllers;

use App\Models\Burger;
use App\Models\Drink;
use App\Models\Snack;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu.index');
    }

    public function burgers()
    {
        $burgers = Burger::all();
        return view('menu.burgers', compact('burgers'));
    }

    public function show(Burger $burger)
    {
        return view('menu.burgers.show', compact('burger'));
    }

    public function snacks()
    {
        $snacks = Snack::all();
        return view('menu.snacks', compact('snacks'));
    }

    public function drinks()
    {
        $drinks = Drink::all();
        return view('menu.drinks', compact('drinks'));
    }
}
