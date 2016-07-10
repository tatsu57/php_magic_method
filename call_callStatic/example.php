<?php

class example
{
    /**
     * コンストラクター
     *  擬似的にアクセサーを作るための初期設定
     *
     */
    public function __construct() {

        $this->data_ = array();

        $this->propertys_ = array (
                'foo' => 1,
                'bar' => 1,
                'data' => 1,
        );
    }

    /**
     * set or getで始まるメソッド名でアクセス不能で　且つ　アクセスされた場合、擬似的にアクセサーを作る。
     *
     * @param string $name アクセスされたメソッド名
     * @param array $param 引数で指定れた値
     *
     * @see boolean is_include_get_or_set() 最初の文字がgetもしくはsetか判定
     * @see no_exist_in_propertys_() コンストラクターのpropertys_に値が含まれていない場合、エラを投げる
     */
    public function __call($name, $param) {

        if (($this->is_include_get_or_set($name))) {

            $type = substr($name, 0, 3);
            $k = strtolower(substr($name, 3));

            $this->no_exist_in_propertys_($k);

            if ('set' === $type) {
                $this->data_[$k] = $param[0];
            } else {
                return $this->data_[$k];
            }
        } else {
            throw new Exception('エラー');
        }
    }

    /**
     * 最初の文字がgetもしくはsetだったら
     *
     * @return boolean
     */
    private function is_include_get_or_set($name)
    {
        return 0 === strncmp($name, 'get', 3) || 0 === strncmp($name, 'set', 3);
    }

    /**
     * コンストラクターのpropertys_に値が含まれていない
     *
     * @param string $k get or setを取り除いたメソッド名
     *
     */
    private function no_exist_in_propertys_($k)
    {
        if (false === isset($this->propertys_[$k])) {

            //コンストラクタで指定された値ではないのでエラー
            throw new Exception('エラー');
        }
    }
}