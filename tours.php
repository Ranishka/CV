<?php 
$pid=2;
include "INC_HEAD.php";

?>
		
<style>

		
	 h1{
	 	background:linear-gradient(#3184FF,#F7FAFF);
		border-bottom:8px solid #214478;}
	 
	#images{
		width:900px;
		float:left;
		list-style: none;
		padding:0 2%;
		margin:40px 0 0 40px;}
	
	main img{
		width:220px;
		height:200px;
		float: left;
		margin:1px;}
	
	main p{
		float: left;
		margin: 15px 50px 32px;
		font-size:1em;
		text-align: center;
		color:#1A2789;
		word-spacing: 5px;
		font:bold;}
	
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
	padding:5px;
 }
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
include "INC_NAV.php";
?>	
		
<h1>Tours</h1>
		
		<ul id="images">
			<li> 
				<img src="hikkaduwa.jpg" alt="">
			</li>	
			<li> 
				<img src="daladamaaligawa.jpg" alt="">
			</li>		
		   <li> 
				<img src="Anuradhapura1.jpg " alt="">
			</li>		
		   <li> 
				<img src="galle.jpg" alt="">
			</li>		
		   <li> 
				<img src="arugambe.jpg" alt="">
			</li>		
		   <li> 
				<img src="sigiriya-01.jpg" alt="">
			</li>		
		   <li> 
				<img src="polonnaruwa.jpg" alt="">
			</li>		
		   <li> 
				<img src="thrincomalee.jpg" alt="">
			</li>			
		
		
		</ul>
		
		<p>HIKKADUWA, DALADA MALIGAWA, ANURADHAPURA TEMPLE, GALLE FORT, ARUGAMBE BEACH, SIGIRIYA ROCK, POLONNARUWA, THRINCOMALEE.</p>
		
<?php 
include "INC_FOOT.php";
?>