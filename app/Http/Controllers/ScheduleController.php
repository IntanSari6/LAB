<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function schedule()
    {
        return view('schedule.index');
    }
}
