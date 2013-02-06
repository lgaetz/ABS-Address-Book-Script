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


//-- User Type
define( 'RSTR_UT_CAP_G', 'Guest' );
define( 'RSTR_UT_CAP_M', 'Member' );
define( 'RSTR_UT_CAP_S', 'Staff' );

//-- Staff Type
define( 'RSTR_ADMINISTRATOR', '管理人' );
define( 'RSTR_GENERAL_STAFF', '一般スタッフ' ); 

//-- Login Page
define( 'RSTR_LOG_IN', 'ログイン' );
define( 'RSTR_USERNAME', 'ユーザー名' );
define( 'RSTR_PASSWORD', 'パスワード' );
define( 'RSTR_ENTER', 'ENTER' );

//-- Log Off Page
define( 'RSTR_LOG_OFF', 'ログオフ' );

//-- Search Section
define( 'RSTR_SEARCH', '検索' );
define( 'RSTR_SEARCH_CRITERIA', '検索条件' );
define( 'RSTR_SEARCH_RESULT', '検索結果' );

//-- Record List
define( 'RSTR_RL_NO_RECORDS_FOUND', '該当するレコードなし' );
define( 'RSTR_RL_SHOWING_RECORDS', '全 ##total_record## 件中 ##sel_range## 件目を表示' );

//-- Log Section
define( 'RSTR_RLOG', 'ログ情報' );
define( 'RSTR_CREATE_DATE_TIME', '作成日時' );
define( 'RSTR_CREATE_USER_TYPE', '作成者タイプ' );
define( 'RSTR_CREATE_USER_NAME', '作成者' );
define( 'RSTR_EDIT_DATE_TIME', '更新日時' );
define( 'RSTR_EDIT_USER_TYPE', '更新者タイプ' );
define( 'RSTR_EDIT_USER_NAME', '更新者' );
define( 'RSTR_LAST_LOGIN_DATE_TIME', '最終ログイン日時' );

//-- Status Bar
define( 'RSTR_BREADCRUMS_MARK', ' > ' );
define( 'RSTR_USER', 'User' );

//-- Buttons
define( 'RSTR_OK', 'OK' );
define( 'RSTR_CANCEL', 'キャンセル' );
define( 'RSTR_EDIT', '編集' );
define( 'RSTR_DETAIL', '詳細' );
define( 'RSTR_ADDNEW', '新規作成' );
define( 'RSTR_SAVE', '保存' );
define( 'RSTR_DELETE', '削除' );
define( 'RSTR_BACK', '戻る' );

//-- SelRec
define( 'RSTR_SELREC_HEADER', 'すべて選択 / すべて非選択' );
define( 'RSTR_SELREC_CHECKBOX', 'このレコードを選択/非選択' );

//-- Page Tab
define( 'RSTR_PAGETAB_FIRST', '先頭の頁へ' );
define( 'RSTR_PAGETAB_PREV', '前の頁へ' );
define( 'RSTR_PAGETAB_PAGE', '#PageNo#頁目' );
define( 'RSTR_PAGETAB_NEXT', '次の頁へ' );
define( 'RSTR_PAGETAB_LAST', '最後の頁へ' );

//-- Order By
define( 'RSTR_ORDER_BY_ASC', '1 &gt;&gt; 9, A &gt;&gt Z' );
define( 'RSTR_ORDER_BY_DESC', 'Z &gt;&gt; A, 9 &gt;&gt; 1' );

//-- Notification
define( 'RSTR_RECORD_UPDATED', '[%s]がアップデートされました。' );
define( 'RSTR_RECORD_SAVED', '[%s]が保存されました。' );
define( 'RSTR_RECORD_ADDED', '[%s]が新規登録されました。' );
define( 'RSTR_RECORD_DELETED', '[%s]が削除されました。' );
define( 'RSTR_RECORDS_DELETED', RSTR_RECORD_DELETED );

//-- Error Message
define( 'RSTR_ERROR', 'Error' );
define( 'RSTR_ERR_EMPTY', '「##c##」が入力されていません。' );
define( 'RSTR_ERR_INVALID_FORMAT', '「##c##」 の書式が正しくありません。##v##' );
define( 'RSTR_ERR_TOO_SHORT', '「##c##」 の入力が短すぎます。##v##' );
define( 'RSTR_ERR_TOO_LONG', '「##c##」 の入力が長すぎます。##v##' );
define( 'RSTR_ERR_TOO_SMALL', '「##c##」 の値が小さすぎます。##v##' );
define( 'RSTR_ERR_TOO_LARGE', '「##c##」 の値が大きすぎます。##v##' );
define( 'RSTR_ERR_INCOMPLETE_INPUT', '「##c##」 が入力されていません。' );
define( 'RSTR_ERR_CAN_NOT_CONFIRM', '「##c##」 が確認できません。' );
define( 'RSTR_ERR_NOT_ASCII', '「##c##」 に半角英数字以外の文字が含まれています。' );
define( 'RSTR_ERR_NOT_DIGIT', '「##c##」 に半角数字以外の文字が含まれています。' );
define( 'RSTR_ERR_DATE_NOT_EXIST', '「##c##」 日付を再度確認して下さい。##v##' );
define( 'RSTR_ERR_DOUBLE_SUBMIT', "このフォームは既に送信されています。" );
define( 'RSTR_ERR_WRONG_UN_PASS', 'E-mailアドレスかパスワードが正しくありません。' );
define( 'RSTR_ERR_USED_USERNAME', 'このユーザー名はすでに登録されています。' );
define( 'RSTR_ERR_USED_EMAIL', 'このE-mailアドレスはすでに登録されています。' );
define( 'RSTR_ERR_CAN_NOT_DELETE_ROOT', 'ルート・アカウントは削除できません。' );

//-- Select
define( 'STR_SELECT_CAPTION', ' ' );
define( 'STR_SELECT_ON_TOP_FOR_SEARCH', '' );

//----------------------------------------------------------------
// END OF FILE
//----------------------------------------------------------------

?>