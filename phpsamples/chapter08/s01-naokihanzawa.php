<?php
// SEE: https://packagist.org/
// require 'vendor/autoload.php';

// 実用レベルでは各ファイルで読み込むことはせず、基盤クラスや上流クラス側で読み込むケースがほとんどです。
require '/var/www/sample/vendor/autoload.php';

// composerでインストールされたモジュールを使用する
echo NaokiHanzawa::baigaeshida(2)."\n<br>"; // 4 
echo NaokiHanzawa::baigaeshida("Baigaeshida!")."\n<br>"; // Baigaeshida!Baigaeshida! 
