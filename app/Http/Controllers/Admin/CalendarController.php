<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calendar;
use App\Record;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function record(Request $request)
    {
        //記録のデータを取得
        $list = Calendar::all();
        return view('admin.calendar.record' , ['list' => $list]);
    }
    
    public function postrecord(Request $request)
    {
        //POSTで受信した記録のデータの登録
        $calendar = new Calendar();
        $form = $request->all();
        unset($form['_token']);
        $calendar->fill($form);
        $calendar->save();
        $list = Calendar::all();
        return view('admin.calendar.record', ['list' => $list]);
        
    }
    public function index(Request $request)
    {
    $list = Calendar::all();
    $cal = new Record();
    $tag = $cal->showCalendarTag($request->month, $request->year);
        return view('admin.calendar.index' , ['cal_tag' => $tag]);
    }
}
