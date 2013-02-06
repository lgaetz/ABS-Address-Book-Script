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


//----------------------------------------------------------------
// User Configuration Files
//----------------------------------------------------------------
require( dirname(__FILE__) . "/../../config/common.inc.php" );

//----------------------------------------------------------------
// System Platform
//----------------------------------------------------------------
require( dirname(__FILE__). "/../../codelib/sys/common.inc.php" );

//----------------------------------------------------------------
// Application Shared Code
//----------------------------------------------------------------
require( dirname(__FILE__). "/../../codelib/asc/common.inc.php" );

//----------------------------------------------------------------
// Resource
//----------------------------------------------------------------
require( _LANG_FILE_( "res.app.##LANG_CODE##.inc.php" ) );

//----------------------------------------------------------------
// PageSet
//----------------------------------------------------------------
require( 'cls_ps_base.inc.php' );
require( 'cls_ps_frame.inc.php' );
require( 'cls_ps_staff.inc.php' );
require( 'cls_ps_about.inc.php' );
require( 'cls_ps_address.inc.php' );

//----------------------------------------------------------------
// HtmlMacro
//----------------------------------------------------------------
require( 'cls_hm_base.inc.php' );

//----------------------------------------------------------------
// Authorization
//----------------------------------------------------------------
require( 'cls_auth_base.inc.php' );

//----------------------------------------------------------------
// System
//----------------------------------------------------------------
require( 'cls_sys_base.inc.php' );

//-----------------------------------------------------------------------
// [END] StartUp Code
//-----------------------------------------------------------------------

?>