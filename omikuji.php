<?php
$omikuji = rand(1, 6);
if ($omikuji === 1) {
    echo "大吉\n";
} elseif ($omikuji === 2) {
    echo "中吉\n";
} elseif ($omikuji === 3) {
    echo "小吉\n";
} elseif ($omikuji === 4) {
    echo "吉\n";
} elseif ($omikuji === 5) {
    echo "凶\n";
} else {
    echo "大凶\n";
}
