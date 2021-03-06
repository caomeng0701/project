@extends("Admin.AdminPublic.publics")
@section('admin')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>用户修改</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/adminusers" method="post"> 
    
    @if (count($errors) > 0)
        <div class="mws-form-message error">
        <div class="alert alert-danger">
        <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
      </ul>
      </div>
      </div>
      @endif
      <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">用户名</label> 
       <div class="mws-form-item"> 
        <input type="text" class="small" name="username" value="{{$user['username']}}" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">邮箱</label> 
       <div class="mws-form-item"> 
        <input type="text" class="medium" name="email" value="{{$user['email']}}" /> 
       </div> 
      </div> 
        <div class="mws-form-row"> 
       <label class="mws-form-label">手机号</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="phone" value="{{$user['phone']}}" /> 
       </div> 
      </div> 
      </div>
     <div class="mws-button-row"> 
     {{csrf_field()}}
     {{method_field('PUT')}}
      <input type="submit" value="添加" class="btn btn-danger" /> 
      <input type="reset" value="重置" class="btn " /> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','用户修改')

