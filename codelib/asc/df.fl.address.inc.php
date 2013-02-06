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

$spec = array(

'address_id'=>array(
XA_CLASS=>'CVPrimaryKey',
XA_CAPTION=>RSTR_ADDRESS_ID,
XA_SIZE=>9,
XA_REQUIRED=>false,
XA_MAX_CHAR=>9,
XA_SB_SIZE=>9,
XA_LIST=>'(sp)(sr)(key)'
),

'active'=>array(
XA_CLASS=>'cls_active',
XA_CAPTION=>RSTR_ACTIVE,
XA_INIT_VALUE=>array( 'reg'=>'Y', 'search'=>'Y' ),
XA_REQUIRED=>true,
XA_SELECT_ON_TOP=>STR_SELECT_CAPTION,
XA_SEARCH_OP=>'s=',
XA_LIST=>'(sp)(sr)(fd)'
),

'active_Y' => array(
XA_CLASS=>'CVRadio',
XA_NAME_RS=>nothing,
XA_REQUIRED=>false,
XA_LINKED_TO=>'active',
XA_RADIO_VALUE=>'Y',
XA_LIST=>'(fd)'
),

'active_N' => array(
XA_CLASS=>'CVRadio',
XA_NAME_RS=>nothing,
XA_REQUIRED=>false,
XA_LINKED_TO=>'active',
XA_RADIO_VALUE=>'N',
XA_LIST=>'(fd)'
),

'first_name'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_FIRST_NAME,
XA_SIZE=>24,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>36,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'last_name'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_LAST_NAME,
XA_SIZE=>24,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>36,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'tel'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_TEL,
XA_SIZE=>24,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>36,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'fax'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_FAX,
XA_SIZE=>24,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>36,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'cell'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_CELL,
XA_SIZE=>24,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>36,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'email'=>array(
XA_CLASS=>'CVEmail',
XA_CAPTION=>RSTR_EMAIL,
XA_SIZE=>24,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>100,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'street1'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_STREET1,
XA_SIZE=>40,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>100,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'street2'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_STREET2,
XA_SIZE=>40,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>100,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'city'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_CITY,
XA_SIZE=>24,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>64,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'state'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_STATE,
XA_SIZE=>24,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>64,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'zip'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_ZIP,
XA_SIZE=>15,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>20,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'country'=>array(
XA_CLASS=>'CVText',
XA_CAPTION=>RSTR_COUNTRY,
XA_SIZE=>24,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>64,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'note'=>array(
XA_CLASS=>'CVTextArea',
XA_CAPTION=>RSTR_NOTE,
XA_COLS=>48,
XA_ROWS=>18,
XA_REQUIRED=>false,
XA_MIN_CHAR=>0,
XA_MAX_CHAR=>3000,
XA_SEARCH_OP=>'s%',
XA_LIST=>'(sp)(sr)(fd)'
),

'rlog_create_date_time'=>array(
XA_CLASS=>'cls_rlog_date_time',
XA_CAPTION=>RSTR_CREATE_DATE_TIME,
XA_FORMAT=>'Y-m-d H:i:s',
XA_LIST=>'(rlog)(reg_save)'
),

'rlog_create_user_type'=>array(
XA_CLASS=>'cls_rlog_user_type',
XA_CAPTION=>RSTR_CREATE_USER_TYPE,
XA_LIST=>'(rlog)(reg_save)'
),

'rlog_create_user_id'=>array(
XA_CLASS=>'cls_rlog_user_id',
XA_CAPTION=>RSTR_CREATE_USER_NAME,
XA_LIST=>'(rlog)(reg_save)'
),

'rlog_create_user_name'=>array(
XA_CLASS=>'cls_rlog_user_name',
XA_CAPTION=>RSTR_CREATE_USER_NAME,
XA_LIST=>'(rlog)(reg_save)'
),

'rlog_edit_date_time'=>array(
XA_CLASS=>'cls_rlog_date_time',
XA_CAPTION=>RSTR_EDIT_DATE_TIME,
XA_FORMAT=>'Y-m-d H:i:s',
XA_LIST=>'(rlog)(edit_save)'
),

'rlog_edit_user_type'=>array(
XA_CLASS=>'cls_rlog_user_type',
XA_CAPTION=>RSTR_EDIT_USER_TYPE,
XA_LIST=>'(rlog)(edit_save)'
),

'rlog_edit_user_id'=>array(
XA_CLASS=>'cls_rlog_user_id',
XA_CAPTION=>RSTR_EDIT_USER_NAME,
XA_LIST=>'(rlog)(edit_save)'
),

'rlog_edit_user_name'=>array(
XA_CLASS=>'cls_rlog_user_name',
XA_CAPTION=>RSTR_EDIT_USER_NAME,
XA_LIST=>'(rlog)(edit_save)'
),

);

?>
