<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;

class LabController extends Controller
{
    // public function index()
    // {
       
    //     return view('manage_lab_inventory.index', [
    //         $lab = Lab::all()
    //     ]);
    // }

    public function create1()
    {
        return view ('manage_lab_inventory.create1');
    }

    public function store(Request $request)
    {
        $lab= new Lab;
        $lab->nama_lab = $request->nama_lab;
        $lab->warna = $request->warna;
        $lab->save();
        return redirect('/show');

        // $validatedData = $request->validate([
        //     'nama_lab' => 'required',
        //     'warna' => 'required|unique:labs',
        // ]);
        // $validatedData['user_id'] = auth()->user()->id;
        // Lab::create1($validatedData);
        
    
    }

    public function show()
    {
        $lab = Lab::all();
        return view('index', compact (['lab']));
        // return $lab;
    }
}
