<?php include_once("header.php");?>
<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

<section>
	<div id="call-to-action">

		<div class="container">

			<div class="row text-center">
				<h2>Videos</h2>
				<hr>
			</div>
			<div class="row text-center">
				<div class="video player">
					<video id="player" poster="img/highlights.jpg" controls>
						<source src="mp4/highlights.mp4" type="video/mp4">
						<track kind="captions" label="Português" src="vtt/legendas.vtt" srclang="en" default>
					</video>

					<input type="range" id="volume" min="0" max="1" step="0.01" value="1">
					<button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>
					<!--<audio src="mp3/audio.mp3" controls></audio> -->

				</div>
				
			</div>


		</div>	
			
	</div>


	<div id="news" class="container" style="top: 0">

		<div class="row text-center">
			<h2>Latest News</h2>
			<hr>
		</div>

		<div class="row thumbnails owl-carousel owl-theme">
			<div class="item" data-video="highlights">
				<div class="item-inner">
					<img src="img/highlights.jpg" alt="Noticia">
					<h3>Highlights</h3>
				</div>
			</div>
			<div class="item" data-video="Orlando_City_Foundation_2015">
				<div class="item-inner">
					<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
					<h3>Orlando city Foundation 2015</h3>
				</div>		
			</div>
			<div class="item" data-video="highlights">
				<div class="item-inner">
					<img src="img/highlights.jpg" alt="Noticia">
					<h3>Highlights</h3>
				</div>
			</div>
			<div class="item" data-video="Orlando_City_Foundation_2015">
				<div class="item-inner">
					<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
					<h3>Orlando city Foundation 2015</h3>
				</div>		
			</div>
		</div>
	</div>

</section>

	
<?php include_once("footer.php");?>

<script src="lib/plyr/dist/plyr.js"></script>
<script>
      		const player = new Plyr('#player', {

       		controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'settings', 'fullscreen'],
      		});

</script>
