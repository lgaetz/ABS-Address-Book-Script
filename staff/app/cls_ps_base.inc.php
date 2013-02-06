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
// cls_ps_base
//----------------------------------------------------------------
class cls_ps_base extends cls_ps_aso
{
	//------------------------------------------------------------
	// OnLoadFieldListSpec
	//------------------------------------------------------------
	function OnLoadFieldListSpec()
	{
		include( 'df.fieldlist.inc.php' );
		$this->SetFieldListSpec( $spec );
	}

	//------------------------------------------------------------
	// GetSelRecArray
	//------------------------------------------------------------
	function GetSelRecArray()
	{
		$ax = $this->sys->GetIV( '_selrec_' );
		$selrec = array();
		foreach( $ax as $v )
		{
			$v = trim( $v );
			if ( CValidator::IsInteger( $v ) )
			{
				$selrec[] = intval( $v );
			}
		}
		return $selrec;
	}
}

//----------------------------------------------------------------
// END OF FILE
//----------------------------------------------------------------
?>