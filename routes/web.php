<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//路径匹配到路由规则  / 就会自动的执行funcition 匿名函数
//Route 底层路由类 get请求方式 /路由规则
Route::get('/', function () {
	//加载模板
	//return view('welcome');
	//echo "this is my first laravel";
	//echo date('Y-m-d H:i:s');
	//读取配置文件
	//Config 底层配置类 get获取方法 app配置文件名字 timezone 配置选项
	//echo Config::get("app.timezone");
	//设置配置文件
	//Config::set('app.locale','cn');
	//获取配置文件信息
	//echo Config::get("app.locale");
	

	//获取快速配置文件信息
	//env laravel 内置方法 可以快速获取.env文件配置信息
	echo env('DB_CONNECTION');
});
Route::get('/admin',function(){
	echo "this is admin";
});


//基本路由  get
Route::get("/admins
	",function(){
	echo "this is admins";


});


//基本路由post
Route::post("/insert",function(){

	echo "this is insert";


});


//路由参数使用
Route::get("/shop/{id}",function($id){

		echo "商品的id为:".$id;

});

//限制参数路由
Route::get("/order/{name}",function($name){
		echo "订单名字为:".$name;


				   //限参数
})->where('name','[a-z]+');



//传递多个参数
Route::get("/user/{name}-{id}",function($name,$id){
		echo "用户名为:".$name.'<br/>';
		echo "用户id为:".$id;
});

//路由别名
Route::get("/list",['as'=>'11',function(){
	echo "this is list";

}]);

//利用路由别名获取原有规则
Route::get("/b",function(){
	//route  这是一个路由函数  功能: 通过路由别名获取原有路由规则
	echo route('11');
});

//前台路由组
Route::group([],function(){
	//子路由(前台个人中心)
	Route::get("/homeperson",function(){
		echo "这是前台个人中心";
	});
	//子路由(前台订单中心)
	Route::get("/homeorder",function(){
		echo "这是前台订单中心";
	});
});
//后台路由组
Route::group([],function(){
		//子路由(后台个人中心)
Route::get("/adminuser",function(){
		echo "这是后台会员中心";
	});
		//子路由(后台评价模块)
	Route::get("/admincom",function(){
		echo "这是后台订单中心";
	});


});

//加载表单
Route::get("/add",function(){
	//加载添加表单
	return view("form");


});


//执行添加
Route::post("/doadd",function(){

		echo "this is doadd";

});

//Ajax get请求
Route::get("/getajax",function(){
	//加载模板
	return view("ajax");


});

Route::get("/doajax",function(){
	echo "this is get ajax data";

});


//ajax post请求
Route::get("/getajax1",function(){
	//加载模板
	return view('ajax1');
});
Route::post("/doajaxs",function(){
	echo "this is post ajax data";

});



//获取快速配置文件信息
//env laravel内置方法  可以快速获取.env文件配置信息
//echo env('DB_CONNECTION');

//后台商品模块
Route::get("/adminshop",function(){
	echo "这是后台商品模块";


})->middleware("login");


//后台的登录模板
Route::get("/login",function(){
	//加载模板
	return view("login");


});

//中间件结合路由组
Route::group(["middleware"=>"login"],function(){
	//后台模块
	Route::get("/admincate",function(){

		echo "这是后台的类别模板";
	});

	//后台订单米模块
	Route::get("/adminorder",function(){

		echo "这是后台订单模块";

	});

	//后台订单模块
    Route::get("/adminorder",function(){
    	echo "这是后台的订单模块";


    });

});		
	//控制器访问   /adminuser/index路由器规则   Admin\UserController 
	//访问  控制器  @访问index 控制器里的方法
	Route::get("/adminuser/index","Admin\UserController@index");
	Route::get("/adminuseradd","Admin\UserController@add");
	Route::post("/adminuserinsert","Admin\UserController@insert");
	//携带参数
	Route::get("/adminuserdelete/{id}","Admin\UserController@delete");


	//控制器结合中间件一
	Route::get("/adminshop/index","Admin\ShopController@index")->middleware('login');

	//控制器结合路由组使用中间件二(项目推荐用法)
	Route::group(["middleware"=>'login'],function(){

		Route::get("/adminorder/index","Admin\OrderController@index");
		Route::get("/admincate/index","Admin\CateController@index");

	});

	//资源控制器(项目里推荐用法)
	//把控制器的所有方法统统交给同一个路由去处理(简化代码)
	Route::resource("/ads","Admin\AdsController");


	//请求研究 cookie设置和获取
	Route::resource("/req","Admin\ReqController");

	//文件操作
	Route::resource("/file","Admin\FileController");


	//视图操作
	Route::resource("/vie","Admin\VieController");


	//后台搭建
	Route::resource("/admin","Admin\AdminController");

	//用户模块
	Route::resource("/adminusers","Admin\UsersController");
	

	//数据库操作
	Route::resource("/db","Admin\DbController");

	//Ajax删除
	Route::get("/adminuserdel","Admin\UsersController@del");
	//模型之会员模块管理
	Route::resource("/adminuser","Admin\UserController");
