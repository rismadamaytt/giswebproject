<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surveys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('surveys_page/css/styles.css') }}">
	<link rel="stylesheet" href="node_modules/mdb-ui-kit/css/mdb.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<style>
		#question_1, #question_2, #question_3, #question_9{
            max-width: 280px;
            max-height: 280px;
            width: 100%;
            height: auto;
			align-items: center;
			justify-content: center;
        }
	</style>
  </head>
  <body>
	<header class="header">
		<a href="{{url('home')}}" class="logo"><img src="landing_page/assets/img/logowebgis.png"></a>
		<ul class="navlist">
			<li><a href="{{url('home')}}">Home</a></li>
			<li><a href="#home">Maps</a></li>
			<li><a href="{{route ('surveys')}}">Survey</a></li>
			<li><a href="{{route ('articles')}}">Articles</a></li>
		</ul>
		<a href="{{url('login')}}" class="top-btn">Login</a>
	</header>
	
	<section class="survey-top">
		<div class="container">
			<div class="main-image text-center pb-5">
				<img src="surveys_page/img/survey.png" style="height: 300px">
			</div>

			<div class="content-survey">
				<h1 class="titles pb-4">SURVEY KUALITAS TAYANGAN TV DIGITAL</h1>
				<p class="content pb-5">Survey ini ditujukan untuk menyaring pendapat masyarakat mengenai kualitas tayangan televisi digital pasca  Analog Switch-off</p>
			</div>
		</div>
	</section>

	<section class="container survey-mid">
		<div class="container pb-3">
			<div class="card justify-content-center">
				<div>
					<div class="card-body">
						<h5 class="card-title">Yuk isi kuesioner mengenai TV digital!</h5>
						<p class="card-text">Jawabanmu akan akan sangat menolong dalam penelitian Tugas Akhir kami</p>
						<a href="{{route('surveys.form')}}" class="btn btn-primary">Isi Kuesionernya</a>
					</div>
				</div>
			</div>
		</div>
        <hr />
        <div class="container pt-3 pb-3">
            <div class=" card justify-content-center">
                <div class="card-body text-center">
                    <h1 class="card-title pt-3">Hasil Survey</h1>
                    <p class="card-text pb-4">Hasil survey ini dapat dipertanggungjawabkan keasliannya</p>
					<div class="row gap-2 pb-2">
						<div class="col gap-1 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Masyarakat mengetahui adanya Masa Analog Switch Off (ASO)  </p>
								<hr />
								<canvas id="question_1"></canvas>
							</div>
						</div>
						<div class="col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Masyarakat mengetahui adanya penerapan televisi digital terrestrial (DVB-T2) saat ini  </p>
								<hr />
								<canvas id="question_2"></canvas>
							</div>
						</div>
					</div>
					<div class="row gap-2 pb-2">
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Masyarakat sudah menggunakan layanan televisi digital terrestrial  </p>
								<hr />
								<canvas id="question_3"></canvas>
							</div>
						</div>
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Lama masyakarat sudah menggunakan Televisi Digital Terrestrial (DVB-T2)  </p>
								<hr />
								<canvas id="question_4"></canvas>
							</div>
						</div>
					</div>
					<div class="row gap-2 pb-2">
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Penilaian masyarakat terhadap proses instalasi atau pemasangan televisi digital terrestrial (DVB-T2)  </p>
								<hr />
								<canvas id="question_5"></canvas>
							</div>
						</div>
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Penilaian masyakarat terhadap hambatan yang dialami saat menggunakan televisi digital terrestrial (DVB-T2)  </p>
								<hr />
								<canvas id="question_6"></canvas>
							</div>
						</div>
					</div>
					<div class="row gap-2 pb-2">
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Penilaian masyakarat terhadap efisiensi penggunaan televisi digital terrestrial (DVB-T2)  </p>
								<hr />
								<canvas id="question_7"></canvas>
							</div>
						</div>
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Penilaian masyakarat terhadap penggunaan sehari-hari televisi digital terrestrial (DVB-T2) (Seperti penggunaan remote, pergantian saluran TV, menu pada pengaturan)  </p>
								<hr />
								<canvas id="question_8"></canvas>
							</div>
						</div>
					</div>
					<div class="row gap-2 pb-2">
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Masyarakat yang pernah/sedang menonton siaran televisi pada channel JawaPos TV  dan JTV  </p>
								<hr />
								<canvas id="question_9"></canvas>
							</div>
						</div>
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Penilaian masyakarat terhadap sering terjadinya delay (gambar yang ditampilkan dengan suara yang dihasilkan tidak sinkron) pada channel JawaPos TV dan JTV   </p>
								<hr />
								<canvas id="question_10"></canvas>
							</div>
						</div>
					</div>
					<div class="row gap-2 pb-2">
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Penilaian masyakarat terhadap sering terjadinya drop out (layar hitam karena tidak adanya sinyal/sinyal buruk) pada channel JawaPos TV  dan JTV  </p>
								<hr />
								<canvas id="question_11"></canvas>
							</div>
						</div>
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Penilaian masyakarat terhadap kualitas gambar yang ditampilkan pada channel JawaPos TV dan JTV  </p>
								<hr />
								<canvas id="question_12"></canvas>
							</div>
						</div>
					</div>
					<div class="row gap-2 pb-2">
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Penilaian masyakarat terhadap kualitas audio yang dihasilkan pada channel JawaPos TV dan JTV  </p>
								<hr />
								<canvas id="question_13"></canvas>
							</div>
						</div>
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Penilaian masyakarat terhadap keberagaman saluran pada siaran televisi digital terrestrial (DVB-T2)  </p>
								<hr />
								<canvas id="question_14"></canvas>
							</div>
						</div>
					</div>
					<div class="row gap-2 pb-2">
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Kepuasan masyakarat saat menggunakan televisi digital terrestrial (DVB-T2)  </p>
								<hr />
								<canvas id="question_15"></canvas>
							</div>
						</div>
						
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Kepuasan masyarakat merasa terhibur saat menggunakan televisi digital terrestrial (DVB-T2)  </p>
								<hr />
								<canvas id="question_16"></canvas>
							</div>
						</div>
					</div>
					<div class="row gap-2 pb-2">
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Kepuasan masyarakat mendapatkan manfaat saat menggunakan televisi digital terrestrial (DVB-T2)  </p>
								<hr />
								<canvas id="question_17"></canvas>
							</div>
						</div>
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Kepuasan masyakarat dalam penggunaan televisi digital terrestrial (DVB-T2)  </p>
								<hr />
								<canvas id="question_18"></canvas>
							</div>
						</div>
					</div>
					<div class="row gap-2 pb-2">
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2">  Kepuasan masyakarat dalam memenuhi ekspektasi mereka mengenai televisi digital terrestrial  </p>
								<hr />
								<canvas id="question_19"></canvas>
							</div>
						</div>
						<div class="  col gap-2 card shadow-2-strong">
							<div class="card-body">
								<p class="  mb-2"></p>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
	</section>

	<script> //question_1
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_1').getContext('2d');
			var question_1 = new Chart(ctx, {
				type: 'pie',
				data: {
					labels: ['Belum', 'Sudah'],
					datasets: [{
						data: @json(array_values($surveyData1)),
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					responsive: true,
					plugins: {
						legend: {
							position: 'top',
						},
						tooltip: {
							enabled: true,
						},
					}
				}
			});
			const question_1 = new Chart(ctx, config);
			console.log("Chart created:", question_1);
		});
	</script>

	<script> //question_2
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_2').getContext('2d');
			var question_2 = new Chart(ctx, {
				type: 'pie',
				data: {
					labels: ['Red', 'Blue', 'Yellow'],
					datasets: [{
						data: [1, 2, 1, 1],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					responsive: true,
					plugins: {
						legend: {
							position: 'top',
						},
						tooltip: {
							enabled: true,
						},
					}
				}
			});
			console.log("Chart created:", question_2);
		});
	</script>

	<script> //question_3
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_3').getContext('2d');
			var question_3 = new Chart(ctx, {
				type: 'pie',
				data: {
					labels: ['Red', 'Blue', 'Yellow'],
					datasets: [{
						data: [300, 50, 100],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					responsive: true,
					plugins: {
						legend: {
							position: 'top',
						},
						tooltip: {
							enabled: true,
						},
					}
				}
			});
			console.log("Chart created:", question_3);
		});
	</script>

	<script> //question_4
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_4').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_4= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['January', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_1);
		});
	</script>

	<script> //question_5
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_5').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_5= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_5);
		});
	</script>

	<script> //question_6
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_6').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_6= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_6);
		});
	</script>

	<script> //question_7
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_7').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_7= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_7);
		});
	</script>

	<script> //question_8
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_8').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_8= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['January', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_8);
		});
	</script>

	<script> //question_9
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_9').getContext('2d');
			var question_9 = new Chart(ctx, {
				type: 'pie',
				data: {
					labels: ['Red', 'Blue', 'Yellow'],
					datasets: [{
						data: [300, 50, 100],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					responsive: true,
					plugins: {
						legend: {
							position: 'top',
						},
						tooltip: {
							enabled: true,
						},
					}
				}
			});
			console.log("Chart created:", question_9);
		});
	</script>

	<script> //question_10
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_10').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_10= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_10);
		});
	</script>

	<script> //question_11
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_11').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_11= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_11);
		});
	</script>

	<script> //question_12
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_12').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_12= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_12);
		});
	</script>

	<script> //question_13
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_13').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_13= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['January', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_13);
		});
	</script>

	<script> //question_14
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_14').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_14= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_14);
		});
	</script>

	<script> //question_15
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_15').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_15= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_15);
		});
	</script>

	<script> //question_16
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_16').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_16= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_16);
		});
	</script>

	<script> //question_17
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_17').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_17= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['January', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_17);
		});
	</script>

	<script> //question_18
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_18').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_18= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_18);
		});
	</script>

	<script> //question_19
		document.addEventListener('DOMContentLoaded', function () {
			console.log("DOM fully loaded and parsed");
			var ctx = document.getElementById('question_19').getContext('2d');
			console.log("Canvas context:", ctx);
			var question_19= new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Januariiii', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Sales',
						data: [12, 19, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			console.log("Chart created:", question_19);
		});
	</script>

	<footer class="ends">
		<p>Copyright Information ©2024</p>
	</footer>
	<script type="text/javascript" src="node_modules/mdb-ui-kit/js/mdb.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>