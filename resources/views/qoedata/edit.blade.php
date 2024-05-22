@extends('layouts.app')
  
@section('title', 'Edit Parameter')
  
@section('contents')
    <h1 class="mb-0">Edit Parameter</h1>
    <hr />
    <form action="{{ route('qoedata.update', $qoedata->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Longitude</label>
                <input type="number" name="longitude" class="form-control" placeholder="Longitude" value="{{ $qoedata->longitude }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Latitude</label>
                <input type="number" name="latitude" class="form-control" placeholder="Latitude" value="{{ $qoedata->latitude }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Wilayah</label>
                <input type="text" name="wilayah" class="form-control" placeholder="Wilayah" value="{{ $qoedata->wilayah }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kelurahan</label>
                <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" value="{{ $qoedata->kelurahan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">VQM</label>
                <input type="number" name="vqm" class="form-control" placeholder="VQM" value="{{ $qoedata->vqm }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">SSIM</label>
                <input type="number" name="ssim" class="form-control" placeholder="SSIM" value="{{ $qoedata->ssim }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">PSNR</label>
                <input type="number" name="psnr" class="form-control" placeholder="PSNR" value="{{ $qoedata->psnr }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection