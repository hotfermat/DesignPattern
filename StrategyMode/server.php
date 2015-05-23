<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/22 0022
 * Time: 20:14
 */
namespace DesignPattern\StrategyMode;

/**
 * php版设计模式
 * 策略模式
 */


/**
 * 基类
 */
abstract class Strategy
{
    public  abstract function strategyMethod();
}

/**
 * 子类，实现具体的策略方法
 */
class StrategyA extends Strategy
{
    public function strategyMethod()
    {
        echo "策略A的具体实现方法";
    }
}

class StrategyB extends Strategy
{
    public function strategyMethod()
    {
        echo "策略B的具体实现方法";
    }
}

/**
 * context 类 设置方便传入具体的策略对象
 */
class Context
{


    //上下文接入点，确定具体的策略方法

    public function StrategyContext($select)
    {
        //定义strategy对象,根据具体情况调用相应的策略方法
        $strategy=null;
        switch($select)
        {
            case "A":
                $strategy= new StrategyA();
                $strategy->strategyMethod();
                break;
            case "B":
                $strategy=new StrategyB();
                $strategy->strategyMethod();
                break;
            default:
                $strategy=null;

        }
    }


}

//$context= new Context();
//$context->StrategyContext("A");