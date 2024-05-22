@extends('layouts.app')
  
@section('title', 'Create Qos Parameter')
  
@section('contents')
    <h1 class="mb-0">Add Parameter</h1>
    <hr />
    <form action="{{ route('qosdata.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="longitude" class="form-control" placeholder="Longitude" step="0.0001">
            </div>
            <div class="col">
                <input type="number" name="latitute" class="form-control" placeholder="Latitude" step="0.0001">
            </div>
        </div>
        <div  class="row mb-3">
            <div class="col">
                <input type="text" name="wilayah" class="form-control" placeholder="Wilayah">
            </div>
            <div class="col">
                <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="pathloss" class="form-control" placeholder="Pathloss" step="0.0001">
            </div>
            <div class="col">
                <input type="number" name="link_budget" class="form-control" placeholder="Link Budget" step="0.0001">
            </div>
            <div class="col">
                <input type="number" name="field_strength" class="form-control" placeholder="Field Strength" step="0.0001">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="number" name="cnr" class="form-control" placeholder="CNR" step="0.0001">
            </div>
            <div class="col">
                <input type="number" name="snr" class="form-control" placeholder="SNR" step="0.0001">
            </div>
            <div class="col">
                <input type="number" name="ber" class="form-control" placeholder="BER" step="0.0001">
            </div>
        </div>
 
        <div class="row ml-1">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection