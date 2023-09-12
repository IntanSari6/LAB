<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestLoansController extends Controller
{
    public function requestLoans()
    {
        return view('requestLoans.index');
    }
    public function request()
    {
        return view('requestLoans.request');
    }
}
