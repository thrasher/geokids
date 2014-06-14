<? if($page=="home") { ?>

<table width=780 height=125 border=0 cellspacing=0 cellpadding=0>

<tr><td width=40 height=80 background="img/blue.gif">&nbsp;</td><td background="img/blue.gif" align=center><a href="index.php"><img src="img/aviatorslogo.gif" border=0></a></td><td background="img/blue.gif" align=center><img src="img/title.gif"></td><td width=40 background="img/blue.gif">&nbsp;</td></tr>

<tr><td width=780 height=45 background="img/yellow.gif" colspan=4 valign=center>

	<table width="100%" height=20 border=0>

	<tr><td width=80 align=center class="navtext"><a href="http://www.geokids.org/" style="color:red">home</a></td>

	<td width=150 align=center class="navtext"><a href="about" alt="About Little Aviators">about little aviators</a></td>

	<td width=100 align=center class="navtext"><a href="enrollment" alt="Enrollment">enrollment</a></td>

	<td width=70 align=center class="navtext"><a href="inside" alt="Inside Little Aviators">inside</a></td>

	<td width=170 align=center class="navtext"><a href="support">supporting our school</a></td>

	<td width=110 align=center class="navtext"><a href="community">community</a></td>

	<td width=100 align=center class="navtext">&nbsp;</td></tr>

	</table>

</td></tr>

<tr><td height=6 colspan=4><img src="img/sp.gif"></td></tr>

</table>


<? } else /* all other pages */ { ?>



<table width=780 height=125 border=0 cellspacing=0 cellpadding=0>

<tr><td width=40 height=80 background="../img/blue.gif">&nbsp;</td><td background="../img/blue.gif" align=left><a href="../index.php"><img src="../img/aviatorslogo.gif" border=0></a></td><td background="../img/blue.gif" align=center><img src="../img/title.gif"></td><td width=40 background="../img/blue.gif">&nbsp;</td></tr>



<tr><td width=780 height=45 background="../img/yellow.gif" colspan=4 valign=center>

	<table width="100%" height=20 border=0>

	<tr><td width=80 align=center class="navtext"><a href="../index.php">home</a></td>

	<td width=150 align=center class="navtext"><a href="../about" <? if (substr($page,0,5)=="about") print("style=\"color:red\""); ?> alt="About Little Aviators">about little aviators</a></td>

	<td width=100 align=center class="navtext"><a href="../enrollment" <? if (substr($page,0,6)=="enroll") print("style=\"color:red\""); ?> alt="Enrollment">enrollment</a></td>

	<td width=70 align=center class="navtext"><a href="../inside" <? if (substr($page,0,6)=="inside") print("style=\"color:red\""); ?> alt="Inside Little Aviators">inside</a></td>

	<td width=170 align=center class="navtext"><a href="../support" <? if (substr($page,0,7)=="support") print("style=\"color:red\""); ?>>supporting our school</a></td>

	<td width=110 align=center class="navtext"><a href="../community" <? if (substr($page,0,9)=="community") print("style=\"color:red\""); ?>>community</a></td>

	<td width=100 align=center class="navtext">&nbsp;</td></tr>

	</table>

</td></tr>

<tr><td height=6 colspan=4><img src="../img/sp.gif"></td></tr>

</table>



<? } ?>