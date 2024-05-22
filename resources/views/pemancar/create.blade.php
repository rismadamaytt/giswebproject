@extends('layouts.app')
  
@section('title', 'Create Data Pemancar')
  
@section('contents')
    <h1 class="mb-0">Add Data Pemancar</h1>
    <hr />
    <form action="{{ route('pemancar.store') }}" method="POST" enctype="multipart/form-data">
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
                <input type="number" name="service" class="form-control" placeholder="Service">
            </div>
            <div class="col">
                <input type="number" name="height" class="form-control" placeholder="Height">
            </div>
            <div class="col">
                <input type="number" name="frequency" class="form-control" placeholder="Frequency" step="0.0001">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="modullation" class="form-control" placeholder="Modullation" step="0.0001">
            </div>
            <div class="col">
                <input type="number" name="gain" class="form-control" placeholder="Gain" step="0.0001">
            </div>
            <div class="col">
                <input type="number" name="transmit_power" class="form-control" placeholder="Transmit Power" step="0.0001">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="address" placeholder="Address"></textarea>
            </div>
        </div>
 
        <div class="row ml-1">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection