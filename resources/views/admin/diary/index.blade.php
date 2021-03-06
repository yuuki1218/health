@extends('layouts.admin')
@section('title','日記の一覧')

@section('content')
    <div class='container'>
        <div class="row">
            <h2>日記一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\DiaryController@add') }}" role="button" class="btn btn-primary">作成画面</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\DiaryController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-diary col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">タイトル</th>
                                <th width="50%">本文</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $diary)
                            <tr>
                                <th>{{ $diary->id }}</th>
                                <td>{{ \Str::limit($diary->title, 100) }}</td>
                                <td>{{ \Str::limit($diary->body, 250) }}</td>
                                <td>
                                    <div>
                                        <a href="{{ action('Admin\DiaryController@edit',['id' => $diary->id]) }}">編集</a>
                                    </div>
                                    <div>
                                        <a href="{{ action('Admin\DiaryController@delete', ['id' => $diary->id]) }}">削除</a> 
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a type="submit" class="btn btn-primary" href="{{ action('DiaryController@index') }}">閲覧画面</a>
                </div>
            </div>
        </div>
    </div>
@endsection