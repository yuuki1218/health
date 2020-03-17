@extends('layouts.profile')

@section('title', 'My profile')

@section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-8 mx-auto">
                 <h2>プロフィール作成画面</h2>
                 <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="mutipart/form-data">
                     @if (count($errors) > 0)
                     <ul>
                         @foreach($errors->all() as $e)
                         <li>{{ $e }}</li>
                         @endforeach
                     </ul>
                     @endif
                     <div class="form-group row">
                         <label class="col-md-2">名前</label>
                         <div class="col-md-10">
                             <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-md-2">性別</label>
                         <div class="col-md-10">
                             <input type="radio" name="gender" value="男性" @if(old('gender')!='女性') checked="checked" @endif>男性
                             <input type="radio" name="gender" value="女性" @if(old('gender')!='男性') @endif>女性 
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-md-2">誕生日</label>
                         <div class="col-md-10">
                             <input type="text" class="form-control" name="birthday" value="{{ old('birthday') }}">
                         </div>
                     </div>
                      <div class="form-group row">
                         <label class="col-md-2">年齢</label>
                         <div class="col-md-10">
                             <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-md-2">目標</label>
                         <div class="col-md-10">
                             <textarea class="form-control" name="goal" rows="10">{{ old('goal') }}</textarea>
                         </div>
                     </div>
                     {{ csrf_field() }}
                     <input type="submit" class="btn btn-primary" value="作成">
                 </form>
             </div>
         </div>
     </div>
@endsection