@extends('layouts.calendar')
@section('title', '休日設定')
@section('content')
    <script>
  $( function() {
    $( "#day" ).datepicker({dateFormat: 'yy-mm-dd'});
  } );
</script>
    <h1>休日設定</h1>
    <!-- 休日入力フォーム -->
    <form "{{ action('Admin\CalendarController@update') }}" method="post" enctype="mutipart/form-data">
    <div class="form-group">
    {{csrf_field()}}
    @if ($errors->any())
       <div class = "alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
       @endif
    <label for="day">日付 </label>
    <input type="text" name="day" class="form-control" id="day" value="{{ $data->day }}">
    <label for="description">説明</label>
    <input type="text" name="description" class="form-control" id="description" value="{{ $data->description }}"> 
    </div>
    <button type="submit" class="btn btn-primary">登録</button> 
    </form> 
    