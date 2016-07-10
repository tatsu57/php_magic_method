<?php

class invoke
{
    /**
     * __invokeメソッドは関数のような振る舞いにすることができる。
     *
     * @param string $data 渡された引数
     */
    public function __invoke($data)
    {
        return $data;
    }
}