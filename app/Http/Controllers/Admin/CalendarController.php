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
        $data = new Calendar();
        $list = Calendar::all();
        return view('admin.calendar.record' , ['list' => $list, 'data' => $data]);
    }
     public function update($id)
    {
        //休日のデータを取得
        $data = new Calendar();
        if(isset($id))
        {
            $data = Calendar::where('id' , '=' , $id )->first();
        }
        $list = Calendar::all();
        return view('admin.calendar.record' , ['list' => $list, 'data' => $data]);
    }
    
    public function postrecord(Request $request)
    {
        //POSTで受信した記録のデータの登録
        if(isset($request->id)) 
        {
            $calendar = Calendar::where('id', '=', $request->id)->first();
            $form = $request->all();
            unset($form['_token']);
            $calendar->fill($form);
            $calendar->save();
        } else {
        $calendar = new Calendar();
        $form = $request->all();
        unset($form['_token']);
        $calendar->fill($form);
        $calendar->save();
        }
        $data = new Calendar();
        $list = Calendar::all();
        return view('admin.calendar.record', ['list' => $list, 'data' => $data]);
    }
    public function index(Request $request)
    {
    $list = Calendar::all();
    $cal = new Record($list);
    $tag = $cal->showCalendarTag($request->month, $request->year);
        return view('admin.calendar.index' , ['cal_tag' => $tag]);
    }
    
    public function deleterecord(Request $request)
    {
        if(isset($request->id))
        {
            $calendar = Calendar::where('id', '=', $request->id)->first();
            $calendar->delete();
            
        }
        $data = new Calendar();
        $list = Calendar::all();
        return view('calendar.record',['list' => $list, 'data' => $data]);
    }
}
