<?
	$page="about_staff";
	include("../geokids.php");
	include("../content/pagetop.inc");

function staffentry($name, $img, $blurb) {
	print "<tr><td colspan=2 valign=bottom align=left class='text14b'>".$name."</td></tr><tr><td valign=top colspan=2>";
	if ($img!="") {
		print "<table align=left border=0 cellpadding=0 cellspacing=0><tr><td height=170 width=180 valign=top align=left><img src='../img/lastaff/".$img."' width=160 style='border-color: white;border-width: 4px;border-style: solid;' align=left></td></tr></table>";
	}
	print $blurb."</td></tr>";
	print "<tr><td colspan=2 height=8></td></tr>";
}

?>

<table cellspacing=0 border=0 cellpadding=5>

<?
staffentry("Nancy Aguilar, Program Director","nancya.jpg","My name is Nancy Aguilar, and I am the Program Director for Little Aviators, operated by GeoKids.  Teaching has been my passion and as an Early Childhood Educator, I have been in the field and working with children since 1996.<br><br>
I received my education from Cerritos City College and Cal State University, Long Beach.  In the years that I have spent in the field, I have had the opportunity to be part of many children's lives as well as their families, As a member or the National Association for the Education of Young Children (NAEYC), I believe in high quality programs that benefit the development of young children.  The Reggio Emilia philosophy is also one that I am intrigued about as their belief is that children are their own individual and we see them as full of potential, competent and capable of building their own theories.<br><br>
It's an honor to be part of a program that provides that high quality of care. I am excited to see where this journey will take me, and the relationships that will be built in this community.<br><br>
In my spare time, I enjoy just being with my family.  Disneyland is one of our favorite places to be as well as anything outdoors.  Photography is my second calling, as I love to take pictures, especially of my family, nature, and special events.  While at work, I feel it's the best opportunity to capture the children as they are playing, exploring and learning, as it is also a key part in making learning visible to out families.");

staffentry("Elaine Santizo, Educator","elaine.jpg","My name is Elaine Santizo, and I am a teacher at Little Aviators, operated by GeoKids.  I started working with children in 2003 as a volunteer at my stepson's parochial preschool. I then became a teacher's aid and substitute teacher in my time there.  After taking some time off after my first children was born, I went back as a substitute teacher and finished my education in Early Childhood Education at El Camino College, then transferring to Cal State University, Dominguez Hills where I received my degree in Child Development.  During that time, I also volunteer at my daughter's parent participation preschool.<br><br>
I have always been interested in the Reggio Emilia philosophy and also believe that children learn through play and having an environment where they can explore and experiment in constructing their own knowledge. I was fortunate to have an opportunity to complete my internship at Little Aviators, which practices the philosophy. Upon, my completion, I was offered a position as a full time teacher.<br><br>
In my free time, I enjoy spending it with my husband, daughter and stepson.  We enjoy traveling, going to Disneyland, and playing board games together.  I look forward to implementing and improving my knowledge of the Reggio approach at Little Aviators.");

staffentry("Douglas Santos, Educator","douglas.jpg","I'm Douglas Santos, and I began my experience with working with children for over five years in the City of Beverly Hills as a Camp Counselor for children from kindergarten to first grade. From there, I was hired as a Preschool Educator and worked there for over six years.  In that period of time my roles consisted of directing multiple summer programs to mentoring college students in the Early Childhood Education field. I bring my experience here, to Little Aviators.<br><br>
Outside of work, I enjoy being with family and friends. Some of my passion include snowboarding, repairing electronics, watching movies and listing to Spanish and English music.");

staffentry("Jessica Ballenger, Educator","jessica.jpg","Jessica has been working with children since 2003. Her first job was on the campus of Cal State Fullerton, where Jessica received her undergraduate degree in Psychology with a minor in Human Services. After college, she attended Alliant University and received her master's degree in Marriage and Family Therapy in May 2010. Working with children is one of her many passions - she also loves music and dancing. Jessica is so happy to be at GeoKids' Little Aviators and is proud to have had the experience of being here on opening day in April 2010. She hopes to bring some of her therapeutic skills to children to help them grow socially and emotionally.");

staffentry("Shannon Cooper, Educator","shannon.jpg","Shannon has worked with children since she was 16, in both special and regular education. No matter the group of children, they always remind her to look at all things and situations in a new light. She has wanted to be an educator since she can remember and has been working diligently for the past four years to perfect her craft. Now that she is with GeoKids' Little Aviators, she plans to push herself in the Reggio method and to help the children evolve into caring, self-confident thinkers who can make the best decisions.");

staffentry("Yolanda Vidato, Educator","","Yolanda holds a B.A. and an M.A. and is a Preschool Master Teacher. An educator in the fields of ecology, environmental science, horticulture, and nutrition education, Yolanda has worked closely with governmental and non-governmental agencies, in the public and private sector, to close the achievement gap in educating children and youth through science-based garden and nutrition programs in preschool, elementary, middle school, and high school. Yolanda brings a wealth of experience in working with parents, teachers, educators, and the interfaith community to collaborate on and build educational and community partnerships that promote the health, wellness, and educational success of children and families.");

staffentry("Nancy Flores, Educator","nancyf.jpg","My name is Nancy Flores and my passion has always been working with children.  My experience started with babysitting, as I've done it for several families and relatives.  I knew it was a career choice after working with a family for over five years and being part of those children's and families lives.  It made me realize that with guidance and support from an adults, children can prosper.  From there, I took child development courses to pursue my passion.  I graduated from Cal State University, Dominguez Hills with my BA in Child Development.<br><br>
I have learned about early Head State to Reggio Emilia and I chose to work with Little Aviators because I believe in the philosophy and the teacher-child relationships and interactions.  I enjoy the sense of family and togetherness and it is a family that I am proud to be part of.");
 
staffentry("Elizabeth James, Educator","elizabeth.jpg","My name is Elizabeth James and I always wanted to become a teacher.  During my journey in college, I discovered the amazing world of children. My career in Early Childhood Education started in 2002 as a teacher's assistant. I worked in an infant program for a year when I decided to have a family of my own. I had decided to put teaching on hold.  I had my three children and decided to stay at home for the most important years of their lives.  During that time, I was also going to school to gain as much knowledge of about being a teacher.  Once my children began preschool, I continued what I previously started to do and worked as a substitute teacher.  I had the opportunity to work with infants to children of five years old for over five years.  During my spare time, I enjoy going to the beach with my family and spending as much time as I can with my children.  My passion and desire is to teach young children and be able to be part of their growing and learning experience.");

?>

</table>

<? include("../content/pagebottom.inc"); ?>