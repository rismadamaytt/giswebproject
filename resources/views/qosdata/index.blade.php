@extends('layouts.app')
  
@section('title', 'Qos Parameter')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Qos Parameter</h1>
        <a href="{{ route('qosdata.create') }}" class="btn btn-primary">Add Parameter</a>
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
                <th>Pathloss</th>
                <th>Link Budget</th>
                <th>Field Strength</th>
                <th>CNR</th>
                <th>SNR</th>
                <th>BER</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($qosdata->count() > 0)
                @foreach($qosdata as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->longitude }}</td>
                        <td class="align-middle">{{ $rs->latitute }}</td>
                        <td class="align-middle">{{ $rs->wilayah }}</td>
                        <td class="align-middle">{{ $rs->kelurahan}}</td>
                        <td class="align-middle">{{ $rs->pathloss }}</td>
                        <td class="align-middle">{{ $rs->link_budget }}</td>
                        <td class="align-middle">{{ $rs->field_strength }}</td>
                        <td class="align-middle">{{ $rs->cnr }}</td>   
                        <td class="align-middle">{{ $rs->snr }}</td> 
                        <td class="align-middle">{{ $rs->ber }}</td> 
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('qosdata.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('qosdata.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('qosdata.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="12">Parameter not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection