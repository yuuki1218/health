@extends('layouts.calendar')
@section('title', '編集')
@section('content')
 <div class="container">
         <div class="row">
    <script>
  $( function() {
    $( "#day" ).datepicker({dateFormat: 'yy-mm-dd'});
  } );
</script>
    <h1>編集画面</h1>
    <!-- 休日入力フォーム -->
    <form action="{{ action('Admin\CalendarController@update') }}" method="post" enctype="mutipart/form-data">
    {{csrf_field()}}
    @if (count($errors) >0)
    <ul>
        @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
        @endforeach
    </ul>
   @endif
    <div class="form-group row">
        <div class="col-md-8">
            <label for="day">日付 </label>
            <input type="text" name="day" class="form-control" value="{{ $form->day }}">
        </div>
    </div>
     <div class="form-group row">
        <div class="col-md-8">
    <label for="description">説明</label>
    <input type="text" name="description" class="form-control" value="{{ $form->description }}"> 
            </div>
        </div>
          <div class="form-group row">
            <input type="hidden" name="id" value="{{ $form->id }}">
        </div>
     {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">登録</button> 
    </form> 
    </div>
</div>
    @endsection