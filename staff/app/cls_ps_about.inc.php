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
// cls_ps_about
//----------------------------------------------------------------
class cls_ps_about extends cls_ps_base
{
	//------------------------------------------------------------
	// CommandProc
	//------------------------------------------------------------
	function CommandProc( &$sc )
	{
		//-- [BEGIN] Assign PageSig
		$pagesig_key = 'pagesig:' . get_class( $this );
		//-- [END] Assign PageSig

		//-- [BEGIN] Read command
		$cmd = $sc->Cmd();
		//-- [END] Read command

		switch( $cmd )
		{

		//------------------------------------------------------
		// Detail
		//------------------------------------------------------
		case 'detail':

			//-- [BEGIN] Set PageID
			$sc->SetPageID( "detail" );
			//-- [END] Set PageID

			//-- [BEGIN] Set template page
			$this->SetPage( $sc, "detail" );
			//-- [END] Set template page

			break;

		//------------------------------------------------------
		// Page Not Found
		//------------------------------------------------------
		default:
			//-- [BEGIN] Unknown command
			$sc->RaiseError( SC_ERR_PAGE_NOT_FOUND );
			//-- [END] Unknown command

			break;
		}
	}
}

//----------------------------------------------------------------
// END OF FILE
//----------------------------------------------------------------
?>