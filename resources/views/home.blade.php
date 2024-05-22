<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WebGIS</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/styles.css') }}">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  	<link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<!--------header---->
	<header class="header">
		<a href="{{url('home')}}" class="logo"><img src="landing_page/assets/img/logowebgis.png"></a>

		<ul class="navlist">
			<li><a href="{{url('home')}}">Home</a></li>
			<li><a href="{{url('map')}}">Maps</a></li>
			<li><a href="{{url('surveys')}}">Survey</a></li>
			<li><a href="{{url('articles')}}">Articles</a></li>
		</ul>
		<a href="{{url('login')}}" class="top-btn">Login</a>
	</header>

	<!--------maps---->
	<section class="home" id="home">
		<div class="home-text">
			<h1>KUALITAS JARINGAN TELEVISI DIGITAL BERDASARKAN LOKASI</h1>
			<p>Ayo ketahui kualitas jaringan TV digital di wilayahmu dengan mencari titik lokasi pengukuran di dekat rumahmu berada!</p>
			<a href="{{url('map')}}" class="home-btn">Go To Maps</a>
		</div>

		<div class="home-img">
			<img src="landing_page/assets/img/pemancar.png">
		</div>
	</section>


	<!--------intro tv---->
	<section class="intro-tv" id="intro-tv">
		<div class="heading">
			<h2>Terrestrial Digital Television</h2>
			<p>Pada November 2022 lalu, Indonesia telah menuntaskkan program peralihan dari siaran TV analog (DVB-T) menjadi siaran TV digital (DVB-T2) atau yang biasa disebut Analog Switch-Off. Pemerintah menonaktifkan siaran TV analog dan mewajibkan penggunaan siaran TV digital (DVB-T2) . Program tersebut bertujuan meningkatkan kualitas penyiaran dan memberi akses yang luas kepada masyarakat.</p>
		</div>
	</section>

	<!--------survey---->
	<section class="survey" id="survey">
		<div class="survey-img">
			<img src="landing_page/assets/img/survey.png">
		</div>

		<div class="survey-text">
			<h2>SURVEY KUALITAS TAYANGAN TV DIGITAL</h2>
			<p>Ayo isi survey ini untuk mengetahui kualitas pengalaman pengguna TV Digital Terrestrial pasca ASO!</p>
			<a href="{{url('surveys')}}" class="survey-btn">Go To Survey</a>
		</div>
	</section>

	<!--------artikel---->
	<section class="articles" id="articles">
		<div class="articles-text">
			<h1>ARTIKEL MENGENAI TELEVISI DIGITAL & ASO</h1>
			<p>Ayo isi baca artikel mengenai serba-serbi televisi digital untuk menambah pengetahuanmu!</p>
			<a href="{{url('articles')}}" class="articles-btn">Go To Articles</a>
		</div>

		<div class="articles-img">
			<img src="landing_page/assets/img/artikel.png">
		</div>
	</section>

	<!--------ends---->
	<div class="ends">
		<p>Copyright Information ©2024</p>
	</div>

	<script src="https://unpkg.com/scrollreveal"></script>

	<!--------Link to js---->
	<script type="text/javascript" src="{{ asset('landing_page/js/script.js') }}"></script>
	
</body>
</html>