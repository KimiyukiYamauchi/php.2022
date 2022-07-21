<?php

class Q7
{
    /**
     * 1つの引数(整数)を受け取り以下の条件が成り立つならtrueを返す
     * それ以外はfalseを返す
     * 条件：
     * 　90以上110以下である
     * 　190以上210以下である
     * 例：
     * 　nearHundred(93) → true
     * 　nearHundred(90) → true
     * 　nearHundred(90) → true
     * 
     * @param int $n 整数
     * 
     * @return 条件が成り立つならtrueを返す
     *         それ以外はfalse
     * 
     */
    public function nearHundred(int $n) : bool
    {
      // if (($n >= 90 && $n <= 110) ||
            // ($n >= 190 && $n <= 210)) {
      // if ((abs($n - 100) <= 10) ||
      //       (abs($n - 200) <= 10)) {
      //   return true;
      // }
      // return false;

      return abs($n - 100) <= 10 || abs($n - 200) <= 10 ?
                true : false;
    }
}