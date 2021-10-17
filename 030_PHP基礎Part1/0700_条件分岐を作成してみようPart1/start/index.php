<?php
$score = 50;
if ($score >= 70) {
  echo "秀";
} elseif ($score < 70 && $score >= 50) {
  echo "合格";
} else {
  echo "不合格";
}

$absenceDate = 10;
if ($absenceDate >= 5) {
  echo "不合格";
}
