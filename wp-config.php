<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'pura_ero');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'pura_ero');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'ero201502');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VWB |c|-xy;R+J:|y<4X7 %;pCH{WEBG&=V+!L{  )k&I@xi lg#3qb*|2Iz!z6?');
define('SECURE_AUTH_KEY',  'X7p@D!gEOjNY_Sq|?asE0dv*g|)cum498fWRH8%&Y?_vBq(B;FG(1MOgvpNgJGM-');
define('LOGGED_IN_KEY',    '@+-J8MM>1T|(qKj,DPj_j^BhwaB`(BQ7!N;0,V-*yh|>iR-r99}>X|5}q4pyB@@J');
define('NONCE_KEY',        'L23+)x)7|yShOp7z9VUMHPY=UDS)pQ<}4p[uJ+5^ru!5py4l!Q[`qXF.j !O1@#.');
define('AUTH_SALT',        'Wu,rLrA-_H!|,qHu}|i:3ZJ?-Cyj]A_QusutUniVhe0-:l2<T$`nD<{Y5Zkk@J8l');
define('SECURE_AUTH_SALT', '#cI@?4yNv++4v8mPkuA)Ej--Oe8[-s/9o/u)zji-@C#^tHQLzeMP?JW)n^xFw|km');
define('LOGGED_IN_SALT',   'zzJA}H*SU*TpM`+F]ECJm%xq>/iHa=r[?}9.R~E/jK+~$%&!.--qFu46xhl4B+vG');
define('NONCE_SALT',       '-rL#[@%6h/P%q|--p ,bv_P;p#Z^DOzsLbCj}{x9aeic+A%kbs3f2&l2.+6VW2Oz');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
