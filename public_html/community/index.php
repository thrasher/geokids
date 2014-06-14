<?
	$page="community";
	include("../geokids.php");
	include("../content/pagetop.inc");

function getdocs($type) {
	$filename="../docs/".$type."/docindex.txt";
	$fHandle=fopen($filename,"r");
	$doclinks=file($filename);
	fclose($fHandle);
	
	$lines=count($doclinks);
	for ($i=0; $i<($lines); $i++) {
	$link=explode("|!|",$doclinks[$i]);
	print "<a href=\"../docs/".$type."/".$link[1]."\" target=\"geokidsdoc\">".$link[0]."</a><br>";
	}
}
?>

<h2>Documents</h2>
<? getdocs("general"); ?><br>

<h2>GeoKids Board Meeting Minutes</h2>
<? getdocs("bodminutes"); ?><br>

<h2>Forms</h2>
<? getdocs("forms"); ?><br>

<? include("../content/pagebottom.inc"); ?>