<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress3' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(PYBK:LocOW2`.+VsGE=R@Km_)UM<kr`lpvx2vj^@vE7gS|;%jWQ)YpME}W}_Z.F' );
define( 'SECURE_AUTH_KEY',  'sixp %0+~j$)R]XPbT%Wu.HIv M-d7s6IR>`Y:o8K!0fDhgk4n0194_3&ie2/i>>' );
define( 'LOGGED_IN_KEY',    ';X2XsmkMl+gA*]v)1%fDDMs$jzz<NgG5.>d, 7|~EXwl_!ec9u&Vu)2gN=uZkWH&' );
define( 'NONCE_KEY',        'X/:<eize0QNTzEV.7u!A1D-g.rwTc^d2=rz~@RF v~-Y87d.NyL6yf8+Re-nE[;N' );
define( 'AUTH_SALT',        'Z7`NdA%4,zD)*2tuukhO2xjf.3iEUs-5xmlGMcXg=BP4.j5$W0O~Ms1[(?8lizx^' );
define( 'SECURE_AUTH_SALT', 'T%jMdB:5n,ucxtzDQ3BhphjA[a/Z~`uPH^wP6e5mA%eKsbXw*(^>Jpodd^b76w`C' );
define( 'LOGGED_IN_SALT',   'W8jU*J]9!Str#^|_i}v *d>zipdM|}sKwE5glpS0mA[m:T!ZDKRn|<k9uqs]L(G>' );
define( 'NONCE_SALT',       'BY?c1[+R!uuW8r2(Oz::33VT!n#~SnB_RgOFm9ag1>O,0+/B8Oq-C;f3,4*qlAR`' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
