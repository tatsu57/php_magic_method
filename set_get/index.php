<?php

require_once('./get_set.php');

$obj = new get_set();

//__set()が動作する
$obj->hogehoge = 1;

// __get()が動作する
var_dump($obj->error);

//通常メソッドが動作する
var_dump($obj->date_);
