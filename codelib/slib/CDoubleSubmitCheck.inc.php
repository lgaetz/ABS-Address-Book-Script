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


class CDoubleSubmitCheck
{
	function Init()
	{
		$_SESSION[ 'double_submit' ] = '';
	}
	
	function Submitted()
	{
		$_SESSION[ 'double_submit' ] = 'Y';
	}
	
	function Check()
	{
		return ( $_SESSION[ 'double_submit' ] == 'Y' );
	}
}

//----------------------------------------------------------------
// END OF FILE
//----------------------------------------------------------------
?>