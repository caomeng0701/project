<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入DB
use DB; //== Model类
class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //数据库的基本操作  操作表users
        //$data=DB::
        //获取数据表数据
        $data=DB::select('select * from user');
        //dd($data);
        //加载模板 分配数据
       //return view("Admin.Db.index",['data'=>$data]);
        //删除数据
        //DB::delete("delete from user where id=23");
        //一般语句只能删除表  和 创建表
        //DB::statement("drop table demo");
        
        //构造器(连贯方法) 使用更加灵活 满足需求多
        //获取所有数据
        //$alldata=DB::table('user')->get();
        //获取单条数据
        //$onlydata=DB::table("user")->where("id",'=',1)->first();
        //获取单条数据结果中的某个字段
        //$username=DB::table("user")->where("id",'=',1)->value('username');
        //获取某列数据
        //$dataone=DB::table("user")->pluck('username');
        //插入单条数据
        //DB::table("user")->insert(['username'=>'sss','password'=>'123','level'=>'3','status'=>'0','addtime'=>'1346546874']);
        
        //多条数据
       /* DB::table("user")->insert([
               ['username'=>'sss13','password'=>'123','level'=>'3','status'=>'0','addtime'=>'1346546874'],
               ['username'=>'sss12','password'=>'123','level'=>'3','status'=>'0','addtime'=>'1346546874'],
               ['username'=>'sss1','password'=>'123','level'=>'3','status'=>'0','addtime'=>'1346546874']


           ]);*/
        //插入数据的同时获取id
        //$id=DB::table("user")->insertGetId(['username'=>'sss15','password'=>'123','level'=>'3','status'=>'0','addtime'=>'1346546874']);
        //获取指定字段信息
        //$data=DB::table("user")->select("username",'password','addtime')->get();
        //删除数据
        //DB::table("user")->where("id",'=',34)->delete();
        
        //模糊搜索
        //$res=DB::table("user")->where("username",'like',"%j%")->get();
        
        //排序
        //$ress=DB::table("user")->orderBy('id','desc')->get();
        
        //获取搜索关键词
        // $k=$request->input('keyword');
        //echo $k;
        //分页   paginate 分页方法 3 每页显示的数据条数
          // $resus=DB::table('user')->where("username",'like',"%".$k."%")->paginate(3);
           // return view("Admin.Db.index",['data'=>$resus,'request'=>$request->all(),'k'=>]);
           
        //获取数据的总条数
        //$tot=DB::table('user')->count();
        
        //表关联 普通做法
        // $data=DB::select("select * from cates,shops where cates.id=shop.cate_id");
        //表关联 的 连贯方法
        $data=DB::table("cates")->join('shops','cates.id','=','shops.cate_id')->get();
        dd($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
