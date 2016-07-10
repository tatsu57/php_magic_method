<?php

require_once('./clone_method.php');
require_once('./example.php');

$clone_method_01 = new clone_method();

$clone_method_01->name = new example();

$clone_method_01->name->file = 'hogehoge';

$clone_method_02 = clone $clone_method_01;

$clone_method_02->name->file = 'hoo';

var_dump($clone_method_01->name->file);

var_dump($clone_method_02->name->file);