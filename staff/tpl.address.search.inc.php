<?php include(INC_HTML_TAG); ?>
<?php $hm->Title( __FILE__, RSTR_APP_TITLE, RSTR_ADDRESS, RSTR_SEARCH ); ?>

<head><?php include(INC_HTML_HEADER); ?></head>

<body>

<!-- [BEGIN] Container -->
<div id="container">

<?php include(INC_BODY_HEADER); ?>

<!-- [BEGIN] Main Form -->
<div id="main_div">


<!--  following lines added for Asterisk integration -->
<?php $ext = $this->sys->AuthSession->GetV( "extension" ); ?>
<script>
  function openNewWindow(url) {
     window.open(url, 'pukarock', 'width=300, height=50, scrollbars=no, resizable=yes')
  }
</script>




<?php include(INC_FORM_BEGIN); ?>

<?php include(INC_BODY_INFO); ?>

	<!-- [BEGIN] Search Criteria -->
	<?php echo $hm->SectBegin( RSTR_SEARCH_CRITERIA ); ?>

	<div style='overflow:auto;'>
	<table width='99%'>

	<tr>
		<td align="right"><?php echo RSTR_FIRST_NAME; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:first_name' ); ?></td>
		<td align="right"><?php echo RSTR_LAST_NAME; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:last_name' ); ?></td>
		<td align="right"><?php echo RSTR_TEL; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:tel' ); ?></td>
	</tr>

	<tr>
		<td align="right"><strike><?php echo RSTR_FAX; ?></strike>URI : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:fax' ); ?></td>
		<td align="right"><?php echo RSTR_CELL; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:cell' ); ?></td>
		<td align="right"><?php echo RSTR_EMAIL; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:email' ); ?></td>
	</tr>

	<tr>
		<td align="right">&nbsp;</td>
		<td align="left">&nbsp;</td>
		<td align="right">&nbsp;</td>
		<td align="left">&nbsp;</td>
		<td align="right">&nbsp;</td>
		<td align="right"><?php echo $hm->Button(
			array( '<>'=>'</>',
			'name'=>"_sc=_this/search_pb&",
			'src'=>'search',
			'value'=>RSTR_SEARCH,
		) ); ?></td>
	</tr>

	</table>
	</div>

	<?php echo $hm->SectEnd(); ?>
	<!-- [END] Search Criteria-->

	<!-- [BEGIN] Search Result -->
	<?php if ( $hm->Zb("def:display?") ) { ?>

	<?php echo $hm->SectBegin( RSTR_SEARCH_RESULT ); ?>

	<?php include(INC_SR_TOP_BAR); ?>

	<div style='overflow:auto;'>
	<table class='data_table'>

		<tr class='data_table_caption'>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:address_id'); ?> <?php echo RSTR_ADDRESS_ID; ?></th>
			<th><?php include(INC_SR_SELREC_HEADER); ?></th>
			<th><?php include(INC_SR_EDIT_BTN_HEADER); ?></th>
			<th><?php echo RSTR_ACTIVE; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:first_name'); ?> <?php echo RSTR_FIRST_NAME; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:last_name'); ?> <?php echo RSTR_LAST_NAME; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:tel'); ?> <?php echo RSTR_TEL; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:fax'); ?> <strike><?php echo RSTR_FAX; ?></strike>URI</th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:cell'); ?> <?php echo RSTR_CELL; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:email'); ?> <?php echo RSTR_EMAIL; ?></th>
		</tr>

		<?php while( $hm->zb('@rs:def:begin_table') ) { ?>
		<tr>
			<td style='text-align:right;'><?php echo $hm->Zb('rs:def:address_id'); ?></td>
			<?php include(INC_SR_ID_PARAM); ?>
			<?php include(INC_SR_SELREC); ?>
			<?php include(INC_SR_EDIT_BTN); ?>
			<td style='text-align:center;'><?php echo $hm->Zb('rs:def:active'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:first_name'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:last_name'); ?></td>
			<td style='text-align:left;'><a href="../asterisk/dial.php?IN=<?php echo $ext; ?>&amp;OUT=<?php echo $hm->Zb('rs:def:tel'); ?>" onclick="openNewWindow(this.href); return false;"><?php echo $hm->Zb('rs:def:tel'); ?></a></td>
			<td style='text-align:left;'><a href="../asterisk/sipdial.php?IN=<?php echo $ext; ?>&amp;OUT=<?php echo $hm->Zb('rs:def:fax'); ?>" onclick="openNewWindow(this.href); return false;"><?php echo $hm->Zb('rs:def:fax'); ?></a></td>
			<td style='text-align:left;'><a href="../asterisk/dial.php?IN=<?php echo $ext; ?>&amp;OUT=<?php echo $hm->Zb('rs:def:cell'); ?>" onclick="openNewWindow(this.href); return false;"><?php echo $hm->Zb('rs:def:cell'); ?></a></td>
			<td style='text-align:left;'><a href="mailto:<?php echo $hm->Zb('rs:def:email'); ?>"><?php echo $hm->Zb('rs:def:email'); ?></a></td>
		</tr>
		<?php } ?>

	</table>
	</div>

	<?php include(INC_SR_BOTTOM_BAR); ?>

	<?php echo $hm->SectEnd(); ?>

	<?php } ?>
	<!-- [END] Search Result -->

	<?php echo $hm->SectEndMarker(); ?>

<?php include(INC_FORM_END); ?>

</div>
<!-- [END] Main Form -->

<?php include(INC_BODY_FOOTER); ?>

</div>
<!-- [END] Container -->

</body>
</html>

<?php include(INC_HTML_END); ?>
