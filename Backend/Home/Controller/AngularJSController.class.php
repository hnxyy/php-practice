<?php
namespace Home\Controller;

use Think\Controller;

class AngularJSController extends Controller
{
    public function index(){
        echo 'Hello AngularJS';
    }

    //什么是Angular及与Jquery实例对比分析
    public function jquery()
    {
        $this->display();
    }

    //给客户端返回一个Json数据
    public function jqueryGetJson(){
        $jsonData = [
          ['name'=>'弍萬','age'=>26],
          ['name'=>'Tinyaiai','age'=>24],
          ['name'=>'菲丽布','age'=>24],
          ['name'=>'拉斐尔','age'=>24],
        ];
        //JSON_UNESCAPED_UNICODE 这个参数是不会编码的：输出：[{"name":"弍萬","age":26},{"name":"Tinyaiai","age":24}]
        exit(json_encode($jsonData,JSON_UNESCAPED_UNICODE));
    }

    //AngularJS开发之模块、控制器、视图模型
    public function demo1()
    {
        $this->display();
    }

    //MVVM双向数据绑定图例分析
    public function mvvm()
    {
        $this->display();
    }

    //声明模块与控制器规范与依赖注入分析
    public function controllerDependency()
    {
        $this->display();
    }

    //$scope的基本使用方法
    public function baseScope()
    {
        $this->display();
    }

    //表达式与ng-bind及ng-cloak解决闪屏问题
    public function ngBind()
    {
        $this->display();
    }

    //ng-model在表单中双向绑定实例
    public function ng_model()
    {
        $this->display();
    }

    //ng-model在表单中双向绑定实例
    public function ng_model_form()
    {
       homePrint($_GET['title']);
    }

    //ng-value的使用实例讲解
    public function ng_value()
    {
        $this->display();
    }

    //实例讲解angular控制单选框
    public function website_off()
    {
        $this->display();
    }

    //实例讲解angular操作checkbox复选框
    public function angular_checkbox()
    {
        $this->display();
    }

    //实例讲解angular操作select列表框
    public function angular_select()
    {
        $this->display();
    }

    /**
     * 函数使用对象扩充与数据遍历
     * angular.extend(obj,{url:'www.tinywan.com',age:26}); 填充一个数据
     */
    public function angular_obj()
    {
        $this->display();
    }

    /**
     * json数据转换与本地存储及$scope...
     * angular.romJson(Json字符串) 可以把一个Json字符串中解析成一个对象，或对象数组
     * angular.toJson(Json对象) 可以把一个对象一个中解析成Json字符串
     */
    public function angular_json_string()
    {
        $data = [
            'username' => '二万先生',
            'age' => 12,
        ];
        //这里的$json_data是Json字符串
        $this->json_data = json_encode($data,JSON_UNESCAPED_UNICODE);
        $this->display();
    }

    public function angular_json_string_form()
    {
       homePrint(json_decode($_POST['data'],true));
       echo strlen($_POST['title'])."<br/>";
       echo strlen($_POST['data'])."<br/>";
    }

    //数据类型判断函数与数据比较方法的使用
    public function angular_function_data()
    {
        homePrint(json_decode($_POST['data'],true));
    }

    //ng-init与ng-trim及表单中表单value
    public function angular_init_trim()
    {
        $this->display();
    }

    //使用ng-if、ng-show、ng-disabled
    public function angular_if_show()
    {
        $this->display();
    }

}