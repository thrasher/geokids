<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?
	$page="home";
	include("geokids.php");
?>
<html><head><? include("content/header.inc"); ?>


<script type="text/javascript">
      
/***********************************************
* Ultimate Fade-In Slideshow (v1.51): © Dynamic Drive (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/
 
var fadeimages=new Array()
//SET IMAGE PATHS. Extend or contract array as needed
fadeimages[0]=["img/home/homehero01.jpg", "", ""]
fadeimages[1]=["img/home/homehero02.jpg", "", ""]
fadeimages[2]=["img/home/homehero03.jpg", "", ""]
fadeimages[3]=["img/home/homehero04.jpg", "", ""]
fadeimages[4]=["img/home/homehero05.jpg", "", ""]
fadeimages[5]=["img/home/homehero06.jpg", "", ""]
fadeimages[6]=["img/home/homehero07.jpg", "", ""]
fadeimages[7]=["img/home/homehero08.jpg", "", ""]
fadeimages[8]=["img/home/homehero09.jpg", "", ""]
fadeimages[9]=["img/aviators/aviatorshero12.jpg", "", ""]

var fadebgcolor="white"

////NO need to edit beyond here/////////////
 
var fadearray=new Array() //array to cache fadeshow instances
var fadeclear=new Array() //array to cache corresponding clearinterval pointers
 
var dom=(document.getElementById) //modern dom browsers
var iebrowser=document.all
 
function fadeshow(theimages, fadewidth, fadeheight, borderwidth, delay, pause, displayorder){
this.pausecheck=pause
this.mouseovercheck=0
this.delay=delay
this.degree=10 //initial opacity degree (10%)
this.curimageindex=0
this.nextimageindex=1
fadearray[fadearray.length]=this
this.slideshowid=fadearray.length-1
this.canvasbase="canvas"+this.slideshowid
this.curcanvas=this.canvasbase+"_0"
if (typeof displayorder!="undefined")
theimages.sort(function() {return 0.5 - Math.random();}) //thanks to Mike (aka Mwinter) :)
this.theimages=theimages
this.imageborder=parseInt(borderwidth)
this.postimages=new Array() //preload images
for (p=0;p<theimages.length;p++){
this.postimages[p]=new Image()
this.postimages[p].src=theimages[p][0]
}
 
var fadewidth=fadewidth+this.imageborder*2
var fadeheight=fadeheight+this.imageborder*2
 
if (iebrowser&&dom||dom) //if IE5+ or modern browsers (ie: Firefox)
document.write('<div id="master'+this.slideshowid+'" style="position:relative;width:'+fadewidth+'px;height:'+fadeheight+'px;overflow:hidden;"><div id="'+this.canvasbase+'_0" style="position:absolute;width:'+fadewidth+'px;height:'+fadeheight+'px;top:0;left:0;filter:progid:DXImageTransform.Microsoft.alpha(opacity=10);opacity:0.1;-moz-opacity:0.1;-khtml-opacity:0.1;background-color:'+fadebgcolor+'"></div><div id="'+this.canvasbase+'_1" style="position:absolute;width:'+fadewidth+'px;height:'+fadeheight+'px;top:0;left:0;filter:progid:DXImageTransform.Microsoft.alpha(opacity=10);opacity:0.1;-moz-opacity:0.1;-khtml-opacity:0.1;background-color:'+fadebgcolor+'"></div></div>')
else
document.write('<div><img name="defaultslide'+this.slideshowid+'" src="'+this.postimages[0].src+'"></div>')
 
if (iebrowser&&dom||dom) //if IE5+ or modern browsers such as Firefox
this.startit()
else{
this.curimageindex++
setInterval("fadearray["+this.slideshowid+"].rotateimage()", this.delay)
}
}

function fadepic(obj){
if (obj.degree<100){
obj.degree+=10
if (obj.tempobj.filters&&obj.tempobj.filters[0]){
if (typeof obj.tempobj.filters[0].opacity=="number") //if IE6+
obj.tempobj.filters[0].opacity=obj.degree
else //else if IE5.5-
obj.tempobj.style.filter="alpha(opacity="+obj.degree+")"
}
else if (obj.tempobj.style.MozOpacity)
obj.tempobj.style.MozOpacity=obj.degree/101
else if (obj.tempobj.style.KhtmlOpacity)
obj.tempobj.style.KhtmlOpacity=obj.degree/100
else if (obj.tempobj.style.opacity&&!obj.tempobj.filters)
obj.tempobj.style.opacity=obj.degree/101
}
else{
clearInterval(fadeclear[obj.slideshowid])
obj.nextcanvas=(obj.curcanvas==obj.canvasbase+"_0")? obj.canvasbase+"_0" : obj.canvasbase+"_1"
obj.tempobj=iebrowser? iebrowser[obj.nextcanvas] : document.getElementById(obj.nextcanvas)
obj.populateslide(obj.tempobj, obj.nextimageindex)
obj.nextimageindex=(obj.nextimageindex<obj.postimages.length-1)? obj.nextimageindex+1 : 0
setTimeout("fadearray["+obj.slideshowid+"].rotateimage()", obj.delay)
}
}
 
fadeshow.prototype.populateslide=function(picobj, picindex){
var slideHTML=""
if (this.theimages[picindex][1]!="") //if associated link exists for image
slideHTML='<a href="'+this.theimages[picindex][1]+'" target="'+this.theimages[picindex][2]+'">'
slideHTML+='<img src="'+this.postimages[picindex].src+'" border="'+this.imageborder+'px">'
if (this.theimages[picindex][1]!="") //if associated link exists for image
slideHTML+='</a>'
picobj.innerHTML=slideHTML
}
 
 
fadeshow.prototype.rotateimage=function(){
if (this.pausecheck==1) //if pause onMouseover enabled, cache object
var cacheobj=this
if (this.mouseovercheck==1)
setTimeout(function(){cacheobj.rotateimage()}, 100)
else if (iebrowser&&dom||dom){
this.resetit()
var crossobj=this.tempobj=iebrowser? iebrowser[this.curcanvas] : document.getElementById(this.curcanvas)
crossobj.style.zIndex++
fadeclear[this.slideshowid]=setInterval("fadepic(fadearray["+this.slideshowid+"])",50)
this.curcanvas=(this.curcanvas==this.canvasbase+"_0")? this.canvasbase+"_1" : this.canvasbase+"_0"
}
else{
var ns4imgobj=document.images['defaultslide'+this.slideshowid]
ns4imgobj.src=this.postimages[this.curimageindex].src
}
this.curimageindex=(this.curimageindex<this.postimages.length-1)? this.curimageindex+1 : 0
}
 
fadeshow.prototype.resetit=function(){
this.degree=10
var crossobj=iebrowser? iebrowser[this.curcanvas] : document.getElementById(this.curcanvas)
if (crossobj.filters&&crossobj.filters[0]){
if (typeof crossobj.filters[0].opacity=="number") //if IE6+
crossobj.filters(0).opacity=this.degree
else //else if IE5.5-
crossobj.style.filter="alpha(opacity="+this.degree+")"
}
else if (crossobj.style.MozOpacity)
crossobj.style.MozOpacity=this.degree/101
else if (crossobj.style.KhtmlOpacity)
crossobj.style.KhtmlOpacity=this.degree/100
else if (crossobj.style.opacity&&!crossobj.filters)
crossobj.style.opacity=this.degree/101
}
 
 
fadeshow.prototype.startit=function(){
var crossobj=iebrowser? iebrowser[this.curcanvas] : document.getElementById(this.curcanvas)
this.populateslide(crossobj, this.curimageindex)
if (this.pausecheck==1){ //IF SLIDESHOW SHOULD PAUSE ONMOUSEOVER
var cacheobj=this
var crossobjcontainer=iebrowser? iebrowser["master"+this.slideshowid] : document.getElementById("master"+this.slideshowid)
crossobjcontainer.onmouseover=function(){cacheobj.mouseovercheck=1}
crossobjcontainer.onmouseout=function(){cacheobj.mouseovercheck=0}
}
this.rotateimage()
}

</script>

<? include "content/google_tracking.inc"; ?>

</head>

<body topmargin=0 marginheight=0 bgcolor="#FFFFFF"><center>

<? include("content/nav.inc"); ?>

<table width=780 border=0 cellpadding=0 cellspacing=0>
<tr><td width=194 bgcolor="#DDDDDD" valign=top>

	<table border=0 cellspacing=0 cellpadding=10>
	<tr><td valign=top class="text10">
Little Aviators was opened in 1997 and occupies approximately 3800 sf. ft. indoors of the Hawthorne Federal Building. Little Aviators was designed as a mini-center model and has 2 open, mixed age classrooms. An outdoor playground of approximately 10,000 sq. ft. is located adjacent to the center. All spaces meet the requirements for CA Title 22 regulations for Child Care Centers, the accreditation standards set by the National Association of the Education of Young Children, and are accessible by people with differing abilities. Preschool children approximately 2 to 5.9 years of age attend our preschool programs. A maximum of 15 children are cared for at any one time in each classroom; two full time teachers and an aids will provide a 6:1 ratio.
	</td></tr>
	</table>

</td>
<td width=6>&nbsp;</td>
<td width=580 height=400>
<script type="text/javascript">
//new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
new fadeshow(fadeimages, 580, 400, 0, 3000, 0)
</script>

</td>

</tr>
<? /* 

<tr><td height=6 colspan=3><img src="img/sp.gif" width=780 height=6></td></tr>


<tr><td width=194 height=175 class="text" align="center">
</td>
<td width=6>&nbsp;</td>
<td width=580 height=175 background="img/yellow.gif" align=left valign=top>
	<table border=0 cellspacing=0 cellpadding=20>
	<tr><td valign=top class="text">
		<? include("content/news.txt"); ?>
	</td></tr></table>
</td>
</tr>

*/ ?>
	
</table>

<? include "content/footer.inc"; ?>

</center>

<? include "content/tracking.inc"; ?>

</body></html>