<?php include(INC_HTML_TAG); ?>
<?php $hm->Title( __FILE__, RSTR_APP_TITLE, RSTR_ABOUT ); ?>

<head><?php include(INC_HTML_HEADER); ?>

<style type="text/css">
span.about_title {
	font-weight:normal;
	font-size:200%;
}
</style>

</head>

<body>

<!-- [BEGIN] Container -->
<div id="container">

<?php include(INC_BODY_HEADER); ?>

<!-- [BEGIN] Main Form -->
<div id="main_div">

<?php //include(INC_FORM_BEGIN); ?>

<?php include(INC_BODY_INFO); ?>

	<!-- [BEGIN] about -->
	<?php echo $hm->SectBegin( RSTR_ABOUT ); ?>

	<div style='overflow:auto;'>
	<table width='99%' border='0' cellpadding='3' cellspacing='1'>

	<tr>
		<td align='left'>
			<span class='about_title'>
			<?php echo RSTR_APP_TITLE; ?> <?php echo RSTR_APP_VERSION; ?>
			</span>
		</td>
	</tr>

	<tr>
		<td align='left'>
			 <a href='<?php echo RSTR_APP_HOMEPAGE_URL; ?>' target='_blank'>
			 <?php echo RSTR_APP_HOMEPAGE_CAPTION; ?>
			 </a>
		</td>
	</tr>

	<tr>
		<td align='left'>
<form action='http://www.phpkobo.com/mod/AB/ab-builder/form/index.php?id=1001' method='post' target='_blank'>
<input type='hidden' name='spec' value="ec1-eyJkYXRlX3RpbWUiOiIyMDEzLTAxLTIzIDE3OjIxOjE4IiwiZ3ZlciI6IkdFTi0xMDAiLCJzdmVyIjoiQUItMTE3IiwidGl0bGUiOiJBZGRyZXNzIEJvb2siLCJjZmciOiJcL1wvIEFkZHJlc3MgQm9vayBTY3JpcHQgMS4xNyBbQUItMTE3XVxyXG5cL1wvXHJcblwvXC8gRm9ybWF0OiAoRmllbGQgTmFtZSksIChTaXplIGluIERhdGFiYXNlKSwgKFNpemUgb2YgSW5wdXQgQm94KVxyXG5cL1wvXHJcblxyXG5GaXJzdCBOYW1lLCAzNiwgMjRcclxuTGFzdCBOYW1lLCAzNiwgMjRcclxuVGVsLCAzNiwgMjRcclxuRmF4LCAzNiwgMjRcclxuQ2VsbCwgMzYsIDI0XHJcbkVtYWlsLCAxMDAsIDI0XHJcblN0cmVldDEsIDEwMCwgNDBcclxuU3RyZWV0MiwgMTAwLCA0MFxyXG5DaXR5LCA2NCwgMjRcclxuU3RhdGUsIDY0LCAyNFxyXG5aaXAsIDIwLCAxNVxyXG5Db3VudHJ5LCA2NCwgMjRcclxuTm90ZSwgMzAwMCwgNDh4MTgifQ==" />
<input type='submit' value='Build a new script based on this script' />
</form>
		</td>
	</tr>

	</table>
	</div>

	<?php echo $hm->SectEnd(); ?>
	<!-- [END] about -->

	<?php echo $hm->SectEndMarker(); ?>

<?php //include(INC_FORM_END); ?>

</div>
<!-- [END] Main Form -->

<?php include(INC_BODY_FOOTER); ?>

</div>
<!-- [END] Container -->

</body>
</html>

<?php include(INC_HTML_END); ?>
