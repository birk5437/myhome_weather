<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25935389-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="styles.css" />
	<script type="text/javascript" src="jquery.js"></script>
	<title>Zionsville Weather</title>
     <script>
     	$(document).ready(function(){
			$.ajax({
				type: "GET",
				url: "metar_ktyq.xml",
				dataType: "xml",
				success: function(xml) {
					$(xml).find('current_observation').each(function(){
						var metar = $(this).find('metar').text();
						var station_id = $(this).find('station_id').text();
						var temp_f = $(this).find('temp_f').text();
						var observation_time_rfc822 = $(this).find('observation_time_rfc822').text();
						var wind_degrees = $(this).find('wind_degrees').text();
						var wind_kt = $(this).find('wind_kt').text();
						var pressure_in = $(this).find('pressure_in').text();
						$('<div class="items" id="link_metar"></div>').html('<div class="textLabel"'+'">'+metar+'</div>').appendTo('#page-wrap');
						$(this).find('desc').each(function(){
							var brief = $(this).find('brief').text();
							var long = $(this).find('long').text();
							$('<div class="brief"></div>').html(brief).appendTo('#link_'+id);
							$('<div class="long"></div>').html(long).appendTo('#link_'+id);
						});
					});
				}
			});
		});
     </script>
<script type="text/javascript">

// Current Server Time script (SSI or PHP)- By JavaScriptKit.com (http://www.javascriptkit.com)
// For this and over 400+ free scripts, visit JavaScript Kit- http://www.javascriptkit.com/
// This notice must stay intact for use.

//Depending on whether your page supports SSI (.shtml) or PHP (.php), UNCOMMENT the line below your page supports and COMMENT the one it does not:
//Default is that SSI method is uncommented, and PHP is commented:

//var currenttime = '<!--#config timefmt="%B %d, %Y %H:%M:%S"--><!--#echo var="DATE_LOCAL" -->' //SSI method of getting server date
var currenttime = '<? print date("F d, Y H:i:s", time())?>' //PHP method of getting server date

///////////Stop editting here/////////////////////////////////

var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
var serverdate=new Date(currenttime)

function padlength(what){
var output=(what.toString().length==1)? "0"+what : what
return output
}

function displaytime(){
serverdate.setSeconds(serverdate.getSeconds()+1)
var datestring=montharray[serverdate.getMonth()]+" "+padlength(serverdate.getDate())+", "+serverdate.getFullYear()
var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds())
document.getElementById("servertime").innerHTML=datestring+" "+timestring
}

window.onload=function(){
setInterval("displaytime()", 1000);
}

</script>
</head>
<body bgcolor="#2A211C">

<center><a href="http://www.intellicast.com/Local/Weather.aspx?location=USIN0744">Intellicast Link</a></center>
<br />
<center><a href="http://hint.fm/wind/">Wind Map</a></center>
<div class="textLabel"><span id="servertime"></span> UTC</div>
<div id="page-wrap" name="page-wrap">
</div>
<form method="get" id="googleForm" action="http://www.google.com/search" class="centertwo">

<input type="text" id="googleText"  name="q" size="31" maxlength="355" value="" class="googleText" />
<br />
<input type="submit" class="googleButton" />

</form>

<a href="http://images.intellicast.com/WxImages/RadarLoop/day_None_anim.gif"><img id="map" src="http://images.intellicast.com/WxImages/RadarLoop/day_None_anim.gif" class="weather_map"/></a>

<a href="http://www.wunderground.com/radar/radblast.asp?ID=IND"><img id="map" src="http://radblast.wunderground.com/cgi-bin/radar/WUNIDS_map?station=IND&brand=wui&num=1&delay=15&type=N0R&frame=0&scale=0.25&noclutter=0&showstorms=99&mapx=400&mapy=240&centerx=379.5&centery=303.5&transx=-20.5&transy=63.5&showlabels=1&severe=0&rainsnow=0&lightning=0&smooth=0&rand=23393941&lat=0&lon=0&label=you" class="weather_map"/></a>

<a href="http://images.intellicast.com/WxImages/SurfaceAnalysis/r07_ICast.gif"><img id="map" src="http://images.intellicast.com/WxImages/SurfaceAnalysis/r07_ICast.gif" class="weather_map"/></a>
<a href="http://images.intellicast.com/WxImages/Radar/day.gif"><img id="radar" src="http://images.intellicast.com/WxImages/Radar/day.gif" class="weather_map" /></a>
<!--<a href="http://images.intellicast.com/WxImages/RadarSummary/csg.gif"><img id="map" src="http://images.intellicast.com/WxImages/RadarSummary/csg.gif" class="weather_map"/></a>-->
<!--<img id="mixed_surface" src="http://images.intellicast.com/WxImages/CustomGraphic/sfcmap.gif" class="weather_mixed_surface" />-->
<!--<a href="http://radblast-sf.wunderground.com/cgi-bin/radar/WUNIDS_map?station=FFC&brand=wui&num=1&delay=15&type=N0R&frame=0&scale=0.500&noclutter=0&t=1303959791&lat=33.84818649&lon=-84.35977173&label=Atlanta%2C+GA&showstorms=10&map.x=400&map.y=240&centerx=365&centery=326&transx=-35&transy=86&showlabels=1&severe=0&rainsnow=1&lightning=0&smooth=0"><img id="mixed_surface" src="http://radblast-sf.wunderground.com/cgi-bin/radar/WUNIDS_map?station=FFC&brand=wui&num=1&delay=15&type=N0R&frame=0&scale=0.500&noclutter=0&t=1303959791&lat=33.84818649&lon=-84.35977173&label=Atlanta%2C+GA&showstorms=10&map.x=400&map.y=240&centerx=365&centery=326&transx=-35&transy=86&showlabels=1&severe=0&rainsnow=1&lightning=0&smooth=0" class="weather_mixed_surface" /></a>-->
<br />
<!--<a href="http://images.intellicast.com/WxImages/SurfaceAnalysisLoop/r07_None_anim.gif"><img src="http://images.intellicast.com/WxImages/SurfaceAnalysisLoop/r07_None_anim.gif" class="weather_map" /></a>-->

<br />
<a href="http://images.intellicast.com/WxImages/CustomGraphic/sfcmap.gif"><img id="overview" src="http://images.intellicast.com/WxImages/CustomGraphic/sfcmap.gif" class="weather_map" /></a>
<a href="http://images.intellicast.com/WxImages/CurrentWinds/usa.jpg"><img id="uswinds" src="http://images.intellicast.com/WxImages/CurrentWinds/usa.jpg" class="weather_map" /></a>
<br />
<!--<a href="http://images.intellicast.com/WxImages/CurrentWinds/mnm.jpg"><img id="winds" src="http://images.intellicast.com/WxImages/CurrentWinds/mnm.jpg" class="weather_map" /></a>-->
</body>
</html>
