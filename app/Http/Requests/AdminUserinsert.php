<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserinsert extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */ 
    //表单授权
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //校验规则
    public function rules()
    {
        return [
            //用户名不能为空的规则设置  required 输入的数据不能为空 regex 正则规则
            //unique 唯一
            'username'=>'required|regex:/\w{6,12}/|unique:users' ,
            //email 校验数据是否符合邮箱格式
            'email'=>'required|email|unique:users',
            //密码
            'password'=>'required|regex:/\w{8,16}/',
            //重复密码   same 校验两次密码是否一致
            'repassword'=>'required|regex:/\w{8,16}/|same:password',
            //电话
            'phone'=>'required|regex:/\d{11}/'
                   ];

        //自定义错误消息
        public function messages(){
        	return [
        		'username.required'=>'用户名不能为空',
        		'username.regex'=>'用户名必须为6-12位任意数字字母下划线组成',
        		'username.unique'=>'用户名重复',
        		'email.required'=>'邮箱不能为空',
        		'email.email'=>'邮箱格式错误',
        		'password.required'=>'密码不能为空',
        		'password.regex'=>'密码必须为8-16位任意数字字母符号组成',
        		'repassword.same'=>'两次密码不一致',
        		'phone.required'=>'电话不能为空',
        		'phone.regex'=>'手机号格式错误'

        	];
        }
    }
}
