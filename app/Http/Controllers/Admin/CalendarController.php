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
        return view('admin.calendar.record', ['list' => $list, 'data' => $data]);
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
        return view('admin.calendar.index', ['cal_tag' => $tag]);
    }
    
    public function deleterecord(Request $request)
    {
        //デリートで受信したデータの削除
        if (isset($request->id)) {
            $calendar = Calendar::find($request->id);
            $calendar->delete();
        }
        //データの取得
        $data = new Calendar();
        $list = Calendar::all();
        return view('admin.calendar.record', ['list' => $list, 'data' => $data]);
    }
    
    public function edit(Request $request)
    {
        //休日のデータを取得
        $calendar = Calendar::find($request->id);
        if (empty($calendar)) {
            abort(404);
        }
        return view('admin.calendar.edit', ['form' => $calendar]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Calendar::$rules);
        $calendar = Calendar::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $calendar->fill($form)->save();

        return redirect('admin/calendar/record');
    }
           
    public function home()
    {
        return view('calendar.home');
    }
}
