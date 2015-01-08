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
define('DB_NAME', 'minato');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '~gs$,1O&@wKdf3jI9P JQSJEyd.Yh6EaS[%>uPV+}K)LRNYRf%!rf5`ePxEu-&6r');
define('SECURE_AUTH_KEY',  '7YfN0fSTGa1CQV}s$DGL-{cMz[p^HtNEUzne}Ld<#omo;O~Ybkrel/@8>BgIK4_s');
define('LOGGED_IN_KEY',    'fk;N:rCl.-)&bl:E{p%$E,_qidN}<>;u{vQ,.A)TIQ?z4o?c6#eP1@}>!-Rr1;P^');
define('NONCE_KEY',        '|XpAvrd*6c,suTE4z|>6_bvD`97P5bJ ;MyGH0?n>jpfZ|~p#Y6-BY,_Y-i|(IxM');
define('AUTH_SALT',        'vVFfj`<XL|6$HVk5zCdLp^qM^o4*k@@Bm3Z||sF}z#&n_&L`k1=r%Rrj-@~n8Zx5');
define('SECURE_AUTH_SALT', 'Ko:aP5O200W|OwF3C|aW|S!TBb<M0s~b2AWU,f%~Xr^2A:OSyJoC)}`|Bk{|B,yf');
define('LOGGED_IN_SALT',   'hnqrnh7D=W94Y1| o@E$4t^@z$9}dC8.c@zeeKd{-bRa%kyT_PI&-)BbJA>m<i7|');
define('NONCE_SALT',       '4a|.$fGt,p&M6q}I#PL17#oyEg|xZuv8(BzUj,JP z9=k1ld3?i+=Kt{A9Z+Me!@');

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
