@extends('layouts.app')
  
@section('title', 'Show Parameters')
  
@section('contents')
    <h1 class="mb-0">Detail Parameter</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Longitude</label>
            <input type="number" name="longitude" class="form-control" placeholder="Longitude" value="{{ $qoedata->longitude }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Latitude</label>
            <input type="number" name="latitude" class="form-control" placeholder="Latitude" value="{{ $qoedata->latitude }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Wilayah</label>
            <input type="text" name="wilayah" class="form-control" placeholder="Wilayah" value="{{ $qoedata->wilayah}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kelurahan</label>
            <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" value="{{ $qoedata->kelurahan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">VQM</label>
            <input type="number" class="form-control" name="vqm" placeholder="VQM" value="{{ $qoedata->vqm }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">SSIM</label>
            <input type="number" name="ssim" class="form-control" placeholder="SSIM" value="{{ $qoedata->ssim }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">PSNR</label>
            <input type="number" name="psnr" class="form-control" placeholder="PSNR" value="{{ $qoedata->psnr }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $qoedata->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $qoedata->updated_at }}" readonly>
        </div>
    </div>
@endsection