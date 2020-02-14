@extends('layouts.calendar')
@section('title', 'カレンダー')
@section('content')
    {!!$cal_tag!!}
    <a href="{{ url('/admin/calendar/record') }}">休日設定</a>
@endsection
