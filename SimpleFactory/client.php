<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/22 0022
 * Time: 17:48
 */
//没有自动加载机制还得required
require_once "server.php";

//申明需要用到的类在哪个命名空间下
use DesignPattern\SimpleFactory\SimpleFactory;

$simpleFactory = new SimpleFactory();
$subClass= $simpleFactory->createSubClass("A");
$subClass->someFunction();
