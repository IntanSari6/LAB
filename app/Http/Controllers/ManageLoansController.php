<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageLoansController extends Controller
{
    public function manage_loans()
    {
        return view('manage_loans.index');
    }
}
