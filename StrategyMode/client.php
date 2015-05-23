<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/22 0022
 * Time: 22:11
 */
require_once "server.php";

use DesignPattern\StrategyMode\Context;

$context= new Context();
$context->StrategyContext("A");