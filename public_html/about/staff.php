<?
	$page="about_staff";
	include("../geokids.php");
	include("../content/pagetop.inc");

function staffentry($name, $img, $blurb) {
	print "<tr><td colspan=2 valign=bottom align=left class=\"text14b\">".$name."</td></tr><tr><td valign=top colspan=2>";
	if ($img!="") {
		print "<table align=left border=0 cellpadding=0 cellspacing=0><tr><td height=138 width=198 valign=top align=left><img src=\"../img/staff2/".$img."\" width=180 style=\"border-color: white;border-width: 4px;border-style: solid;\" align=left></td></tr></table>";
	}
	print $blurb."</td></tr>";
	//print "<tr><td colspan=2 height=16></td></tr>";
}

?>

<table cellspacing=0 border=0 cellpadding=5>
<tr><td colspan=2>
<span class="text16b">Working at GeoKids</span><br>
The GeoKids Educators are a group of reflective, caring, imaginative, and life long learners. The GeoKids Educators are passionate, dedicated individuals who are active in a wide range of personal interests and professional development activities.
</td></tr>

<tr><td colspan=2>
<span class="text16b">Leadership Team</span><br>
The GeoKids Leadership Team was formed in the winter of 2012, and is comprised of four GeoKids educators. Heather Morado, Executive Director of GeoKids (since 2005), works closely with the GeoKids leadership team and Board of Director to support the vision and mission of the program. Stacey James, Associate Director (since 2010), has been a mentor teacher for over 10 years and helps support families with her workshops and trainings. Nicholas Kleeman-Keller, Program Coordinator (since 2012), creates and supports the outdoor learning environments at GeoKids. Susan Thayer, Program Coordinator (since 2011), has created and GeoKids environmental strategies and guidelines.
</td></tr>

<?

staffentry("Heather Morado, Executive Director","heather.jpg","Heather has over 15 years of experience working with teachers, families, and children in the Bay Area. She has been a part of the GeoKids community since the spring of 1998. She is a strong advocate for children and families. Heather has focused on a reflective, responsive, and collaborative approach in her work as the director of GeoKids.<br><br>
Heather is an active member of and presenter for the National Association for the Education of Young Children (NAEYC). She has presented various workshops all over the country and has worked closely with the Innovative Teacher Project for the past five years. She has traveled with her staff to Reggio Emilia, Italy, as a part of the Spring 2006 delegation that was organized by Reggio Children.");

staffentry("Stacey James, Associate Director","","Stacey began working with young children and their families at GeoKids in 1996. She came to education from an entirely different career after deciding it was the most meaningful work that she could do. Stacey says it's continually challenging, frequently exhilarating, and always fulfilling.<br><br>
She has a B.A. in Child Development and is working on her master's degree. Her son youngest is a GeoKids alum. Her main hobbies are gardening and cooking. She also enjoys needlework and playing the piano.");

staffentry("Nicholas Kleeman-Keller","nick.jpg","Nick has taught at GeoKids since the beginning of 2009, after receiving his training in early childhood education at Cabrillo College in Santa Cruz County.  Nick values strong communities and is proud to have returned to his hometown to rejoin his family, who are also educators, in making our area a great place to live and learn. He loves the way that working with young children puts me in touch with basic elements and enjoys hearing children's stories and fresh perspectives and making connections with them in the natural world.<br><br>
Outside of school, Nick is an avid gardener and enjoy bicycling, folk music, and wilderness adventures.");


staffentry("Susan Thayer","susan.jpg","Parenthood helped Susan discover her passion for child development and the need for high-quality childcare. Changing careers, she obtained a B.A. in Child Development and discovered her interest in the Reggio Emilia approach. Susan is honored to be a part of the GeoKids community and looks forward to a challenging and joyful job every day.<br><br>
Susan's other interests include traveling, learning, and enjoying time with friends and family - especially her wonderful daughter.");

?>

<tr><td colspan=2>
<br>
<span class="text16b">GeoKids Staff</span>
<br>
Our teachers and staff are chosen for their warmth and compassion, their knowledge of child development, and their ability to support families. Respect is the underlying element in the philosophy of GeoKids. Respect is not limited to the children who are served by the program but is also extended to the families, staff, and cultures included in the program.

</td></tr>

<?

staffentry("Kelly Davies","kellyd.jpg","In 2003, Kelly began her career working one-on-one with young children and adolescents. After a few years in behavioral health services, she decided that she most enjoyed working with children ages 0 to 5. She spent about four years in early intervention, advocating for children while working in a recovery center in San Francisco. Kelly found her way to GeoKids in September 2009.");

staffentry("Danny Valencia","danny.jpg","");

staffentry("Linnea Hilton","linnea.jpg","Linnea has been with GeoKids since 1997 and she has been working with young children for 12 years.  What she enjoys most about her work with kids is exploring their world with them. They continually illuminate its possibilities, joys and wonders.<br><br>Her hobbies include traveling, reading, and interacting with the people and world around her.");


staffentry("Claudia Koch","claudia.jpg","");

staffentry("Monica Limberis","monica.jpg","");

staffentry("Chae Marshall","chae.jpg","Chae began her career with GeoKids in 2000 and has been in the child development field for nine years.  Her favorite aspect of working with children is witnessing their discoveries.<br><br>
While not working, Chae is focused on taking care of her child and watching the occasional movie.");

staffentry("Tracy Pierce","","Tracy started working seven years ago but has been working in the classroom since she was 14 years old and have been teaching since that time.  Preschool is Tracy's passion, and she is always amazed at what preschoolers can already do and how they view life.<br><br>
Tracy's hobbies include outdoor adventure travel, working on her home, spending time with her partner, family and friends.");

staffentry("Marisol Rocha","marisol.jpg","Marisol has been at GeoKids for about 10 years. She started as a teacher's aide and soon discovered that working with young children was what she wanted to do. Marisol obtained her ECE units and will continue with education in this field.<br><br>
When not working, she spends time with her two daughters and enjoys them greatly.");


?>

</table>

<? include("../content/pagebottom.inc"); ?>

