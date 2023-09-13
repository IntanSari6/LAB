<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryLab;

class ManageInventoryController extends Controller
{
    public function manage_lab_inventory()
    {
        return view('manage_lab_inventory.index');
    }
    public function lab1()
    {
        return view('manage_lab_inventory.lab1');
    }
    public function lab2()
    {
        return view('manage_lab_inventory.lab2');
    }

    function create1(){
        return view('manage_lab_inventory.create1');
    }

    public function detail()
    {
        return view('manage_lab_inventory.detail');
    }

    function create(){
        return view('manage_lab_inventory.create');
    }

    function input(Request $request){
        $user= new InventoryLab;
        $user->nama_barang = $request->nama_barang;
        $user->kode_barang = $request->kode_barang;
        $user->status = $request->status;
        $user->save();
        return redirect('/tampil');
    }

    function tampil(){
        $data = InventoryLab::all();
        dd($data);
        return view('lab_1', compact (['data']));
    }

    function edit($id){
        $data = InventoryLab::whereId($id)->first();
        return view('edit', compact(['data']));
    }

}
