<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;
use App\Models\InventoryLab;

class InventoryController extends Controller
{
    public function inventory()
    {
        $lab = Lab::all();
        return view('inventory.index', [
            'inventory' => InventoryLab::all(),
            'lab' => $lab  
        ]);

    }
    public function lab_1()
    {
        return view('inventory.lab_1',[
            'inventory' => InventoryLab::all(),
        ]);
    }
    public function lab_2()
    {
        return view('inventory.lab_2');
    }
}
