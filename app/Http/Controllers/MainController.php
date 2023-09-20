<?php

namespace App\Http\Controllers;

use App\Models\Reqloans;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function manage_schedule(Request $request)
    {
        $reqloan = Reqloans::find($request->reqloan);
        return view('manage_schedule.index', compact('reqloan'));
    }

    public function request()
    {
        return view('requestLoans.request');
    }
}
