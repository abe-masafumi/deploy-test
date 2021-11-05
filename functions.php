<?php
ini_set('display_errors', 1);
// 「dbname」「port」「host」「username」「password」を設定
// DB接続情報　　　　↓ここだけ自分のデータベース名に変更！
define('DSN', 'mysql:host=localhost;dbname=deploy_test');
define('DB_USER', 'root');
define('DB_PASS', '');

// define('DSN', 'mysql:host=mysql-2.mc.lolipop.lan;port=3306; dbname=79b64b82ded72aa603b7a8a91be29aae');
// define('DB_USER', '79b64b82ded72aa603b7a8a91be29aae');
// define('DB_PASS', 'Masafumi4555');

try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit(); // 「dbError:...」が表示されたらdb接続でエラーが発生していることがわかる
}
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'utf-8');
}
?>