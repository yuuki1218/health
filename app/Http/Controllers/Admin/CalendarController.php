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
    
   
    public function postrecord(Request $request)
    {
        {
            //バリデーション
            $validateData = $request->validate([
                'day' => 'required|date_format:Y-m-d',
                'description' => 'required',
                ]);
        }
        
        //POSTで受信した記録のデータの登録
        $calendar = new Calendar();
        $form2 = $request->all();
        unset($form2['_token']);
        $calendar->fill($form2)->save();
        
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
        //デリートで受信したデータの削除
        if(isset($request->id))
        {
            $calendar = Calendar::find($request->id);
            $calendar->delete();
            
        }
        //データの取得
        $data = new Calendar();
        $list = Calendar::all();
        return view('admin.calendar.record',['list' => $list, 'data' => $data]);
    }
    
       public function edit($id)
    {
        //休日のデータを取得
        $data = new Calendar();
        if(isset($id))
        {
            $data = Calendar::find($id);
        }
        $list = Calendar::all();
        return view('admin.calendar.edit' , ['list' => $list, 'data' => $data]);
    }
    
        public function update(Request $request)
           {
            $calendar = Calendar::find($request->id);
            $form = $request->all();
            unset($form['_token']);
            $calendar->fill($form)->save();
           }
            
}
