@extends('layouts.app')
  
@section('title', 'Show Parameters')
  
@section('contents')
    <h1 class="mb-0">Detail Parameter</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Longitude</label>
            <input type="number" name="longitude" class="form-control" placeholder="Longitude" value="{{ $qosdata->longitude }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Latitude</label>
            <input type="number" name="latitude" class="form-control" placeholder="Latitude" value="{{ $qosdata->latitude }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Wilayah</label>
            <input type="text" name="wilayah" class="form-control" placeholder="Wilayah" value="{{ $qosdata->wilayah}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kelurahan</label>
            <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" value="{{ $qosdata->kelurahan }}" readonly>
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
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $qosdata->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $qosdata->updated_at }}" readonly>
        </div>
    </div>
@endsection