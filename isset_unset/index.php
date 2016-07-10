<?php

require_once('./isset_unset.php');

$isset_unset = new isset_unset();

//アクセス可能なメソッドの呼び出し(通常)
// $test = $isset_unset->get_name('aaa');

// アクセス不能なプロパティにissetした場合に、__isset()が実行される
// $test = isset($isset_unset->title);

//アクセス不能なプロパティにissetした場合に、__unset()が実行される
unset($isset_unset->title);

var_dump($test);
exit;