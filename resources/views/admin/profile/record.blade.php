@extends('layouts.admin')

@section('title', 'Record')

@section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-8 mx-auto">
                 <h1>目標管理シート</h1>
                 <form action="{{ action('Admin\CalendarController@postrecord') }}" method="post" enctype="mutipart/form-data">
                     {{ csrf_field() }}
                     <body>
                       <h2>カレンダー</h2>
                       日付: <input type="text" name="day"> [YYYY/MM/DD]
                       説明: <input type="text" name="description">
                       <input type="submit">
                       </form>
                       </body>
                    </div>　
 　　　　　 　　　　　　　</div>
      　　　　  </div>　