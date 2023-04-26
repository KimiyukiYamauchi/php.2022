<?php

class Q1 
{
    /**
     * 引数として文字列nameを受け取り、"Hello [name]!"という形式の挨拶文を返す
     * 例：
     * 　helloName("Bob") → "Hello Bob!"
     * 　helloName("Alice") → "Hello Alice!"
     * 　helloName("X") → "Hello X!"
     * 
     * @param string $name 文字列(名前)
     * 
     * @return "Hello [name]!"という形式の挨拶文
     * 
     */
    public function  helloName(string $name) : string
    {
        // return "Hello $name!";
        return "Hello " . $name . "!";
    }
}