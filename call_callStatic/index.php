<?php

require_once('./call_callStatic.php');

$call_callStatic = new call_callStatic();

// //__callが実行される
$call_callStatic->content(1,2,'abc', array('data' => 1));

// //__callStaticが実行される
call_callStatic::start(1,2,'abc', array('data' => 1));


//-------実用例----------


require_once('./example.php');

$obj = new example();
echo $obj->getData(100);

//コンストラクターにtestが含まれていないので、エラーになる
$obj->setTest(100);