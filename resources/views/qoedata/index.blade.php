@extends('layouts.app')
  
@section('title', 'Qoe Parameter')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Qoe Parameter</h1>
        <a href="{{ route('qoedata.create') }}" class="btn btn-primary">Add Parameter</a>
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
                <th>#</th>
                <th>Longitude</th>
                <th>Latitute</th>
                <th>Wilayah</th>
                <th>Kelurahan</th>
                <th>VQM</th>
                <th>SSIM</th>
                <th>PSNR</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($qoedata->count() > 0)
                @foreach($qoedata as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->longitude }}</td>
                        <td class="align-middle">{{ $rs->latitute }}</td>
                        <td class="align-middle">{{ $rs->wilayah }}</td>
                        <td class="align-middle">{{ $rs->kelurahan}}</td>
                        <td class="align-middle">{{ $rs->vqm }}</td>
                        <td class="align-middle">{{ $rs->ssim }}</td>
                        <td class="align-middle">{{ $rs->psnr }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('qoedata.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('qoedata.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
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
                    <td class="text-center" colspan="9">Parameter not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection