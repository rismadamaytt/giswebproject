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
            <div class="row first-from">
                <div class="form-img col-md-6 text-end">
                    <img src="surveys_page/img/surveys.png" style="height: 300px">
                </div>
                <div class="form-header col-md-6">
                    <h2 class="form-h2">ISI KUESIONER</h2>
                    <p>Penilaian yang kamu berikan akan sangat membantu penelitian Tugas Akhir kami, Isi dengan apa adanya yang kamu ketahui ya!</p>
                    <p>Terima Kasih!</p>
					<a href="{{url('surveys')}}" class="btn btn-warning">Back to Result</a>
                </div>
            </div>

			<div class="form-main">
				<div class="container main-cont ">
					<form action="{{route('surveylist.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
							<div class="mb-4 mt-4">
								<label class="form-label">Nama</label>
								<input type="text" class="form-control" name="name">
							</div>
							<hr />
							<div class="mb-4 mt-4">
								<label class="form-label">Alamat Lengkap</label>
								<input type="text" class="form-control" name="address">
                                <div class="form-text"> Mohon isi alamat dengan lengkap </div>
							</div>
							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Apakah Anda sudah mengetahui adanya Masa Analog Switch Off (ASO)?</label>
								@php
                                    $i=2;
                                @endphp
                                @foreach ($survey1 as $item)
                                    <div class="mt-3">
                                        <label class="form-check-label mt-1">
                                            <input class="form-check-input" type="radio" name="question_1" value="{{$i}}">{{$item}}
                                        </label>
                                    </div>
                                @php
                                    $i--;
                                @endphp
                                @endforeach
							</div>
                            @error('question_1')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Apakah Anda sudah mengetahui adanya penerapan televisi digital terrestrial (DVB-T2) saat ini?</label>
								@php
                                    $i=2;
                                @endphp
								@foreach ($survey1 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_2" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
                                @endforeach
							</div>
							@error('question_2')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Apakah Anda sudah menggunakan layanan televisi digital terrestrial (DVB-T2)?</label>
								@php
                                    $i=2;
                                @endphp
								@foreach ($survey1 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_3" value="{{$i}}">{{$item}}
										</label>
									</div>
								@endforeach
							</div>
							@error('question_3')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Berapa lama Anda sudah menggunakan Televisi Digital Terrestrial (DVB-T2)?</label>
								@php
                                    $i=4;
                                @endphp
								@foreach ($survey2 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_4" value="{{$i}}">{{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_4')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Berikan penilaian Anda terhadap proses instalasi atau pemasangan televisi digital terrestrial (DVB-T2)  (termasuk proses penyambungan dan pengaktifan Set-Top Box)</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_5" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_5')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Berikan penilaian Anda terhadap hambatan yang anda alami saat menggunakan televisi digital terrestrial (DVB-T2)</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_6" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_6')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4 mt-4">
								<label class="form-check-label">Berikan penilaian Anda terhadap efisiensi penggunaan televisi digital terrestrial (DVB-T2)</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_7" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_7')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Berikan penilaian Anda terhadap penggunaan sehari-hari televisi digital terrestrial (DVB-T2) (Seperti penggunaan remote, pergantian saluran TV, menu pada pengaturan)</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_8" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_8')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Apakah anda pernah/ sedang menonton siaran televisi pada channel JawaPos TV  dan JTV  ?</label>
								@php
                                    $i=2;
                                @endphp
								@foreach ($survey4 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_9" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_9')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Berikan penilaian Anda terhadap sering terjadinya delay (gambar yang ditampilkan dengan suara yang dihasilkan tidak sinkron) pada channel JawaPos TV  dan JTV </label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_10" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_10')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Berikan penilaian Anda terhadap sering terjadinya drop out (layar hitam karena tidak adanya sinyal/sinyal buruk) pada channel JawaPos TV  dan JTV</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_11" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_11')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Berikan penilaian Anda terhadap kualitas gambar yang ditampilkan pada channel JawaPos TV dan JTV</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_12" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_12')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Berikan penilaian Anda terhadap kualitas audio yang dihasilkan pada channel JawaPos TV dan JTV</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_13" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_13')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Berikan penilaian Anda terhadap keberagaman saluran pada siaran televisi digital terrestrial (DVB-T2)</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_14" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_14')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Apakah anda merasa puas saat menggunakan televisi digital terrestrial (DVB-T2)?</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_15" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_15')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Apakah Anda merasa terhibur saat menggunakan televisi digital terrestrial (DVB-T2)?</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_16" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_16')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Apakah Anda mendapatkan manfaat saat menggunakan televisi digital terrestrial (DVB-T2)?</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_17" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_17')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Apakah dalam penggunaannya, televisi digital terrestrial (DVB-T2), ramah bagi para penggunanya?</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_18" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_18')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-check-label">Apakah dalam penggunaannya, televisi digital terrestrial (DVB-T2), sudah memenuhi ekspektasi Anda?</label>
								@php
                                    $i=5;
                                @endphp
								@foreach ($survey3 as $item)
									<div class="mt-3">
										<label class="form-check-label mt-1">
											<input class="form-check-input" type="radio" name="question_19" value="{{$i}}"> {{$item}}
										</label>
									</div>
								@php
                                    $i--;
                                @endphp
								@endforeach
							</div>
							@error('question_19')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

							<hr />
							<div class="mb-4 mt-4">
								<label class="form-label">Tuliskan harapan anda terhadap kualitas layanan televisi pada channel JawaPos TV dan JTV.</label>
								<div class="mt-3">
									<textarea class="form-control" name="question_20" placeholder="Isi disini" rows="4"></textarea>
								</div>
							</div>
							@error('question_20')
                                <span class="text-danger">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
							
							<hr />

							<div class="row ml-1 mt-4 mb-4">
								<div class="d-grid">
									<button type="submit" class="btn btn-warning">Submit</button>
								</div>
							</div>
					</form>
				</div>
			</div>
        </div>
    </section>
  </body>
</html>