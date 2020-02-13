<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calendar;

class CalendarController extends Controller
{
    public function record(Request $request)
    {
        //記録のデータを取得
        $list = Calendar::all();
        return view('admin.profile.record' , ['list' => $list]);
    }
    
    public function postrecord(Request $request)
    {
        //POSTで受信した記録のデータの登録
        $calendar = new Calendar();
        $calendar->day = $repuest->day;
        $calendar->description = $request->description;
        $calendar->save();
        
    }
}
