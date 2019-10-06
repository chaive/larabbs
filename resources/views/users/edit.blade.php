@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="col-md-8 offset-md-2">
     <div class="card">
       <div class="card-header">
         <h4><i class="glyphicon glyphicon-edit"></i>编辑个人资料</h4>
       </div>
       <div class="card-body">
         <form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
           @csrf
           @method('PUT')
           @include('shared._error')
           <div class="form-group">
             <label for="name-field">用户名</label>
             <input type="text" name="name" id="name-field" value="{{ old('name' ,$user->name) }}" class="form-control">
           </div>
           <div class="form-group">
             <label for="email-field">邮箱</label>
             <input type="text" name="email" id="email-field" value="{{ old('email' ,$user->email) }}" class="form-control">
           </div>
             <div class="form-group">
               <label for="introduction-field">个人简介</label>
               <textarea rows="3" name="introduction" id="introduction-field" value="{{ old('introduction', $user->introduction) }}" class="form-control">{{ old('introduction', $user->introduction) }}</textarea>

               <div class="form-group mb-4">
                 <label for="" class="avatar-label">用户头像</label>
                 <input type="file" name="avatar" class="form-control-file">

                 @if($user->avatar)
                   <br>
                   <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="thumbnail img-responsive" width="200">
                   @endif
               </div>
             </div>
           <div class="well well-sm">
             <button class="btn btn-primary">保存</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>
@stop
