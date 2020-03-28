@extends('layouts.home')
@section('title', 'home')
@section('content')
<header>
    <div class="content">
         <div class="header-title-area">
             <h1 class="logo">運動習慣の記録表</h1>
         </div>
     </div>
     <div class="row">
         <div class="col-md-5 mx-auto">
             <div class="text-sub">
                   <h2>日々の運動やトレーニングを記録して習慣化していきましょう！！</h2>
                       <p>記録をつけるフォームがあるので、その日に行った運動習慣を記録しカレンダーに残してみてください。</p>
             </div>
         </div>
     </div>
</header>
<body>
     <div class="row">
         <div class="col-md-5 mx-auto">
             <ul>
              <li class="box"><a class="sub-link"  href="{{ url('/admin/calendar/record') }}">記録の入力画面</a></li>
              <li class="box"><a class="sub-link"  href="{{ url('/admin/calendar/index') }}">カレンダーの画面</a></li>
              <li class="box"><a class="sub-link"  href="{{ url('/admin/profile/create') }}">プロフィール作成画面</a></li>
              <li class="box"><a class="sub-link"  href="{{ url('/admin/profile/index') }}">プロフィール画面</a></li>
              <li class="box"><a class="sub-link"  href="{{ url('/admin/diary/create') }}">日記作成画面</a></li>
              <li class="box"><a class="sub-link"  href="{{ url('/diary') }}">閲覧画面</a></li>
             </ul>
         </div>
     </div>
</body>
@endsection