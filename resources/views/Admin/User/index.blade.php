@extends("Admin.AdminPublic.publics")
@section('admin')
<html>
 <head></head>
 <script src="/static/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>会员列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
 <form action="/adminusers" method="get" accept-charset="utf-8">
     <div class="dataTables_filter" id="DataTables_Table_0_filter">
      <label>用户名:<input type="text" aria-controls="DataTables_Table_0" name="keywords" value="{{$request['keywords'] or ''}}" /></label>
       <label>邮箱:<input type="text" aria-controls="DataTables_Table_0" name="keywordss" value="{{$request['keywordss'] or ''}}" /></label>
      <input type="submit" value="搜索" class="btn btn-success">
     </div>
     </form>
     <table class="mws-datatable mws-table dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 141px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">编号</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 193px;" aria-label="Browser: activate to sort column ascending">用户名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 179px;" aria-label="Platform(s): activate to sort column ascending">邮箱</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 120px;" aria-label="Engine version: activate to sort column ascending">电话</th>
         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 120px;" aria-label="Engine version: activate to sort column ascending">状态</th>
         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 120px;" aria-label="Engine version: activate to sort column ascending">创建时间</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 120px;" aria-label="Engine version: activate to sort column ascending">修改时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 86px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $row)
       <tr class="odd"> 
        <td class="  sorting_1">{{$row['id']}}</td> 
        <td class=" ">{{$row['username']}}</td> 
        <td class=" ">{{$row['email']}}</td> 
        <td class=" ">{{$row['phone']}}</td> 
        <td class=" ">{{$row['status']}}</td> 
        <td class=" ">{{$row['created_at']}}</td> 
        <td class=" ">{{$row['updated_at']}}</td> 
        <td class=" "><form action="/adminusers/{{$row['id']}}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button type="submit" class="btn btn-danger"><i class="icon-trash"></i></button></form>

        <a href="javascript:void(0)" class="btn btn-info del"><i class="icon-remove-sign"></i></a>
        <a href="/adminuser/{{$row['id']}}/edit" class="btn btn-success"><i class="icon-wrench"></i></a>
        </td>  
       </tr>
       @endforeach
      </tbody>
     </table>
     <div class="dataTables_paginate paging_two_button" id="pages">
     {{$data->render()}}
     </div>
    </div> 
   </div> 
  </div>
 </body>
 <script type="text/javascript" charset="utf-8">

 </script>
</html>
@endsection
@section('title','会员列表')

