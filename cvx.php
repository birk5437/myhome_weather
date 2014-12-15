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
<script>
  //document.getElementById('googleForm:googleText').focus();
</script>	

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="styles.css" />
	<script type="text/javascript" src="jquery.js"></script>
	<title>Charlevoix Weather</title>
     <script>
     	$(document).ready(function(){
			$.ajax({
				type: "GET",
				url: "metar_kcvx.xml",
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

function setWaveSpan(image_number){
  document.getElementById("waves").innerHTML="<img src='http://graphical.weather.gov/images/apx/WaveHeight" + image_number + "_apx.png' class='weather_map' />";
}

function showWaves(){
  var hour = serverdate.getHours();
  if (hour >= 20){ setWaveSpan("4"); }
  else if (hour >= 17){ setWaveSpan("3"); }
  else if (hour >= 14){ setWaveSpan("2"); }
  else { setWaveSpan("1"); }
}

window.onload=function(){
setInterval("displaytime()", 1000);
showWaves();
}

</script>
</head>
<body bgcolor="#2A211C">

<!-- <img class="weather_map" src="images/dad_and_burke_hawaii.JPG" />
<marquee style="font-size:3em; color: #FF3399; font-family: sans-serif;" scrollamount="3" behavior="alternate" class="birthday-marquee">HAPPY BIRTHDAY I LOVE YOU DAD!!!!!</marquee> -->


<div class="textLabel"><span id="servertime"></span> UTC</div>
<div id="page-wrap" name="page-wrap">
</div>
<center><a href="http://graphical.weather.gov/sectors/apxMarineDay.php#tabs">Wave Height Maps</a></center>
<br />
<center><a href="http://www.crh.noaa.gov/apx/">Marine Weather</a></center>
<br />
<center><a href="http://www.intellicast.com/Local/Weather.aspx?location=USMI0160">Intellicast Link</a></center>
<br />
<img id="radar" src="http://images.intellicast.com/WxImages/Radar/cad.gif" class="weather_map" />
<br />
<img id="map" src="http://images.intellicast.com/WxImages/SurfaceAnalysis/r03_ICast.gif" class="weather_map"/>
<br />
<img id="uswinds" src="http://images.intellicast.com/WxImages/CurrentWinds/mnm.jpg" class="weather_map" />
<br />
<span id="waves"></span>
<br />
<img class="weather_map" src="http://97.83.105.61:1099/live" />
<center><a href="http://97.83.105.61:1099/">Camera Settings</a></center>
<br />
<img class="weather_map" src="http://www.lakecharlevoix.org/webcam/depobeachmin00001.jpg" />
<br />
<img class="weather_map" src="http://71.13.76.26/nph-jpeg.cgi?0&13751025517681" />
<br />
<img class="weather_map" src="http://kimballdental.net/images/beach-660x495.jpg" />
<br />
<img id="overview" src="http://images.intellicast.com/WxImages/CustomGraphic/sfcmap.gif" class="weather_map" />
<br />
<!--<a href="http://images.intellicast.com/WxImages/CurrentWinds/mnm.jpg"><img id="winds" src="http://images.intellicast.com/WxImages/CurrentWinds/mnm.jpg" class="weather_map" /></a>-->
<center><a href="http://www.intellicast.com/Local/Weather.aspx?location=USMI0160">Intellicast Link</a></center>
<br />
<center><a href="http://hint.fm/wind/">Wnd Map</a></center>
<!--<div class="textLabel"><span id="servertime"></span> UTC</div>-->
<div id="page-wrap" name="page-wrap">
</div>
<form method="get" id="googleForm" action="http://www.google.com/search" class="centertwo">

<input type="text" id="googleText"  name="q" size="31" maxlength="355" value="" class="googleText" />
<br />
<input type="submit" class="googleButton" />

</form>
</body>
</html>
