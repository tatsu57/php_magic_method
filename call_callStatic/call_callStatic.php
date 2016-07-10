<?php

class call_callStatic
{
    /**
     * アクセス不能(未定義やprivateなど)なメソッドが呼び出された場合に実行される
     *
     * @param string $name 実行されたメソッド名
     * @param array $args 引数で指定されている値を配列に格納する
     */
    public function __call($name, $args) {
        echo "call {$name}\n";
        var_dump($args);
    }

    /**
     * アクセス不能(未定義やprivateなど)なstaticメソッドが呼び出された場合に実行される
     *
     * @param string $name 実行されたメソッド名
     * @param array $args 引数で指定されている値を配列に格納する
     */
    public static function __callStatic($name, $args) {
        echo "callStatic {$name}\n";
        var_dump($args);
    }

    private function start()
    {
        echo 'ddd';
    }
}