<?php
// Null合体演算子を使えば、issetを省略できる
$username = $_GET['user'] ?? 'nobody';
// nobody
echo htmlspecialchars($username, ENT_QUOTES);
