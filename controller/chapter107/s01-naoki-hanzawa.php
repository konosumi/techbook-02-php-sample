<?php
// SEE: https://packagist.org/
// require 'vendor/autoload.php';

// 今回はサンプルなのでコントローラーで読み込んでいますが、実用レベルでは
// ルーティングエンジンや基盤クラス、上流クラス側で予めrequireしておきます。
// 今回は二階層上がプロジェクト直下なので、そこから暫定的に下って読み込んでいます。
$ds = DIRECTORY_SEPARATOR;
require implode($ds, [__DIR__, '..', '..', 'vendor', 'autoload.php']);

// 倍返しだ！ 4 
echo "倍返しだ！ ".NaokiHanzawa::baigaeshida(2)."\n<br>";
// 倍返しだ！倍返しだ！
echo NaokiHanzawa::baigaeshida("倍返しだ！")."\n<br>";
