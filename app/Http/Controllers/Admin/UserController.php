<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入Hash
use Hash;
//导入模型类到控制器里
use App\Models\User;

class UserController extends Controller
{
    //后台会员列表
    public function index(){
        //通过控制器调度模型
        $data=User::paginate(5);
    	//加载模板
        return view("Admin.User.index",['data'=>$data]);
    }
     public function edit($id)
    {
        //获取需要修改数据
        $user=User::find($id);
        //加载模板 分配数据
        return view("Admin.Users.edit",['user'=>$user]);
    }
     //会员添加
    public function create()
    {
    	//echo "this is user add";
        //加载添加模板
        return view("Admin.Users.add");
    }

 	public function store(AdminUserinsert $request)
    {
    	//封装需要插入的数据
    	$data=$request->except(['repassword','token']);
    	//密码加密
    	$data['password']=Hash::make($data['password']);
    	//dd($data);
    	$data['status']=1;
    	$data['token']=str_random(50);
    	if (User::create($data)) {
    		return redirect("/adminuser")->with('success','添加成功');
    	}
    }

    //后台会员添加
    public function add(){
    	//加载模板
    	//return view("Admin.User.add");
    }
    //后台会员执行添加
    public function insert(){
    	//echo "this is adminuser insert";
    }


    //删除
    public function delete($id){
    	echo "this is adminuser delete id is ".$id;
    }
}

 public function destroy($id)
    {
       //echo $id;
       //执行删除
      if (User::destroy($id)) {
      	return redirect("/adminuser")->with('success','删除成功');
      }
    }
