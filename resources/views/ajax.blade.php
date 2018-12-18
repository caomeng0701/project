<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <script src="/static/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8">
    
  </script>
</head>
<body>
  <button>获取ajax响应数据</button>
</body>
<script  type="text/javascript" charset="utf-8">
      //alert(1);
      //获取按钮表单单击事件
      //以get请求ajax
      $("button").click(function(){
        $.get("/doajax",{},function(data){
              alert(data);
        });

      });

</script>
</html>