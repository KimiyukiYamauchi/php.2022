<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q30
{
    /**
     * 引数として２つの文字列が与えられ、１つ目の引数の文字列(以下strという)の先頭部分と
     * ２つめの文字列(以下wordという)が一致する場合、strの先頭部分を返す
     * そうでない場合は空文字を返す
     * 但し、先頭１文字目は一意する必要がない
     * 例えばstrが'hippo'に対してwordが'hi'の場合は'hi'を返す
     * また、strが'hippo'に対してwordが'xip'の場合は'hip'を返す
     * wordは１文字以上である
     * 例：
     * 　startWord("hippo", "hi") → "hi"
     * 　startWord("hippo", "xip") → "hip"
     * 　startWord("hippo", "i") → "h"
     * 
     * @param string $str
     * @param string $word
     * 
     * @return string 上記の処理によって作成される文字列
     */
    public function startWord(string $str, string $word) : string
    {
       return '-1';
    }
}