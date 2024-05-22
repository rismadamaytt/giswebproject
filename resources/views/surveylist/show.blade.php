@extends('layouts.app')
  
@section('title', 'Show Data')
  
@section('contents')
    <h1 class="mb-0">Detail data Survey</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $survey->name}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="address" class="form-control" value="{{ $survey->address}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Apakah Anda sudah mengetahui adanya Masa Analog Switch Off (ASO)?</label>
            <input type="text" name="question_1" class="form-control" value="{{ $survey->question_1 }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Apakah Anda sudah mengetahui adanya penerapan televisi digital terrestrial (DVB-T2) saat ini?</label>
            <input type="text" class="form-control" name="question_2" value="{{ $survey->question_2 }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Apakah Anda sudah menggunakan layanan televisi digital terrestrial (DVB-T2)?</label>
            <input type="text" name="question_3" class="form-control" value="{{ $survey->question_3 }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Berapa lama Anda sudah menggunakan Televisi Digital Terrestrial (DVB-T2)?</label>
            <input type="text" name="question_4" class="form-control" value="{{ $survey->question_4 }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Berikan penilaian Anda terhadap proses instalasi atau pemasangan televisi digital terrestrial (DVB-T2)(termasuk proses penyambungan dan pengaktifan Set-Top Box)</label>
            <input type="text" name="question_5" class="form-control" value="{{ $survey->question_5}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Berikan penilaian Anda terhadap hambatan yang anda alami saat menggunakan televisi digital terrestrial (DVB-T2)</label>
            <input type="text" name="question_6" class="form-control" value="{{ $survey->question_6}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Berikan penilaian Anda terhadap efisiensi penggunaan televisi digital terrestrial (DVB-T2)</label>
            <input type="text" name="question_7" class="form-control" value="{{ $survey->question_7}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Berikan penilaian Anda terhadap penggunaan sehari-hari televisi digital terrestrial (DVB-T2) (Seperti penggunaan remote, pergantian saluran TV, menu pada pengaturan)</label>
            <input type="text" name="question_8" class="form-control" value="{{ $survey->question_8}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Apakah anda pernah/ sedang menonton siaran televisi pada channel JawaPos TV  dan JTV  ?</label>
            <input type="text" name="question_9" class="form-control" value="{{ $survey->question_9}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Berikan penilaian Anda terhadap sering terjadinya delay (gambar yang ditampilkan dengan suara yang dihasilkan tidak sinkron) pada channel JawaPos TV  dan JTV </label>
            <input type="text" name="question_10" class="form-control" value="{{ $survey->question_10}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Berikan penilaian Anda terhadap sering terjadinya drop out (layar hitam karena tidak adanya sinyal/sinyal buruk) pada channel JawaPos TV  dan JTV </label>
            <input type="text" name="question_11" class="form-control" value="{{ $survey->question_11}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Berikan penilaian Anda terhadap kualitas gambar yang ditampilkan pada channel JawaPos TV dan JTV</label>
            <input type="text" name="question_12" class="form-control" value="{{ $survey->question_12}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Berikan penilaian Anda terhadap kualitas audio yang dihasilkan pada channel JawaPos TV dan JTV </label>
            <input type="text" name="question_13" class="form-control" value="{{ $survey->question_13}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Berikan penilaian Anda terhadap keberagaman saluran pada siaran televisi digital terrestrial (DVB-T2) </label>
            <input type="text" name="question_14" class="form-control" value="{{ $survey->question_14}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Apakah anda merasa puas saat menggunakan televisi digital terrestrial (DVB-T2)? </label>
            <input type="text" name="question_15" class="form-control" value="{{ $survey->question_15}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Apakah Anda merasa terhibur saat menggunakan televisi digital terrestrial (DVB-T2)?</label>
            <input type="text" name="question_16" class="form-control" value="{{ $survey->question_16}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Apakah Anda mendapatkan manfaat saat menggunakan televisi digital terrestrial (DVB-T2)?</label>
            <input type="text" name="question_17" class="form-control" value="{{ $survey->question_17}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Apakah dalam penggunaannya, televisi digital terrestrial (DVB-T2), ramah bagi para penggunanya?</label>
            <input type="text" name="question_18" class="form-control" value="{{ $survey->question_18}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Apakah dalam penggunaannya, televisi digital terrestrial (DVB-T2), sudah memenuhi ekspektasi Anda?</label>
            <input type="text" name="question_19" class="form-control" value="{{ $survey->question_19}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tuliskan harapan anda terhadap kualitas layanan televisi pada channel JawaPos TV dan JTV.</label>
            <textarea name="question_20" class="form-control" value="{{ $survey->question_20}}" readonly></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $survey->created_at }}" readonly>
        </div>
    </div>
@endsection