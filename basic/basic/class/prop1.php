<?php
require_once 'Person2.php';

$p1 = new Person();
$p1->lastName = "山田";
$p1->firstName = "太郎";

$p2 = new Person();
$p2->lastName = "鈴木";
$p2->firstName = "花子";

echo "私の名前は{$p1->lastName}{$p1->firstName}です。" . PHP_EOL;
echo "私の名前は{$p2->lastName}{$p2->firstName}です。" . PHP_EOL;
?>