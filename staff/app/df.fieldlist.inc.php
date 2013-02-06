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

'staff' => array(
XA_CLASS=>'cls_fl_staff',
XA_SPEC_FILE=>'df.fl.staff.inc.php',
XA_TABLE_NAME=>TBL_STAFF,
XA_ID_NAME=>'staff_id',
XA_INIT_ORDER_BY=>'staff_id ASC',
XA_INIT_PAGE_SIZE=>20
),

'address' => array(
XA_CLASS=>'cls_fl_address',
XA_SPEC_FILE=>'df.fl.address.inc.php',
XA_TABLE_NAME=>TBL_ADDRESS,
XA_ID_NAME=>'address_id',
XA_INIT_ORDER_BY=>'address_id DESC',
XA_INIT_PAGE_SIZE=>20
),

);

?>