@extends('layouts.calendar')
@section('title', 'home')
@section('content')

<div class="row">
    <div class="col-md-5 mx-auto">
        <h1>運動習慣の記録表</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-5 mx-auto">
<h2>日々の運動やトレーニングを記録して習慣化していきましょう！！</h2>
<p>記録をつけるフォームがあるので、その日に行った運動習慣を記録しカレンダーに残してみてください。</p>
    </div>
</div>
<div class="row">
    <div class="col-md-5 mx-auto">
<h3><div class="box"><span><a class="str"  href="{{ url('/admin/calendar/record') }}">記録の入力画面</a></span></div></h3>
<h3><div class="box"><span><a class="str"  href="{{ url('/admin/calendar/index') }}">カレンダーの画面</a></span></div></h3>
<h3><div class="box"><span><a class="str"  href="{{ url('/admin/profile/create') }}">プロフィール作成画面</a></span></div></h3>
<h3><div class="box"><span><a class="str"  href="{{ url('/admin/profile/index') }}">プロフィール画面</a></span></div></h3>
       
    </div>
</div>
@endsection