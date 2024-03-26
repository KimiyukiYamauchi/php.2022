<?php

class Q7
{
    /**
     * 与えられた文字列の末尾の2文字が文字列中に現れる数を返す処理
     * 例：
     * 　last2("hixxhi") → 1
     * 　last2("xaxxaxaxx") → 1
     * 　last2("axxxaaxx") → 2
     * 
     * @param string $str 文字列
     * 
     * @return 上記の条件での数を返す
     * 
     */
    public function last2(string $str) : int
    {
         if (strlen($str) < 2) {
            return 0;
        }

        // 最後の2文字を抽出する
        $last2 = substr($str, -2);
        $count = 0;

        // 最初の文字から始まる文字列を反復処理する
        for ($i = 0; $i < strlen($str)-2; $i++) {
            // 現在の2文字の部分文字列がlast2文字と一致するかどうかを確認する
            if (substr($str, $i, 2) == $last2) {
                $count++;
            }
        }

        return $count;
    }
}