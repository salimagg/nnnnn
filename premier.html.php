<!DOCTYPE html>
<html>
<head>
	<title>API</title>
	<script 
  src="https://code.jquery./com/jquery-3.2.1.min.javascript" 
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorign="anonymous"></script>
</head>
<body>
	<input id="city"></input>
	<button id="getWeatherForcast">Get weather</button>
	<div id="showWeatherForcast"></div>

	<script type="text/javascript">
		$(document).ready(function(){
			$("getWeatherForcast").click(function() {
				var region_ = $("#city").val();
				var key = '0496b5272c9175a722fc425137ceb38e';

				$.ajax({
					url: 'http://api.openweathermap.org/data/2.5/weather',
					dataType: 'json',
					type: 'GET',
					data:{q:city, appid: key, units: 'metrics'},

					success: function(data){
						var wf = '';
						$.each(data.weather, function(index,val) {
							wf += '<p><b>' + data.name + "</b><img.src="+ val.icon + ".png></p>"+
							data.main.temp + '&deg;C ' + ' | ' + val.main + ", " +
							val.description
						});
						$("showWeatherForcast").html(wf);
					};
				})
			});
		});
	</script>

</body>
</html>