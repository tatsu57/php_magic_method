<?php

class isset_unset
{
    protected $repositories = array();

    /**
     * アクセス不能(privateや存在しない)なプロパティに対して、issetを行った時に呼ばれるマジックメソッド
     *
     * @param string $name 指定されたのプロパティー名
     *
     * @return boolean
     */
    public function __isset($name)
    {
        return isset($this->repositories[$name]);
    }

    /**
     * アクセス不能(privateや存在しない)なプロパティに対して、unsetを行った時に呼ばれるマジックメソッド
     *
     * @param string $name 指定されたのプロパティー名
     *
     */
    public function __unset($name)
    {
        //削除されて困る場合は例外処理を投げる
        throw new BadMethodCallException("__unset() is not supported");

        //削除する場合はこんな処理
        unset($this->repositories[$name]);
    }

    /**
     * アクセス可能なメソッド
     *
     * @param string $name
     *
     * @return string $name
     */
    public function get_name($name)
    {
        return $name;
    }
}
