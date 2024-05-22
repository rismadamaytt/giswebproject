@extends('layouts.app')
  
@section('title', 'Edit Parameter')
  
@section('contents')
    <h1 class="mb-0">Edit Parameter</h1>
    <hr />
    <form action="{{ route('qosdata.update', $qosdata->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Longitude</label>
                <input type="number" name="longitude" class="form-control" placeholder="Longitude" value="{{ $qosdata->longitude }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Latitude</label>
                <input type="number" name="latitude" class="form-control" placeholder="Latitude" value="{{ $qosdata->latitude }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Wilayah</label>
                <input type="text" name="wilayah" class="form-control" placeholder="Wilayah" value="{{ $qosdata->wilayah }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kelurahan</label>
                <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" value="{{ $qosdata->kelurahan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Pathloss</label>
                <input type="number" class="form-control" name="pathloss" placeholder="Pathloss" value="{{ $qosdata->pathloss }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Link Budget</label>
                <input type="number" name="link_budget" class="form-control" placeholder="Link Budget" value="{{ $qosdata->link_budget }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Field Strength</label>
                <input type="number" name="field_strength" class="form-control" placeholder="Field Strength" value="{{ $qosdata->field_strength }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">CNR</label>
                <input type="number" name="cnr" class="form-control" placeholder="CNR" value="{{ $qosdata->cnr }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">SNR</label>
                <input type="number" name="snr" class="form-control" placeholder="SNR" value="{{ $qosdata->snr }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">BER</label>
                <input type="number" name="ber" class="form-control" placeholder="BER" value="{{ $qosdata->ber }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection