<?php

require_once('./invoke.php');

$invoke = new invoke();

//__invokeを使うと、以下のように(string)で関数のように振る舞うことができる。
var_dump($invoke('dddd'));
exit;