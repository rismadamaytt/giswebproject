@extends('layouts.app')
  
@section('title', 'Edit Daata Pemancar')
  
@section('contents')
    <h1 class="mb-0">Edit Data</h1>
    <hr />
    <form action="{{ route('pemancar.update', $pemancar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $pemancar->address }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Longitude</label>
                <input type="number" name="longitude" class="form-control" placeholder="Longitude" value="{{ $pemancar->longitude }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Latitude</label>
                <input type="number" name="latitude" class="form-control" placeholder="Latitude" value="{{ $pemancar->latitude }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Service</label>
                <input type="number" name="service" class="form-control" placeholder="Service" value="{{ $pemancar->service}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Height</label>
                <input type="text" name="height" class="form-control" placeholder="Height" value="{{ $pemancar->height }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Modullation</label>
                <input type="number" class="form-control" name="modullation" placeholder="Modullation" value="{{ $pemancar->modullation }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Gain</label>
                <input type="number" name="gain" class="form-control" placeholder="Gain" value="{{ $pemancar->pemancar }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Frequency</label>
                <input type="number" name="frequency" class="form-control" placeholder="Frequency" value="{{ $pemancar->frequency }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Transmit Power</label>
                <input type="number" name="transmit_power" class="form-control" placeholder="Transmit Power" value="{{ $pemancar->transmit_power }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection