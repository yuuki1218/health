@extends('layouts.calendar')
@section('title', 'カレンダー')
@section('content')
    <div class="row">
      <div class="col-md-8 mx-auto">
      {!!$cal_tag!!}
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 mx-auto">
        <a class="btn btn-primary"  href="{{ url('/admin/calendar/record') }}">記録設定</a>
      </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <a class="btn btn-primary button"  href="{{ url('/admin/profile/index') }}">プロフィール画面</a>
        </div>
    </div>
@endsection
