<?php
$ds = DIRECTORY_SEPARATOR;
require implode($ds, [__DIR__, '..', '..', 'vendor', 'autoload.php']);

$smarty = new Smarty();
// インジェクションが起きないように、
// 自動でテンプレートエンジンで出力する変数をHTMLエスケープする
$smarty->escape_html = true;
$smarty->setTemplateDir(__DIR__);
// テンプレート側に値を渡す
$smarty->assign('hello', 'Hello, World!!');
$smarty->assign('demos', ['This', 'is', 'Smarty', '<script>alert(1);</script>']);
// テンプレートを表示する(ブラウザに表示するHTMLの事です)
$smarty->display('index.tpl');
