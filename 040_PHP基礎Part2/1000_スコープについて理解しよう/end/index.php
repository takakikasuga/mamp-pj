<?php
/**
 * スコープ
 * 変数が参照可能な範囲
 *
 * - グローバルスコープ
 * - ローカルスコープ
 * - スーパーグローバル
 */

$a = 0;
echo $a;
function fn1()
{
  global $a;
  echo $a;
  $b = 1;
}
fn1();
function fn2()
{
  global $a;
  // var_dump($_SERVER);
  if (true) {
    $b = 2;
  }
  echo $b;
}
fn2();