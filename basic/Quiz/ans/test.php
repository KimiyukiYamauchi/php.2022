<?php
$origin = new DateTimeImmutable('2009-10-11');
$target = new DateTimeImmutable('2009-10-13');
// $interval = $origin->diff($target);
$interval = $target->diff($origin);
var_dump($interval->invert);
echo $interval->format('%R%a days');
?>