<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function inventory()
    {
        return view('inventory.index');
    }
    public function lab_1()
    {
        return view('inventory.lab_1');
    }
    public function lab_2()
    {
        return view('inventory.lab_2');
    }
}
