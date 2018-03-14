# PHPOmikuji
おみくじ

## 処理
rand()関数を使用して1 ～ 6のランダムな数字を使って、おみくじの結果を出力します。

## コード
```
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
```

## 出力例  
```
大吉
```
  
## 開発環境
| 開発ツール |  |
|:-|:-|
| OS | Windows10 |
| 仮想化ソフト | Oracle VM VirtualBox 5.2 |
| 構築ソフト | Vagrant 2.0.2 |
| 仮想化上OS | CentOS 6.9 |
| SSHクライアント | PuTTY 0.6.8 |
| FTPクライアント | Cyberduck 6.3.5 |
| エディタ | Atom 1.24.0 |
| 開発言語 | PHP 7.1.15 |
