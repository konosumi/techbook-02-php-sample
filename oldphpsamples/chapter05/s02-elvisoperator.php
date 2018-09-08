<?php
$name = "";
// エルビス演算子
// if($name)と同様の評価を行ない、あれば$name、なければデフォルト値を返却する。
$username = $name ?: '名前が空です';
// 名前が空です
echo htmlspecialchars($username, ENT_QUOTES);
