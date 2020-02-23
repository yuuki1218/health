@extends('layouts.calendar')
@section('title', '記録設定')
@section('content')
    <script>
  $( function() {
    $( "#day" ).datepicker({dateFormat: 'yy-mm-dd'});
  } );
</script>
    <h1>休日設定</h1>
    <!-- 記録入力フォーム -->
    <form "{{ action('Admin\CalendarController@postrecord') }}" method="post" enctype="mutipart/form-data">
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
    <input type="text" name="day" class="form-control" id="day">
    
    <label for="description">説明</label>
    <input type="text" name="description" class="form-control" id="description"> 
    
    </div>
    
    <button type="submit" class="btn btn-primary">登録</button> 
    </form> 
    
    <!-- 記録一覧表示 -->
    <table class="table">
    <thead>
    <tr>
    <th scope="col">日付</th>
    <th scope="col">説明</th>
    <th scope="col">作成日</th>
    <th scope="col">更新日</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list as $val)
    <tr>
        <th scope="row"><a href="{{ url('/admin/calendar/edit/'.$val->id) }}">{{ $val->day }}</a></th>
        <td>{{$val->description}}</td>
        <td>{{$val->created_at}}</td>
        <td>{{$val->updated_at}}</td>
       <td><form "{{ action('Admin\CalendarController@deleterecord') }}" method="post" enctype="mutipart/form-data"> 
            <input type="hidden" name="id" value="{{$val->id}}">
            {{ method_field('delete') }}
            {{csrf_field()}} 
            <button class="btn btn-default" type="submit">削除</button>
        </form></td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <a href="{{ url('/admin/calendar/index') }}">カレンダーに戻る</a>
@endsection