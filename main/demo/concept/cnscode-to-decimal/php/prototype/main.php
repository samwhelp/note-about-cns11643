#!/usr/bin/env php
<?php

// 以「真」為例：
// http://jicheng.tw/hanzi/search?c=%E7%9C%9F&e=char
// https://www.cns11643.gov.tw/wordView.jsp?ID=87672
$cns_code = '1-5678';
$cns_group = '1';
$cns_point = '5678';

//https://www.php.net/manual/en/function.intval.php
//https://www.php.net/manual/en/function.dechex.php
$cns_group_hex = dechex(intval($cns_group)); // 1

$cns_code_hex = '' . $cns_group_hex . $cns_point; // 15678

//https://www.php.net/manual/en/function.hexdec.php
$cns_code_dec = hexdec($cns_code_hex);

echo $cns_code_dec; // 87672
echo PHP_EOL;
