<?php
// エラー表示あり
ini_set('display_errors', 1);
// 日本時間にする
date_default_timezone_set('Asia/Tokyo');
// URL/ディレクトリ設定
define('HOME_URL', '/TwitterClone1/');
// データベースの接続情報
define('DB_HOST', 'localhost');
define('DB_USER', 'fujimoto');
define('DB_PASSWORD', 'fujimotopass');
define('DB_NAME', 'twitter_clone1');