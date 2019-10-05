@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="col-md-8 offset-md-2">
     <div class="card">
       <div class="card-header">
         <h4><i class="glyphicon glyphicon-edit"></i>编辑个人资料</h4>
       </div>
       <div class="card-body">
         <form action="{{ route('users.update',$user->id) }}" method="POST" accept-charset="UTF-8">
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
               <textarea type="text" name="introduction" id="introduction-field" value="{{ old('introduction' ,$user->introduction) }}" class="form-control"></textarea>
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
