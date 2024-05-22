<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <link href="https://cdn.jsdelivr.net/npm/leaflet/dist/leaflet.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('maps_page/css/styles.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.bundle.min.js"></script>

    <style>
        
		#map-container {
			padding-top: 100px;
            position: relative;
            width: 100vw;
            height: 100vh;
        }

        #map {
            width: 100%;
            height: 100%;
        }

        #map-card {
            position: absolute;
            top: 130px;
            left: 30px;
            width: 340px;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
			z-index: 1000;
        }

        #map2-card {
            position: absolute;
            bottom: 30px;
            right: 10px;
            width: 180px;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
			z-index: 1000;
        }

        #popupContainer {
            z-index: 1000;
        }
    </style>
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

    <!-- checkbox -->
	<div id="map-container">
        <div id="map"></div>
        <div id="map-card">
            <form action="" method="GET">
                <div class="card-header">
                    <p class="map-p">filter
                        <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                    </p>
                </div>
                <div class="card-body form-check">
                    <p class="map-p">Pilih Kategori Wilayah</p>
                    <hr>
                    <?php 
                        $con = mysqli_connect("localhost","root","","gisweb");
                        $category_query = "SELECT * FROM a_categories";
                        $category_query_run = mysqli_query($con, $category_query);
    
                        if(mysqli_num_rows($category_query_run) > 0 )
                        {
                            foreach ($category_query_run as $categorylist) 
                            {
                               $checked = [];
                               if(isset($_GET['category']))
                               {
                                    $checked = $_GET['category'];
                               }
                               
                               ?> 
                                    <div>
                                        <input class="form-check-input" type="checkbox" name="category[]" value="<? $categorylist['id']; ?>"
                                            <?php if(in_array($categorylist['id'], $checked)) {echo "checked";} ?>
                                        />
                                        <?= $categorylist['nama']; ?>
                                    </div>
                               <?php
                            }
                        }
                        else 
                        {
                            echo "No result found";
                        }
                    ?>
                </div>  
                <div class="card-body form-check">
                    <p class="map-p">Pilih Wilayah</p>
                    <hr>
                    <?php 
                        $con = mysqli_connect("localhost","root","","gisweb");
                        $wilayah_query = "SELECT * FROM a_wilayahs";
                        $wilayah_query_run = mysqli_query($con, $wilayah_query);
    
                        if(mysqli_num_rows($wilayah_query_run) > 0 )
                        {
                            foreach ($wilayah_query_run as $wilayahlist) 
                            {
                               $checked = [];
                               if(isset($_GET['wilayah']))
                               {
                                    $checked = $_GET['wilayah'];
                               }
                               
                               ?> 
                                    <div>
                                        <input class="form-check-input" type="checkbox" name="wilayah[]" value="<? $wilayahlist['id']; ?>"
                                            <?php if(in_array($wilayahlist['id'], $checked)) {echo "checked";} ?>
                                        />
                                        <?= $wilayahlist['nama']; ?>
                                    </div>
                               <?php
                            }
                        }
                        else 
                        {
                            echo "No result found";
                        }
                    ?>
                </div>  
            </form>
        </div>
        <div id="map2-card">
            <p class="map-p">Keterangan wilayah</p>
			<div>
				<ul class="map-ket mb-1">
                    <li>
                        <img src="maps_page/img/Urban.png" class="mr-3 mb-1" alt="urbanicon" style="width: 20px; height: 20px;">Urban</img>
                    </li>
                    <li>
                        <img src="maps_page/img/Sub-Urban.png" class="mr-3  mb-1" alt="suburbanicon" style="width: 20px; height: 20px;">Sub-Urban</img>
                    </li>
                    <li>
                        <img src="maps_page/img/Dense-Urban.png" class="mr-3  mb-1" alt="denseicon" style="width: 20px; height: 20px;">Dense-Urban</img>
                    </li>
                    <li>
                        <img src="maps_page/img/Rural.png" class="mr-3  mb-1" alt="ruralicon" style="width: 20px; height: 20px;">Rural</img>
                    </li>
                </ul>
			</div>
        </div>
    </div>

    <div id="popupContainer" style="display:none; position: absolute; left: 30px; top: 130px; width: 400px; height:700px; background-color: white; padding: 15px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3); z-index: 1000; border-radius: 10px; ">
        <span onclick="closePopup()" style="cursor: pointer; float: right;">&times;</span>
        <div id="popupContent" style=""></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-7.2575, 112.7521], 12); // Koordinat awal (Surabaya)
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

		var zoomControl = L.control.zoom({ position: 'topright' });
        zoomControl.addTo(map);

        // Ambil data lokasi dari database
        var locations = {!! json_encode($locations) !!}; // Ambil data dari controller
        

        document.addEventListener('DOMContentLoaded', function(){
            @if ($locations->count()>0)
                @forEach($locations as $rs)
                var markerIcon = L.icon({
                    iconUrl: 'maps_page/img/{{$rs->kategori}}.png', // URL gambar ikon
                    iconSize: [30, 30], // Ukuran ikon dalam piksel
                    iconAnchor: [30, 30] // Anchor point untuk ikon di bagian tengah bawah
                });

                var marker = L.marker([{{$rs->latitude}}, {{$rs->longitude}}], {icon: markerIcon}).addTo(map);
                    var popupContent = `
                        <h3 class:"loc-h3">Kualitas Layanan</h3>
                        <p class:"loc-p">Alamat: {{$rs->alamat}}</p>
                        <p class:"loc-p">Latitude: {{$rs->latitude}}</p>
                        <p class:"loc-p">Longitude: {{$rs->longitude}}</p>
                        <p class:"loc-p">Wilayah: {{$rs->wilayah}}</p>
                        <p class:"loc-p">Kategori Wilayah: {{$rs->kategori}}</p>

                        <h3 class:"loc-h3">Hasil {{$rs->metode}}</h3>
                        <h5 class:"loc-h5">Berdasarkan Kualitas Pengguna (QOE)</h5>
                        <p class:"loc-p">VQM: {{$rs->vqm}}</p>
                        <P class:"loc-p">SSIM: {{$rs->ssim}}</p>
                        <P class:"loc-p">PSNR: {{$rs->psnr}}</p>
                                        
                        <h5 class:"loc-h5">Berdasarkan Pelayanan Jaringan</h5>
                        <p class:"loc-p">Pathloss: {{$rs->pathloss}}</p>
                        <p class:"loc-p">Link Budget: {{$rs->link_budget}}</p>
                        <p class:"loc-p">Field Strength: {{$rs->field_strength}}</p>
                        <p class:"loc-p">CNR: {{$rs->cnr}}</p>
                        <p class:"loc-p">SNR: {{$rs->snr}}</p>
                        <p class:"loc-p">BER: {{$rs->ber}}</p>

                        <h3 class:"loc-h3">Kesimpulan</h3>
                        <p>Titik Lokasi ini berada dalam kategori wilayah {{$rs->kategori}} dan berjarak {{$rs->jarak}} Km dari pemancar JTV. Berdasarkan hasil {{$rs->metode}}, Titik lokasi ini memiliki kualitas layanan yang {{$rs->kesimpulan}}.</p>
                    `;

                    marker.on('click', function() {
                        // Isi konten popup ke dalam elemen HTML
                        document.getElementById('popupContent').innerHTML = popupContent;

                        // Tampilkan popup di sebelah kiri halaman
                        document.getElementById('popupContainer').style.display = 'block';
                    });
                @endforeach
            @endif
        }); 

        // Event listener untuk menampilkan popup saat marker diklik
        

        // Event listener untuk menutup popup saat marker diklik lagi
        function closePopup() {
            document.getElementById('popupContainer').style.display = 'none';
        }

        // Event listener untuk checkbox kategori
        document.querySelectorAll('input[name="category[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                // Ambil nilai checkbox kategori yang dipilih
                var selectedCategories = Array.from(document.querySelectorAll('input[name="category[]"]:checked')).map(function(checkbox) {
                    return checkbox.value;
                });

                // Filter markah berdasarkan kategori yang dipilih
                markers.forEach(function(marker) {
                    if (selectedCategories.includes(marker.options.icon.options.iconUrl.split('/').pop().split('.')[0])) {
                        marker.addTo(map); // Tampilkan marker jika kategori sesuai
                    } else {
                        map.removeLayer(marker); // Sembunyikan marker jika kategori tidak sesuai
                    }
                });
            });
        });

        // Event listener untuk checkbox wilayah
        document.querySelectorAll('input[name="wilayah[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                // Ambil nilai checkbox wilayah yang dipilih
                var selectedWilayahs = Array.from(document.querySelectorAll('input[name="wilayah[]"]:checked')).map(function(checkbox) {
                    return checkbox.value;
                });

                // Filter markah berdasarkan wilayah yang dipilih
                markers.forEach(function(marker) {
                    if (selectedWilayahs.includes(marker.options.icon.options.iconUrl.split('/').pop().split('.')[0])) {
                        marker.addTo(map); // Tampilkan marker jika wilayah sesuai
                    } else {
                        map.removeLayer(marker); // Sembunyikan marker jika wilayah tidak sesuai
                    }
                });
            });
        });
    </script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
