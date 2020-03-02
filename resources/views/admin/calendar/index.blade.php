@extends('layouts.calendar')
@section('title', 'カレンダー')
@section('content')
    <div class="row">
    <div class="col-md-8 mx-auto">
    {!!$cal_tag!!}
    </div>
    </div>
    <a href="{{ url('/admin/calendar/record') }}">記録設定</a>
@endsection
