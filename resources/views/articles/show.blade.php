<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('articles_page/css/styles.css') }}">
  </head>

  <body>
    <header class="header">
      <a href="{{url('home')}}" class="logo"><img src="landing_page/assets/img/logowebgis.png"></a>
      <ul class="navlist">
        <li><a href="{{url('home')}}">Home</a></li>
        <li><a href="#">Maps</a></li>
        <li><a href="{{url('surveys')}}">Survey</a></li>
        <li><a href="{{url('articles')}}">Articles</a></li>
      </ul>
      <a href="{{url('login')}}" class="top-btn">Login</a>
    </header>

    <main class="pt-10">
      <div class="container first-cont">
        <div class="article-main">
          <div class="container main-cont">
            @foreach ($articles as $item)
                <div>
                  <p class="form-text">{{$item->created_at}}</p>
                  <h2 class="show-h2"><strong>{{$item->title}}</strong></h2>
                  <img src="{{asset('storage/images/'. $item->image)}}" class="show-img" alt="{{$item->title}}" style="width: 500px; height: auto; align-items:center; justify-content: center; text-align: center;">
                  <p class="show-p">{{$item->content}}</p>
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </main>
  </body>
</html>