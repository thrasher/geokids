<? if($page=="home") { ?>

<table width=780 height=125 border=0 cellspacing=0 cellpadding=0>
<tr><td width=40 height=80 background="img/sp.gif">&nbsp;</td><td background="img/sp.gif" align=left><a href="index.php"><img src="img/newlogo.gif" border=0></a></td><td background="img/sp.gif" align=center><img src="img/newtitletext.gif"></td><td width=40 background="img/sp.gif">&nbsp;</td></tr>

<tr><td width=780 height=45 background="img/teal.gif" colspan=4 valign=center>
	<table width="100%" height=20 border=0>
	<tr><td width=80 align=center class="navtext"><a href="index.php" style="color:blue">home</a></td>
	<td width=120 align=center class="navtext"><a href="about" alt="About Geokids">about geokids</a></td>
	<td width=130 align=center class="navtext"><a href="aviators" alt="Little Aviators">little aviators</a></td>
	<td width=100 align=center class="navtext"><a href="enrollment" alt="Enrollment">enrollment</a></td>
	<td width=70 align=center class="navtext"><a href="inside" alt="Inside Geokids">inside</a></td>
	<td width=170 align=center class="navtext"><a href="support">supporting our school</a></td>
	<td width=110 align=center class="navtext"><a href="community">community</a></td></tr>
	</table>
</td></tr>
<tr><td height=6 colspan=4><img src="img/sp.gif"></td></tr>
</table>

<? } else /* all 
other pages */ { ?>

<table width=780 height=125 border=0 cellspacing=0 cellpadding=0>
<tr><td width=40 height=80 background="../img/sp.gif">&nbsp;</td><td background="../img/sp.gif" align=left><a href="../index.php"><img src="../img/newlogo.gif" border=0></a></td><td background="../img/sp.gif" align=center><img src="../img/newtitletext.gif"></td><td width=40 background="../img/sp.gif">&nbsp;</td></tr>

<tr><td width=780 height=45 background="../img/teal.gif" colspan=4 valign=center>
	<table width="100%" height=20 border=0>
	<tr><td width=80 align=center class="navtext"><a href="../index.php">home</a></td>
	<td width=120 align=center class="navtext"><a href="../about" <? if (substr($page,0,5)=="about") print("style=\"color:blue\""); ?> alt="About Geokids">about geokids</a></td>
	<td width=130 align=center class="navtext"><a href="../aviators" <? if (substr($page,0,5)=="aviat") print("style=\"color:blue\""); ?> alt="Little Aviators">little aviators</a></td>
	<td width=100 align=center class="navtext"><a href="../enrollment" <? if (substr($page,0,6)=="enroll") print("style=\"color:blue\""); ?> alt="Enrollment">enrollment</a></td>
	<td width=70 align=center class="navtext"><a href="../inside" <? if (substr($page,0,6)=="inside") print("style=\"color:blue\""); ?> alt="Inside Geokids">inside</a></td>
	<td width=170 align=center class="navtext"><a href="../support" <? if (substr($page,0,7)=="support") print("style=\"color:blue\""); ?>>supporting our school</a></td>
	<td width=110 align=center class="navtext"><a href="../community" <? if (substr($page,0,9)=="community") print("style=\"color:blue\""); ?>>community</a></td></tr>
	</table>
</td></tr>
<tr><td height=6 colspan=4><img src="../img/sp.gif"></td></tr>
</table>

<? } ?>