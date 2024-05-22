<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('articles_page/css/styles.css') }}">
  </head>
  <body>
	<header class="header">
		<a href="{{url('home')}}" class="logo"><img src="landing_page/assets/img/logowebgis.png"></a>
		<ul class="navlist">
			<li><a href="{{url('home')}}">Home</a></li>
			<li><a href="#home">Maps</a></li>
			<li><a href="#survey">Survey</a></li>
			<li><a href="{{url('articles')}}">Articles</a></li>
		</ul>
		<a href="{{url('login')}}" class="top-btn">Login</a>
	</header>
	
	<main class="pt-10">
		<div class="container">

			<h1 class="titles">Latest Article</h1>

			<div class="mb-3 mt-4">
				<div class="d-flex justify-content-center flex-wrap card mb-5" style="height: 250px">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="..." class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<a href="..." class="btn btn-primary">Read Article</a>
						</div>
					</div>
				</div>
			</div>

			<hr />

			<h1 class="titles mt-5">All Articles</h1>

			<div>
				<div class="d-flex justify-content-left flex-wrap gap-3 mt-4 pb-5">
					@if ($articles->count() > 0)
						@foreach ($articles as $rs)
						<div class="card" style="width: 18rem;">
							<img src="{{ asset('storage/images/' . $rs->image) }}" class="card-img-top img-fluid" alt="{{$rs->title}}" style="max-height: 150px">
							<div class="card-body">
								<h5 class="card-title">{{$rs->title}}</h5>
								<p class="card-text">{{$rs->content}}</p>
								<a href="{{route('articles.show', $rs->id)}}" class="btn btn-primary">Read Article</a>
							</div>
						</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</main>
	<footer class="ends">
		<p>Copyright Information ©2024</p>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>