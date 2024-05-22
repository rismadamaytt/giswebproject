<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surveys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
	<link rel="stylesheet" type="text/css" href="{{ asset('surveys_page/css/styles.css') }}">
  </head>
  <body class="form-body">
    <section class="form-top">
        <div class="container first-cont">
          <div class="form-main">
            <div class="container main-cont">
              <img src="landing_page/assets/img/artikel.png" style="height:200px">
              <h2 class="success-h2 text-center mb-3">Terima Kasih sudah mengisi kuesioner</h2>
              <p class="success-p text-center mb-3">Kamu dapat melihat hasil kuesioner sebagai data kualitas tayangan televisi digital pasca Analog Switch Off dimata masyarakat</p>
              <a href="{{route('surveys')}}" class="btn btn-warning d-grid col-2 mx-auto">Lihat hasil</a>
            </div>
			    </div>
        </div>
    </section>
  </body> 
</html>