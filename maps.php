<?php 
$pid=3;
include "INC_HEAD.php";
?>
<style>	 
	
			
	h1{
		background:linear-gradient(#CC00CC,#FFCCFF);
		border-bottom:8px solid #990099;}	
	
	#zmap{
	width:250px;
	height:420px;
	float:left;	
	position: relative;
	margin:0 0 30px 350px;} 
	
	#map{
	width:250px;
	height:420px;
	float:left;		
	position: absolute;}
	
 .zmaps{
	position: absolute;
	display: none;
	font-weight: bold;
	background-color: rgba(255,255,255,0.6);
	padding:5px;}
 
#ampara,#p_ampara{top:218px;left:139px}
#anuradhapura,#p_anuradhapura{top:92px;left:37px}
#badulla,#p_badulla{top:233px;left:128px}
#batticaloa,#p_batticaloa{top:162px;left:163px}
#colombo,#p_colombo{top:300px;left:32px}
#gampaha,#p_gampaha{top:262px;left:27px}
#galle,#p_galle{top:352px;left:42px}
#hambantota,#p_hambantota{top:342px;left:106px}
#jaffna,#p_jaffna{top:7px;left:7px}
#kandy,#p_kandy{top:245px;left:86px}
#kalutara,#p_kalutara{top:320px;left:30px}
#kegalle,#p_kegalle{top:256px;left:61px}
#kilinochchi,#p_kilinochchi{top:17px;left:40px}
#kurunegala,#p_kurunegala{top:171px;left:33px}
#mannar,#p_mannar{top:74px;left:12px}
#matara,#p_matara{top:359px;left:83px}
#matale,#p_matale{top:191px;left:96px}
#moneragala,#p_moneragala{top:249px;left:131px}
#mullativu,#p_mullativu{top:48px;left:60px}
#nuwaraeliya,#p_nuwaraeliya{top:279px;left:90px}
#polonnaruwa,#p_polonnaruwa{top:157px;left:120px}
#puttalam,#p_puttalam{top:131px;left:15px}
#ratnapura,#p_ratnapura{top:302px;left:62px}
#trincomalee,#p_trincomalee{top:88px;left:125px}
#vavuniya,#p_vavuniya{top:75px;left:65px}
</style>

<script>
function highlight(disc) {
	for (i=0;i<25;i++) {
		document.getElementsByClassName('zmaps')[i].style.display = "none";
	}
	document.getElementById(disc).style.display = 'block';
	document.getElementById(disc).style.zIndex = 1;
}
function nohighlight(disc) {}
</script>
	
<?php 
include "INC_NAV.php";?>



		<h1>MAP LOCATION</h1>
			<div id="zmap"> 		
  		<img src="map-sri-lanka.png" alt="map" usemap="#map" id="map">
		<map name="map">
			<area shape="poly"  onmouseover="highlight('ampara')" onmouseout="nohighlight('ampara')" onclick="show('ampara',1)" coords="148,234,147,227,159,227,166,232,171,233,172,225,179,224,187,231,196,233,193,240,198,247,208,248,215,246,219,257,228,251,231,255,235,263,238,275,236,284,239,303,234,319,231,334,227,344,223,353,212,344,216,309,212,295,212,294,204,292,201,286,202,280,205,279,201,272,199,264,197,254,190,255,187,259,187,265,181,267,182,274,180,276,177,272,175,269,171,266,169,257,169,248,169,243,166,242,163,247,161,248,156,248,152,250,150,244,148,239,146,238,147,238" >
			<area shape="poly"  onmouseover="highlight('anuradhapura')" onmouseout="nohighlight('anuradhapura')" onclick="show('anuradhapura',2)" coords="108,109,114,114,114,117,103,128,99,130,95,128,92,127,89,133,83,139,81,142,77,139,74,134,72,132,72,127,68,128,65,129,61,130,58,131,54,129,53,129,51,147,48,152,43,158,45,165,47,172,53,175,59,178,69,182,84,190,87,193,91,194,91,199,92,202,96,204,97,216,99,219,100,218,106,213,110,213,117,203,120,199,126,197,125,181,129,175,129,170,130,168,139,168,142,165,143,160,143,156,145,151,149,148,145,145,143,140,141,134,140,126,137,121,138,115,140,111,139,107,134,103,128,102,123,103,120,107,115,107,109,108" >
			<area shape="poly"  onmouseover="highlight('badulla')" onmouseout="nohighlight('badulla')" onclick="show('badulla',3)" coords="146,238,146,254,150,274,151,279,146,281,145,284,144,298,142,303,139,305,138,309,137,312,136,315,135,316,134,317,132,321,133,323,135,325,134,329,133,332,133,336,137,336,139,335,142,334,144,334,147,338,149,341,151,348,153,349,153,344,157,344,158,342,156,339,156,334,160,331,156,329,156,324,161,319,165,314,170,308,171,307,172,307,174,299,173,294,172,293,169,292,167,293,162,285,162,283,164,281,166,283,167,283,170,279,171,277,172,274,175,274,176,273,177,271,176,269,175,266,172,267,171,266,168,255,171,248,170,244,170,242,167,243,166,243,165,245,163,247,161,248,159,248,154,248,152,247,151,244,151,240,149,239" >
			<area shape="poly"  onmouseover="highlight('batticaloa')" onmouseout="nohighlight('batticaloa')" onclick="show('batticaloa',4)" coords="191,172,181,172,180,197,185,202,182,205,176,204,172,210,172,220,173,223,180,224,184,230,194,233,195,236,194,239,194,245,202,246,209,248,214,245,215,249,217,255,218,258,223,256,225,254,226,252,228,251,231,256,233,256,232,249,230,243,228,236,223,228,217,221,213,218,209,214,207,210,209,206,206,205,205,199,205,196,202,197,199,196,197,189,195,184,193,178,192,172" >
			<area shape="poly"  onmouseover="highlight('colombo')" onmouseout="nohighlight('colombo')" onclick="show('colombo',5)" coords="38,329,44,327,51,327,54,323,55,321,61,322,64,321,69,321,67,307,66,304,64,304,59,308,58,312,53,312,50,309,45,308,40,307,35,306,35,304,32,307,32,314,33,320,34,326,36,329" >
			<area shape="poly"  onmouseover="highlight('gampaha')" onmouseout="nohighlight('gampaha')" onclick="show('gampaha',6)" coords="67,304,66,296,68,289,64,287,65,280,68,275,63,271,62,268,56,270,54,273,49,273,48,271,43,274,39,275,37,275,31,275,30,276,31,283,30,286,29,287,30,291,33,294,36,302,38,304,37,305,41,306,46,308,49,308,54,312,58,312,58,308,60,306,63,304" >
			<area shape="poly"  onmouseover="highlight('galle')" onmouseout="nohighlight('galle')" onclick="show('galle',7)" coords="48,362,60,366,66,370,72,366,79,371,80,365,86,360,97,366,96,368,98,373,97,374,92,371,89,371,88,372,94,377,92,382,89,384,87,388,89,391,92,395,90,398,90,401,87,406,87,410,83,411,80,408,74,407,69,405,64,404,57,395,53,383,51,377" >
			<area shape="poly"  onmouseover="highlight('hambantota')" onmouseout="nohighlight('hambantota')" onclick="show('hambantota',8)" coords="121,408,118,402,117,398,120,393,115,389,115,391,114,385,110,385,112,379,116,376,118,374,119,372,127,377,134,378,139,380,142,379,142,376,144,374,148,372,151,366,156,362,160,361,164,361,172,368,176,369,184,366,191,363,197,361,199,362,199,355,207,348,212,345,217,347,223,353,223,356,208,368,203,371,196,376,189,382,184,387,170,391" >
			<area shape="poly"  onmouseover="highlight('jaffna')" onmouseout="nohighlight('jaffna')" onclick="show('jaffna',9)" coords="75,31,79,26,93,35,95,38,94,40,96,41,101,44,104,47,108,48,110,47,108,44,104,40,99,36,94,33,88,29,86,25,78,16,74,10,70,6,62,8,58,9,54,10,42,10,37,17,33,16,32,23,32,27,36,32,40,32,41,31,45,34,49,34,49,31,50,30,54,30,56,30,58,33,61,34,60,31,62,31,66,33,69,35,68,30,68,29" >
			<area shape="poly"  onmouseover="highlight('kandy')" onmouseout="nohighlight('kandy')" onclick="show('kandy',10)" coords="144,282,140,281,136,281,135,283,132,288,129,292,132,296,132,299,128,301,121,294,119,291,115,290,111,292,105,293,104,296,106,301,107,303,107,305,102,304,96,300,94,294,96,290,103,286,101,280,95,273,93,269,93,267,96,261,96,259,101,262,105,257,109,258,117,264,121,260,120,254,122,253,126,254,126,258,130,257,132,254,136,253,138,253,143,254,146,252,146,251,147,260,148,264,149,271,150,276,151,277,151,279" >
			<area shape="poly"  onmouseover="highlight('kalutara')" onmouseout="nohighlight('kalutara')" onclick="show('kalutara',11)" coords="37,329,48,327,54,324,61,321,68,321,71,335,76,340,79,345,80,352,86,358,86,361,86,363,81,364,80,364,79,365,79,371,74,368,72,367,68,369,62,368,60,367,54,363,49,361,47,360,47,361" >
			<area shape="poly"  onmouseover="highlight('kegalle')" onmouseout="nohighlight('kegalle')" onclick="show('kegalle',12)" coords="69,308,76,316,81,322,88,317,93,318,99,320,101,317,97,314,93,310,94,304,97,298,95,291,103,284,97,275,92,266,86,261,84,261,84,269,79,270,71,272,67,277,65,285,64,286,68,289,66,295,66,302" >
			<area shape="poly"  onmouseover="highlight('kilinochchi')" onmouseout="nohighlight('kilinochchi')" onclick="show('kilinochchi',13)" coords="75,31,79,26,94,38,91,43,97,42,99,44,102,48,108,48,111,48,108,54,105,58,101,54,99,59,93,60,89,60,88,64,70,63,68,69,62,72,60,69,59,64,57,62,55,61,54,56,58,52,64,51,66,47,66,43,63,41,58,37,56,36,57,35,69,38,73,41,75,45,75,47,78,48,84,46,87,44,89,44,89,40,87,41" >
			<area shape="poly"  onmouseover="highlight('kurunegala')" onmouseout="nohighlight('kurunegala')" onclick="show('kurunegala',14)" coords="59,179,61,188,64,193,64,201,63,203,46,220,47,227,43,231,41,235,39,240,38,251,41,260,42,266,42,272,42,273,44,274,47,271,52,273,57,271,60,270,62,269,68,275,73,272,79,270,84,266,84,259,89,263,92,268,95,265,98,261,100,261,103,259,107,254,106,248,106,237,104,230,103,224,99,218,97,212,97,205,93,202,91,197,91,193,88,193,87,191" >
			<area shape="poly"  onmouseover="highlight('mannar')" onmouseout="nohighlight('mannar')" onclick="show('mannar',15)" coords="50,145,39,140,44,129,43,122,40,113,40,103,38,99,32,95,24,90,18,89,17,84,27,84,39,90,41,98,42,100,44,101,49,96,56,90,57,83,60,73,63,72,66,73,68,79,70,87,68,90,68,95,70,99,76,99,84,99,86,103,88,109,86,111,83,110,74,112,71,110,70,116,67,118,70,123,73,127,70,128,63,130,61,130,57,130,53,129,53,128" >
			<area shape="poly"  onmouseover="highlight('matara')" onmouseout="nohighlight('matara')" onclick="show('matara',16)" coords="86,413,93,411,94,415,104,414,109,417,112,413,122,410,122,406,119,403,117,400,117,396,119,392,114,391,115,388,114,386,109,384,113,379,116,376,117,373,116,367,112,368,110,366,109,364,106,363,102,364,100,365,97,366,96,366,96,368,99,372,98,374,94,373,90,370,88,371,88,373,90,375,92,377,93,378,91,382,89,383,88,388,90,392,91,395,88,398,90,402,87,405,87,410" >
			<area shape="poly"  onmouseover="highlight('matale')" onmouseout="nohighlight('matale')" onclick="show('matale',17)" coords="146,250,145,240,146,236,146,228,143,228,140,228,137,230,133,229,127,231,125,225,123,219,127,218,129,218,129,212,131,204,133,200,130,200,128,201,126,198,125,197,122,198,117,203,110,212,108,213,106,213,101,217,98,217,102,224,103,229,106,233,105,247,107,252,105,258,109,258,114,262,118,263,120,256,121,252,125,256,128,257,131,257,134,254,139,254,142,254,146,251,146,250" >
			<area shape="poly"  onmouseover="highlight('moneragala')" onmouseout="nohighlight('moneragala')" onclick="show('moneragala',18)" coords="141,333,145,336,150,342,152,348,154,348,154,345,158,344,156,337,158,333,158,331,156,328,156,323,169,307,173,305,171,292,168,292,165,293,163,287,163,282,167,283,169,280,172,272,174,271,179,276,181,273,181,268,184,267,187,263,189,257,192,254,197,252,199,260,199,265,202,272,204,276,205,279,202,281,202,285,202,290,206,292,210,293,212,296,214,301,215,312,215,323,212,344,211,346,208,350,199,353,200,358,199,364,196,362,191,362,184,366,173,369,165,365,161,362,154,362,153,365,150,367,151,372,143,373,141,374,137,370,135,367,131,360,131,356,132,353,137,342,136,343" >
			<area shape="poly"  onmouseover="highlight('mullativu')" onmouseout="nohighlight('mullativu')" onclick="show('mullativu',19)" coords="110,48,126,59,131,65,133,72,137,79,141,87,146,97,147,100,144,95,141,91,138,89,141,95,141,98,139,100,134,99,126,101,128,93,122,92,118,92,117,86,115,85,112,84,108,85,103,85,96,84,89,83,91,88,92,91,89,95,86,98,85,99,78,100,70,100,68,95,69,90,69,88,70,82,67,76,67,74,67,71,69,69,71,65,71,63,72,63,76,63,86,63,89,62,89,59,94,60,99,60,99,57,101,55,104,55,107,56" >
			<area shape="poly"  onmouseover="highlight('nuwaraeliya')" onmouseout="nohighlight('nuwaraeliya')" onclick="show('nuwaraeliya',20)" coords="98,320,100,326,107,325,111,328,116,327,120,326,125,326,131,324,134,324,133,320,133,315,137,315,137,310,140,304,144,300,146,289,145,283,142,280,138,282,134,286,130,293,133,297,130,300,124,299,124,294,120,292,115,291,110,291,106,295,108,299,108,302,107,303,104,305,99,301,97,299,95,299,93,305,94,309,96,312,101,316,99,319" >
			<area shape="poly"  onmouseover="highlight('polonnaruwa')" onmouseout="nohighlight('polonnaruwa')" onclick="show('polonnaruwa',21)" coords="142,163,150,169,152,170,163,169,168,174,171,180,171,184,172,178,177,174,180,172,182,174,182,198,185,203,180,205,175,205,173,209,174,215,172,218,172,224,172,230,167,233,162,232,159,227,149,226,140,230,130,230,124,232,123,224,124,220,130,220,129,212,133,202,130,201,126,201,124,195,124,184,123,181,128,177,128,170,131,169,142,167,142,163" >
			<area shape="poly"  onmouseover="highlight('puttalam')" onmouseout="nohighlight('puttalam')" onclick="show('puttalam',22)" coords="40,141,46,142,52,146,51,151,44,158,44,163,46,171,49,175,57,176,61,181,61,186,63,191,64,194,64,201,59,206,49,218,48,221,48,225,45,228,43,232,41,236,38,243,38,253,41,262,41,269,42,274,32,275,30,265,28,255,27,248,26,242,27,235,27,227,25,217,24,208,20,202,19,194,19,185,20,173,22,171,25,164,25,163,26,158,27,154,25,148,26,146,27,154,27,159,26,164,24,166,24,170,25,173,24,177,23,180,21,185,21,189,21,191,21,196,23,199,27,201,30,203,32,199,31,196,28,192,31,188,30,182,29,178,28,174,31,170,31,164,32,159,33,155,34,152,35,148,35,143" >
			<area shape="poly"  onmouseover="highlight('ratnapura')" onmouseout="nohighlight('ratnapura')" onclick="show('ratnapura',23)" coords="142,378,141,373,136,366,132,365,133,357,135,349,139,336,142,333,136,336,133,336,132,332,134,326,133,323,130,324,116,324,111,326,105,325,100,323,98,320,90,317,86,317,78,320,76,314,70,307,68,307,67,311,69,316,69,317,68,322,68,327,70,335,74,339,78,344,80,351,82,354,88,360,93,364,99,366,108,364,110,364,111,367,111,369,115,369,116,367,117,369,118,373,119,374,122,376,130,377" >
			<area shape="poly"  onmouseover="highlight('trincomalee')" onmouseout="nohighlight('trincomalee')" onclick="show('trincomalee',24)" coords="147,98,143,101,139,102,138,99,137,99,131,100,128,100,134,103,138,105,141,113,138,122,141,128,143,136,145,143,150,148,146,152,143,157,143,162,149,169,153,169,162,170,169,174,170,180,172,184,177,176,178,174,183,173,186,172,192,172,190,166,187,158,187,152,185,147,182,143,180,146,178,150,175,149,171,148,166,145,170,145,169,140,174,140,174,141,174,135,170,129,170,124,169,124" >
			<area shape="poly"  onmouseover="highlight('vavuniya')" onmouseout="nohighlight('vavuniya')" onclick="show('vavuniya',25)" coords="108,108,118,107,123,106,127,102,128,97,125,93,122,92,118,92,116,87,109,84,104,84,95,84,89,83,91,89,90,93,87,98,85,100,90,107,86,111,82,111,76,112,70,110,67,118,69,123,69,124,71,128,74,134,77,137,78,140,83,141,87,135,93,127,98,129,103,128,109,123,114,119,114,114" >
		</map>
		<p id="ampara" class="zmaps" onclick="show(this.id,1)">Ampara</p>
  		<p id="anuradhapura" class="zmaps" onclick="show(this.id,2)">Anuradhapura</p>
  		<p id="badulla" class="zmaps" onclick="show(this.id,3)">Badulla</p>
  		<p id="batticaloa" class="zmaps" onclick="show(this.id,4)">Batticaloa</p>
  		<p id="colombo" class="zmaps" onclick="show(this.id,5)">Colombo</p>
  		<p id="gampaha" class="zmaps" onclick="show(this.id,6)">Gampaha</p>
  		<p id="galle" class="zmaps" onclick="show(this.id,7)">Galle</p>
  		<p id="hambantota" class="zmaps" onclick="show(this.id,8)">Hambantota</p>
  		<p id="jaffna" class="zmaps" onclick="show(this.id,9)">Jaffna</p>
  		<p id="kandy" class="zmaps" onclick="show(this.id,10)">Kandy</p>
  		<p id="kalutara" class="zmaps" onclick="show(this.id,11)">Kalutara</p>
  		<p id="kegalle" class="zmaps" onclick="show(this.id,12)">Kegalle</p>
  		<p id="kilinochchi" class="zmaps" onclick="show(this.id,13)">Kilinochchi</p>
  		<p id="kurunegala" class="zmaps" onclick="show(this.id,14)">Kurunegala</p>
  		<p id="mannar" class="zmaps" onclick="show(this.id,15)">Mannar</p>
  		<p id="matara" class="zmaps" onclick="show(this.id,16)">Matara</p>
  		<p id="matale" class="zmaps" onclick="show(this.id,17)">Matale</p>
  		<p id="moneragala" class="zmaps" onclick="show(this.id,18)">Moneragala</p>
  		<p id="mullativu" class="zmaps" onclick="show(this.id,19)">Mullativu</p>
  		<p id="nuwaraeliya" class="zmaps" onclick="show(this.id,20)">Nuwara Eliya</p>
  		<p id="polonnaruwa" class="zmaps" onclick="show(this.id,21)">Polonnaruwa</p>
  		<p id="puttalam" class="zmaps" onclick="show(this.id,22)">Puttalam</p>
  		<p id="ratnapura" class="zmaps" onclick="show(this.id,23)">Ratnapura</p>
  		<p id="trincomalee" class="zmaps" onclick="show(this.id,24)">Trincomalee</p>
  		<p id="vavuniya" class="zmaps" onclick="show(this.id,25)">Vavuniya</p>
	</div>
				
	
<?php  include "INC_FOOT.php"; ?>	
	