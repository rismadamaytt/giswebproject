@extends('layouts.app')
  
@section('title', 'Create Qoe Parameter')
  
@section('contents')
    <h1 class="mb-0">Add Parameter</h1>
    <hr />
    <form action="{{ route('qoedata.store') }}" method="POST" enctype="multipart/form-data">
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
                <input type="number" name="vqm" class="form-control" placeholder="VQM" step="0.0001">
            </div>
            <div class="col">
                <input type="number" name="ssim" class="form-control" placeholder="SSIM" step="0.0001">
            </div>
            <div class="col">
                <input type="number" name="psnr" class="form-control" placeholder="PSNR" step="0.0001">
            </div>
        </div>
 
        <div class="row ml-1">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection