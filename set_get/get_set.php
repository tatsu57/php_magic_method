<?php

class get_set
{
    /**
     * __get()は存在しないメソッドにアクセスされた時や、アクセス修飾子がprivate/protectedに動作するマジックメソッド
     * データを取得するときに使われる。
     *
     * @param $name インスタンス時に指定されたメソッド名
     */
    public function __get($name) {
        throw new Exception("存在しないプロパティ {$name} へのgetアクセス");
    }

    /**
     * __set()は存在しないメソッドにアクセスされた時や、アクセス修飾子がprivate/protectedに動作するマジックメソッド
     * データを読み込むときに使われる。
     *
     * @param $name インスタンス時に指定されたメソッド名
     * @param $val 引数1($name)に渡された値
     */
    public function __set($name, $val) {
        throw new Exception("存在しないプロパティ {$name} へのsetアクセス");
    }

    /**
     * 通常アクセスできるメソッド
     *
     */
    public $date_;
}