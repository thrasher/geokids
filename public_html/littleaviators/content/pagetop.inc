<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html><head>
<?
	include("../content/header.inc");
	if($page=="about_campus") include("campus_slideshow.inc");
	if($page=="inside_learning") include("projects_slideshow.inc");
	if($page=="aviators_pictures") include("aviators_slideshow.inc");

	include("../content/google_tracking.inc");
?>
</head>


<body topmargin=0 marginheight=0 bgcolor="#FFFFFF"><center>

<? if($page=="enrollment_faq") print("<a name=\"toc\"></a>"); ?>

<? include("../content/nav.inc"); ?>

<table width=780 border=0 cellpadding=0 cellspacing=0>
<tr><td width=194 bgcolor="#DDDDDD" valign=top>
	<table border=0 cellspacing=0 cellpadding=20>
	<tr><td width=194 valign=top align=right class="text">


<?
	if($page!="") {
		if($pos=strpos($page,"_")) {
			$navfile=substr($page,0,$pos)."_nav.inc";
		} else {
			$navfile=$page."_nav.inc";
		}
		include($navfile);
	}
?>
	</td></tr>
	</table>

</td>
<td width=6>&nbsp;</td>
<td width=580>
	<table border=0 cellspacing=0 cellpadding=0>
<?
	if($heroimg!="none") {

		switch($page) {
		case "inside_learning":
			print("<tr><td width=580 height=300><script type=\"text/javascript\">new fadeshow(fadeimages, 580, 300, 0, 3000, 0)</script></td></tr>");
		break;
		
		default:
			break;
		}		
	
	}
?>
	<tr><td width=580>
		<table border=0 cellspacing=0 cellpadding=20>
		<tr><td width=580 height=350 background="../img/yellow.gif" valign=top align=left class="text">
