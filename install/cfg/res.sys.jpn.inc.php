<?php
//==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>
//
// Address Book Script v1.17 for Generator 1.00
// Copyright (c) phpkobo.com ( http://www.phpkobo.com/ )
// Email : admin@phpkobo.com
// ID : AB201-117 [G100]
// URL : http://www.phpkobo.com/address_book.php
//
// This software is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; version 2 of the
// License.
//
//==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<


//-- Error Message
define( 'ERR_CANNOT_CONNECT_TO_DB', 
	"データベース・サーバーに接続できません [##co## ##hostname## ##cc##]" );
define( 'ERR_CANNOT_FIND_DB',
	"データベースが見つかりません [##co## ##database## ##cc##]" );
define( 'ERR_TABLE_EXISTS',
	"テーブル [##table##] は [##database##] 内にすでに存在します" );

//-- Strings ( Home Page )
define( 'RSTR_INSTALL_INSTALLATION', 'インストレーション' );

//-- Strings ( Home Page )
define( 'RSTR_INSTALL_START_INSTALL',
	'下の<b>セットアップ</b>ボタンをクリックして ' .
	RSTR_APP_TITLE . ' ' . RSTR_APP_VERSION . ' の' .
	'インストレーションを開始してください。' );

define( 'RSTR_INSTALL_CHECK_ERROR',
	'エラーが発生したために、インストールができません。<br/>' .
	'データベースの設定をもう一度確認した後に、' .
	'<b>セットアップ</b>をクリックしてください。' );
define( 'RSTR_INSTALL_SETUP', 'セットアップ' );

//-- Strings ( Done Page )
define( 'RSTR_INSTALL_SUCCESS',
	'インストレーションが成功いたしました。' );
define( 'RSTR_INSTALL_IMPORTANT', '重要' );
define( 'RSTR_INSTALL_REMOVE_FOLDER',
	"<font color='#000000'>install</font>フォルダを残しておくと、" .
	"セキュリティ・ホールになるので、Webサイトから削除しておいてください。" );
define( 'RSTR_INSTALL_LOG_IN',
	"「install」フォルダを削除後、" .
	"<a href='../staff/index.php' target='_blank'>" .
	RSTR_APP_TITLE . " 管理エリア</a> " .
	"に以下のユーザー名とパスワードでログインしてください。" );
define( 'RSTR_INSTALL_USERNAME', 'ユーザー名' );
define( 'RSTR_INSTALL_PASSWORD', 'パスワード' );

?>