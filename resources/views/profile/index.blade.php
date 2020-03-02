@extends('layouts.profile')

@section('title', 'プロフィール')

@section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-8 mx-auto">
                 <h2>プロフィール</h2>
             </div>
         </div>
                             <table class="table table">
                                 <thead>
                                     <tr>
                                         <th width="20">名前</th>
                                         <th width="20">性別</th>
                                         <th width="20">誕生日</th>
                                         <th width="20">年齢</th>
                                         <th width="20">目標</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach($posts as $post)
                                     <tr>
                                         <td>{{ $post->name }}</td>
                                         <td>{{ $post->gender }}</td>
                                         <td>{{ $post->birthday }}</td>
                                         <td>{{ $post->age }}</td>
                                         <td>{{ $post->goal }}</td>
                                     </tr>
                                     @endforeach
                                 </tbody>
                             </<table>
             </div>
@endsection