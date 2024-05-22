@extends('layouts.app')
  
@section('title', 'Survey data')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Survey</h1>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Apakah Anda sudah mengetahui adanya Masa Analog Switch Off (ASO)?</th>
                <th>Apakah Anda sudah mengetahui adanya penerapan televisi digital terrestrial (DVB-T2) saat ini?</th>
                <th>Apakah Anda sudah menggunakan layanan televisi digital terrestrial (DVB-T2)?</th>
                <th>Berapa lama Anda sudah menggunakan Televisi Digital Terrestrial (DVB-T2)?</th>
                <th>Berikan penilaian Anda terhadap proses instalasi atau pemasangan televisi digital terrestrial (DVB-T2) (termasuk proses penyambungan dan pengaktifan Set-Top Box)</th>
                <th>Berikan penilaian Anda terhadap hambatan yang anda alami saat menggunakan televisi digital terrestrial (DVB-T2)</th>
                <th>Berikan penilaian Anda terhadap efisiensi penggunaan televisi digital terrestrial (DVB-T2)</th>
                <th>Berikan penilaian Anda terhadap penggunaan sehari-hari televisi digital terrestrial (DVB-T2) (Seperti penggunaan remote, pergantian saluran TV, menu pada pengaturan)</th>
                <th>Apakah anda pernah/ sedang menonton siaran televisi pada channel JawaPos TV dan JTV?</th>
                <th>Berikan penilaian Anda terhadap sering terjadinya delay (gambar yang ditampilkan dengan suara yang dihasilkan tidak sinkron) pada channel JawaPos TV  dan JTV </th>
                <th>Berikan penilaian Anda terhadap sering terjadinya drop out (layar hitam karena tidak adanya sinyal/sinyal buruk) pada channel JawaPos TV  dan JTV</th>
                <th>Berikan penilaian Anda terhadap kualitas gambar yang ditampilkan pada channel JawaPos TV dan JTV</th>
                <th>Berikan penilaian Anda terhadap kualitas audio yang dihasilkan pada channel JawaPos TV dan JTV</th>
                <th>Berikan penilaian Anda terhadap keberagaman saluran pada siaran televisi digital terrestrial (DVB-T2)</th>
                <th>Apakah anda merasa puas saat menggunakan televisi digital terrestrial (DVB-T2)?</th>
                <th>Apakah Anda merasa terhibur saat menggunakan televisi digital terrestrial (DVB-T2)?</th>
                <th>Apakah Anda mendapatkan manfaat saat menggunakan televisi digital terrestrial (DVB-T2)?</th>
                <th>Apakah dalam penggunaannya, televisi digital terrestrial (DVB-T2), ramah bagi para penggunanya?</th>
                <th>Apakah dalam penggunaannya, televisi digital terrestrial (DVB-T2), sudah memenuhi ekspektasi Anda?</th>
                <th>Tuliskan harapan anda terhadap kualitas layanan televisi pada channel JawaPos TV dan JTV.</th>
            </tr>
        </thead>
        <tbody>
            @if($surveylist->count() > 0)
                @foreach($surveylist as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->address }}</td>
                        <td class="align-middle">{{ $rs->question_1 }}</td>
                        <td class="align-middle">{{ $rs->question_2}}</td>
                        <td class="align-middle">{{ $rs->question_3}}</td>
                        <td class="align-middle">{{ $rs->question_4 }}</td>
                        <td class="align-middle">{{ $rs->question_5 }}</td>
                        <td class="align-middle">{{ $rs->question_6 }}</td>
                        <td class="align-middle">{{ $rs->question_7 }}</td>
                        <td class="align-middle">{{ $rs->question_8 }}</td>
                        <td class="align-middle">{{ $rs->question_9 }}</td>
                        <td class="align-middle">{{ $rs->question_10 }}</td>
                        <td class="align-middle">{{ $rs->question_11 }}</td>
                        <td class="align-middle">{{ $rs->question_12 }}</td>
                        <td class="align-middle">{{ $rs->question_13 }}</td>
                        <td class="align-middle">{{ $rs->question_14 }}</td>
                        <td class="align-middle">{{ $rs->question_15 }}</td>
                        <td class="align-middle">{{ $rs->question_16 }}</td>
                        <td class="align-middle">{{ $rs->question_17 }}</td>
                        <td class="align-middle">{{ $rs->question_18 }}</td>
                        <td class="align-middle">{{ $rs->question_19 }}</td>
                        <td class="align-middle">{{ $rs->question_20 }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('qoedata.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <form action="{{ route('qoedata.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="23">Parameter not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection