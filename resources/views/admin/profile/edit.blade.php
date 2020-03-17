@extends('layouts.profile')

@section('title', 'プロフィール編集')

@section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-8 mx-auto">
                 <h2>プロフィール編集</h2>
                 <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="mutipart/form-data">
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
                             <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-md-2">性別</label>
                         <div class="col-md-10">
                             <input type="radio" name="gender" value="男性" @if($profile_form->gender!='女性') checked="checked" @endif>男性
                             <input type="radio" name="gender" value="女性" @if($profile_form->gender!='男性') checked="checked" @endif>女性 
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-md-2">誕生日</label>
                         <div class="col-md-10">
                             <input type="text" class="form-control" name="birthday" value="{{ $profile_form->birthday }}">
                         </div>
                     </div>
                      <div class="form-group row">
                         <label class="col-md-2">年齢</label>
                         <div class="col-md-10">
                             <input type="text" class="form-control" name="age" value="{{ $profile_form->age }}">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-md-2">目標</label>
                         <div class="col-md-10">
                             <textarea class="form-control" name="goal" rows="10">{{ $profile_form->goal }}</textarea>
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-md-10">
                             <input type="hidden" name="id" value="{{ $profile_form->id }}">
                         </div>
                     </div>
                     {{ csrf_field() }}
                     <input type="submit" class="btn btn-primary" value="更新">
                 </form>
             </div>
         </div>
     </div>
@endsection