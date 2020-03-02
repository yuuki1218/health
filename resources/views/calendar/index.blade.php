@extends('layouts.calendar')
@section('title', 'カレンダー')
@section('content')
    {!!$cal_tag!!}
    <a href="{{ url('/admin/calendar/record') }}">記録設定</a>
@endsection
