<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/15 0015
 * Time: 15:06
 */
namespace DesignPattern\SimpleFactory;

/**
 *php版本设计模式
 *简单工厂模式
 */

/**
 * 基础类
 */
abstract class BaseClass
{
    //定义了抽象方法的类必须声明为抽象类
    //定义基本的属性方法
    private $property;

    public function setProperty($value)
    {
        $this->property=$value;
    }

    public function getProperty()
    {
        return $this->property;
    }
    //定义抽象方法，要求子类去实现
    //子类实现抽象方法的修饰权限必须大于父类定义的修饰符
     protected abstract function someFunction();

}

/**
 *子类A
 */
class subClassA extends BaseClass
{
    ///如果用protect实现了父类的抽象方法，但实例化的对象无法访问，得定义一个public供访问
//    protected function someFunction()
//    {
//        $this->setProperty('subClassA');
//        echo $this->getProperty();
//    }
//
//    public function doSome()
//    {
//        //protect、private等在类的内部是可见的
//        $this->someFunction();
//
//    }

    public function someFunction()
    {
        $this->setProperty('subClassA');
        echo $this->getProperty();
    }

}


/**
 *子类B
 */
class subClassB extends BaseClass
{
   //父类的抽象方法必须实现
   //父类抽象方法是protect 子类可以用public 或protect去实现
    public function someFunction()
    {
        $this->setProperty('subClassB');
        echo $this->getProperty();
    }

}
/**
 * 简单工厂 ，实例化用
 */
class SimpleFactory
{
    //根据不同的情况实例化不同的类
    public function createSubClass($select)
    {
        $subClass=null;
        switch ($select)
        {
            case "A";
                //实例化的对象不能调用protect、private方法,因为不可见
                $subClass= new subClassA();
                break;
            case "B":
                $subClass =new subClassB();
                break;
            default:
                $subClass=null;
        }
        //返回实例化好的子类
        return $subClass;
    }

}

//$simpleFactory = new SimpleFactory();
//$subClassA= $simpleFactory->createSubClass("A");
//$subClassA->someFunction();
