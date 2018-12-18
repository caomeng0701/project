<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <title></title>
  <script src="/static/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8">
    
  </script>
</head>
<body>
  <button>获取ajax响应数据</button>
</body>
<script  type="text/javascript" charset="utf-8">
    //通过jquery类库将token字符串写入到请求的标头里
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }


    });


      //alert(1);
      //获取按钮表单单击事件
      
      $("button").click(function(){
        //以post方式请求
        $.post("/doajaxs",{},function(data){
              alert(data);
        });

      });

</script>
</html>