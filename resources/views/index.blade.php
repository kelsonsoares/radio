<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('css/audioplayer.css') }}" rel="stylesheet">
	<style>
		body { min-height: 200vh;background: linear-gradient(to top right, #060628, #1F245A, #682359); }
		#wrapper { margin: 150px auto; max-width: 400px; }
		h1 { text-align: center; margin-bottom: 50px; color: rgb(236, 120, 120); font-family: 'Open Sans'; }
	</style>
</head>
<body>
		<div>
			<img class="img" src="https://images-na.ssl-images-amazon.com/images/I/71AdokrxALL._SL1216_.jpg">
		</div>	
		<audio preload="auto" controls>
					<source src="https://node-13.zeno.fm/wk7yfawv0heuv?rj-ttl=5&rj-tok=AAABeT8FIJEAc4FCkmNmtmxXYA.mp3">
		</audio>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		
		<script src="{{ URL::asset('js/audioplayer.js') }}"></script>
		<script>
			$(function() {
				$('audio').audioPlayer();
			});
		</script>
</body>
</html>