<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Calendar;
use App\Record;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        $list = Calendar::all();
        $cal = new Record($list);
        $tag = $cal->showCalendarTag($request->month, $request->year);
        return view('calendar.index',['cal_tag' => $tag]);
    }
}
